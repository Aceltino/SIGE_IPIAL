<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    Pessoa,
    Curso,
    Endereco,
    Professor,
    Telefone,
    Disciplina,
    Professor_disciplina,
    Ano_lectivo
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
    public function index()
    {
        $professores = Professor::with('pessoa', 'professorDisciplina')->get();

        return view('professor.consultar-prof', compact('professores'));
    }

    public function editarProfessor(Request $request, $segmento)
    {
        // Lógica do controlador aqui
        // $request é uma instância da classe Request, que pode ser usada para acessar outros dados da requisição, como query parameters, headers, etc.
        // $segmento é o valor passado na URL como segmento

        return "Você digitou o segmento: " . $segmento;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Curso::all(['nome_curso', 'sigla']);
        $disciplinas = Disciplina::all();
        return view('professor.cadastrar-prof', ['disciplinas' => $disciplinas, 'cursos' => $cursos]);
    }

    public function profEditar($uuid)
    {
        $professor = Professor::findByUuid($uuid);
        return view('professor/editar-dados-prof', compact('professor'));
    }

    public function horarioProf($id)
    {
        $professor = Professor::with('pessoa')->findOrFail($id);
        if ( !$professor ) return false;
        return view('professor/horario-prof', compact('professor'));
    }

    public function profDadosPessoais($id)
    {
        $professor = Professor::with('pessoa')->findOrFail($id);
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
            /*
            $validatedEndereco = $request->validate([
                'municipio' => 'nullable|string',
                'bairro' => 'nullable|string',
                'zona' => 'nullable|string',
                'numero_casa' => 'nullable|int',
            ]);
            
            $validatedPessoa = $request->validate([
                'nome_completo' => 'required|string|max:255',
                'num_bi' => 'required|regex:/^\d{9}[A-Z]{2}\d{3}$/',
                'genero' => 'required|in:Masculino,Femenino',
                'num_tel' => ['required', 'regex:/^\d{9}$/'],
                'data_nascimento' => 'required|date',
            ]);
            */

            $validatedEndereco = [
                'municipio' => 'nullable|string',
                'bairro' => 'nullable|string',
                'zona' => 'nullable|string',
                'numero_casa' => 'nullable|int',
            ];


            $msg_erroEndereco = [
                '*.required' => 'Este campo é obrigatório',
                'municipio' => 'Informe o nome do seu municipio.',
                'bairro' => 'Informe o nome do seu bairro',
                'zona' => 'Informe a zona em que vive',
                'numero_casa' => 'Informe o número da casa',
            ];

            $filtro_Endereco = [
                'municipio' => $request->input('municipio'),
                'bairro' => $request->input('bairro'),
                'zona' => $request->input('zona'),
                'numero_casa' => $request->input('numero_casa'),
            ];


            $validatedPessoa = [
                'nome_completo' => 'required|string|max:255',
                'num_bi' => 'required|regex:/^\d{9}[A-Z]{2}\d{3}$/',
                'genero' => 'required|in:Masculino,Feminino',
                'num_tel' => ['required', 'regex:/^\d{9}$/'],
                'data_nascimento' => 'required|date',
            ];

            $msg_erroPessoa = [
                '*.required' => 'Este campo é obrigatório',
                'nome_completo' => 'Informe o seu nome completo.',
                'genero' => 'Informe o seu genero',
                'num_tel' => 'Informe um número de telefone válido',
                'data_nascimento' => 'Informe uma data de nascimento válida',
            ];

            $filtro_Pessoa = [
                'nome_completo' => $request->input('nome_completo'),
                'num_bi' => $request->input('num_bi'),
                'genero' => $request->input('genero'),
                'num_tel' => $request->input('num_tel'),
                'data_nascimento' => $request->input('data_nascimento'),
            ];

            /*$validarEndereco = Validator::make($filtro_Endereco, $validatedEndereco, $msg_erroEndereco);
            if ($validarEndereco) {
                return redirect()->back()->withErrors($validarEndereco)->withInput();
            }*/

            $validarPessoa = Validator::make($filtro_Pessoa, $validatedPessoa, $msg_erroPessoa);
            if ($validarPessoa) {
                return redirect()->back()->withErrors($validarPessoa)->withInput();
            }

            /*$endereco = Endereco::create($validatedEndereco);

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

            return redirect()->route('professor.cadastrar')->with('success', 'Registro criado com sucesso!');
        } catch (ValidationException $e) {
            // Captura a exceção de validação e trata os erros
            return redirect()->back()->withErrors($e->errors())->withInput();
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
