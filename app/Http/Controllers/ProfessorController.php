<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Pessoa,
    Curso,
    Endereco,
    Professor,
    Disciplina,
    Professor_disciplina,
    Ano_lectivo,
    Area_formacao
};
use Illuminate\Support\Facades\{
    Validator,
    DB
};
use App\Traits\ValidarBITrait;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $professores = Professor::with('pessoa', 'professorDisciplina')
            ->whereIn('professor_id', function ($query) {
                $query->selectRaw('MIN(professor_id)')
                    ->from('professores')
                    ->groupBy('pessoa_id');
            })->get();

        $cursos = Curso::all(['nome_curso', 'sigla', 'curso_id']);
        $prof_disc = Professor_disciplina::with('disciplina')->get();

        return view('professor.consultar-prof', compact('professores', 'cursos', 'prof_disc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():mixed
    {
        $cursos = Curso::all(['nome_curso', 'sigla', 'curso_id']);
        $disciplinas = Disciplina::all();
        $area_formacao = Area_formacao::all();
        return view('professor.cadastrar-prof', ['area_formacao' => $area_formacao, 'disciplinas' => $disciplinas, 'cursos' => $cursos]);
    }

    //Metodo Armazerna Dados Pessoais 
    public function profEditar($uuid)
    {
        $professor = Professor::findByUuid($uuid);
        return view('professor/editar-dados-prof', compact('professor'));
    }

    public function horarioProf($id)
    {
        $professor = Professor::with('pessoa')->find($id);
        if ( !$professor ) return false;
        return view('professor/horario-prof', compact('professor'));
    }

    //Metodo Armazerna Dados Pessoais 
    public function profDadosPessoais($id)
    {
        $professor = Professor::with('pessoa')->find($id);
        if ( !$professor ) return false;
        return view('professor.editar-dados-pessoais-prof', compact('professor'));
    }

    public function avaliacao($id)
    {
        $professor = Professor::with('pessoa')->findOrFail($id);
        if ( !$professor ) return false;
        return view('professor/avaliacao-prof', compact('professor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nome_completo' => 'required|string|max:255',
                'num_bi' => 'required|regex:/^\d{9}[A-Z]{2}\d{3}$/',
                'genero' => 'required|in:Masculino,Feminino,Femenino',
                'num_tel' => ['required', 'regex:/^\d{9}$/'],
                'data_nascimento' => 'required|date|',

                'qtd_disciplinas' => 'required|integer|min:1|max:4',
                'disciplina' => 'required|array|min:1',
                'disciplina.*' => 'required|integer',

                'turno' => 'required|array|min:1',
                'turno.*' => 'array',

                'curso' => 'required|array|min:1',
                'curso.*' => 'required|integer',

                //'course' => 'required|integer|min:1|max:7',
            ], [
                'nome_completo.required' => 'O campo nome completo é obrigatório.',
                'nome_completo.string' => 'O campo nome completo deve ser uma string.',
                'nome_completo.max' => 'O campo nome completo não pode ter mais de :max caracteres.',
                'num_bi.required' => 'O campo número do BI é obrigatório.',
                'num_bi.regex' => 'O campo número do BI não está no formato válido.',
                'genero.required' => 'O campo género é obrigatório.',
                'genero.in' => 'O campo género deve ser Masculino ou Feminino.',
                'num_tel.required' => 'O campo número de telefone é obrigatório.',
                'num_tel.regex' => 'O campo número de telefone não está no formato válido.',
                'data_nascimento.required' => 'O campo data de nascimento é obrigatório.',
                'data_nascimento.date' => 'O campo data de nascimento não está no formato válido.',

                'qtd_disciplinas.required' => 'O campo quantidade de disciplinas é obrigatório.',
                'qtd_disciplinas.integer' => 'O campo quantidade de disciplinas deve ser um número inteiro.',
                'qtd_disciplinas.min' => 'O campo quantidade de disciplinas deve ser no mínimo :min.',
                'qtd_disciplinas.max' => 'O campo quantidade de disciplinas deve ser no máximo :max.',
                'disciplina.*.required' => 'O campo disciplina é obrigatório.',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $disciplinas = $request->input('disciplina');
            $turnos = $request->input('turno');
            $curso = $request->input('curso');
            $dadosDisciplina = [];

            for ($i = 1; $i <= count($turnos); $i++) {
                for ($d=0; $d < count($turnos[$i]); $d++) {
                    if ( isset($disciplinas[$i-1])) {
                        $disciplina = Disciplina::where('disciplina_id', $disciplinas[$i-1])->first();
                        if ( isset($turnos[$i][$d]) ) {
                            $dadosDisciplina[] = [
                                'disciplina_id' => $disciplina->disciplina_id,
                                'nome_disciplina' => $disciplina->nome_disciplina,
                                'turno' => $turnos[$i][$d],
                            ];
                        }
                    }
                }
            }

            $dadosPessoa = [
                $request->input('nome_completo'),
                $request->input('num_bi'),
                $request->input('genero'),
                $request->input('num_tel'),
                $request->input('data_nascimento'),
            ];
            $dadosProf = [
                $request->input('formacao'),
                $request->input('area_formacao'),
                $request->input('course'),
                $request->input('cargo'),
            ];
            $validatedEndereco = [
                'municipio' => $request->input('municipio'),
                'bairro' => $request->input('bairro'),
                'zona' => $request->input('zona'),
                'numero_casa' => $request->input('numero_casa')
            ];

            $endereco = Endereco::create($validatedEndereco); //Validar

            $pessoa = Pessoa::create([
                'nome_completo' => $request->input('nome_completo'),
                'num_bi' => $request->input('num_bi'),
                'genero' => $request->input('genero'),
                'endereco_id' => $endereco->endereco_id,
                'telefone' => $request->input('num_tel'),
                'data_nascimento' => $request->input('data_nascimento'),
            ]); // Pessoa Validar

            for ($i = 0; $i < count($curso); $i++) {
                $cr = Curso::where('curso_id', $curso[$i])->first();
                $dadosDisciplina[] = [
                    'curso_id' => $cr->curso_id,
                    'area_formacao' => $request->input('area_formacao'),
                    'cargo' => $request->input('cargo')
                ];
                // Aqui cadastra o professeor de acordo o numero de cursos
                $professor = Professor::create([
                    'formacao' => $request->input('formacao'),
                    'pessoa_id' => $pessoa->pessoa_id,
                    'area_formacao_id' => $request->input('area_formacao'),
                    'curso_id' => $cr->curso_id,
                    'cargo' => $request->input('cargo'),
                ]);
            }

            $ano_let = Ano_lectivo::where('status_ano_lectivo', 1)->first();
            for ($i = 0; $i < count($dadosDisciplina); $i++) {
                if ( isset($dadosDisciplina[$i]['nome_disciplina']) && isset($dadosDisciplina[$i]['turno']) ) {
                    $prof_disc = Professor_disciplina::create([
                        'disciplina_id' => $dadosDisciplina[$i]['disciplina_id'],
                        'professor_id' => $professor->professor_id,
                        'ano_lectivo_id' => $ano_let->ano_lectivo_id,
                        'prioridade' => 1,
                        'turno_id' => $dadosDisciplina[$i]['turno'],
                    ]);
                }
            }

            //var_dump($dadosDisciplina); exit;
            //dd($request);
            /*$pessoa = Pessoa::create([
                'nome_completo' => $request->input('nome_completo'),
                'num_bi' => $request->input('num_bi'),
                'genero' => $request->input('genero'),
                'telefone' => $request->input('num_tel'),
                'data_nascimento' => $request->input('data_nascimento'),
            ]);

            #$endereco = Endereco::create($validatedEndereco);

            $validatedPessoa['endereco_id'] = $endereco->endereco_id;
            $validatedPessoa['telefone'] = $request->input('num_tel');
            $pessoa = Pessoa::create($validatedPessoa);

            $prof = Professor::create(['formacao' => $request->input('formacao'), '' => $request->input('curso'), 'pessoa_id' => $pessoa->pessoa_id]);
            $ano_letivo = Ano_lectivo::latest()->get()->last();
            Professor_disciplina::create([
                'disciplina_id' => $request->input('disciplina'),
                'professor_id'  => $prof->professor_id,
                'ano_lectivo_id' => $ano_letivo->ano_lectivo_id,
                'prioridade'    => 1
            ]); */

            return redirect()->route('professor')->with('success', 'Professor Registrado com sucesso!');
        } catch (\Exception $e) {
            // Captura a exceção de validação e trata os erros
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $professor = Professor::with('pessoa')->findOrFail($id);
        if ( !$professor ) return false;

        return view('professor.editar-dados-prof', compact('professor'));
    }

    public function atualizar(Request $request, $id)
    {
        $professor = Professor::findOrFail($id);
        $professor->formacao = $request->input('formacao');
        $professor->pessoa->nome_completo = $request->input('nome_completo');
        $professor->pessoa->telefone = $request->input('telefone');
        $professor->pessoa->num_bi = $request->input('num_bi');
        $professor->pessoa->save();
        $professor->save();

        return redirect()->route('professor.Editar', ['id' => $professor->professor_id])->with('success', 'Dados do professor atualizados com sucesso!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function professores()
    {
        $professores = Professor::all();
        return $professores;
    }
    /*public function store(Request $request)
    {
        try {
            $validatedEndereco = $request->validate([
                'municipio' => 'nullable|string',
                'bairro' => 'nullable|string',
                'zona' => 'nullable|string',
                'numero_casa' => 'nullable|int',
            ]);

            $validatedPessoa = $request->validate([
                'nome_completo' => 'required|string|max:255',
                'num_bi' => 'required|regex:/^\d{9}[A-Z]{2}\d{3}$/',
                'genero' => 'required|in:Masculino,Feminino',
                'data_nascimento' => 'required|date',
            ]);

            $validatedTelefone = $request->validate([
                'num_tel' => ['required', 'regex:/^\d{9}$/'],
            ]);

            $endereco = Endereco::create($validatedEndereco);

            $validatedPessoa['endereco_id'] = $endereco->endereco_id;
            $pessoa = Pessoa::create($validatedPessoa);

            $validatedTelefone['pessoa_id'] = $pessoa->pessoa_id;
            $telefone = Telefone::create($validatedTelefone);

            $prof = Professor::create(['formacao' => 'Engenheiro Civil', 'pessoa_id' => $pessoa->pessoa_id]);

            return redirect()->route('professor')->with('success', 'Registro criado com sucesso!');
        } catch (ValidationException $e) {
            // Captura a exceção de validação e trata os erros
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }*/
}
