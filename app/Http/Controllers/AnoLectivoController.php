<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ano_lectivo;
use Illuminate\Http\Request;
use App\Traits\AnoLectivoTrait;
use App\Http\Requests\AnoLectivoRequest;
use App\Models\Trimestre;
use App\Traits\AvaliacaoTrait;


class AnoLectivoController extends Controller
{
    public static function pegarPenultimoAnoLectivo()
    {
        $penultimoAno = Ano_lectivo::orderBy('ano_lectivo_id', 'desc')->skip(1)->first();
        return $penultimoAno->ano_lectivo_id;
    }

    public static function pegarIdAnoLectivo()
    {
        $ultimoAno = Ano_lectivo::orderBy('ano_lectivo_id', 'desc')
        ->first();
        return $ultimoAno->ano_lectivo_id;
    }

        public static function AnoLectivoConfig()
        {
            $anoLectivo = AnoLectivoController::pegarAnoLectivo(AnoLectivoController::pegarIdAnoLectivo());
            if(!$anoLectivo) {
                return 0;
            }

            if (!empty($anoLectivo))
            {
                $datasRestricao = [
                    'InicioAnoLectivo' => $anoLectivo->data_inicio_ano_lectivo,
                    'FimAnoLectivo' => $anoLectivo->data_fim_ano_lectivo,
                    'InicioInscricao' => $anoLectivo->data_inicio_inscricao,
                    'FimInscricao' => $anoLectivo->data_fim_inscricao,
                    'InicioMatricula' => $anoLectivo->data_inicio_matricula,
                    'FimMatricula' => $anoLectivo->data_fim_matricula,
                    'Num_turma_turno' => $anoLectivo->num_sala_escola,
                    'Num_aluno_turma' => $anoLectivo->num_aluno_na_turma,
                ];
                        return $datasRestricao;
            }
                    return 0;
        }

    public static function pegarAnoLectivo($id)
    {
        $ultimoAno = Ano_lectivo::orderBy('ano_lectivo_id', 'desc')
        ->where('ano_lectivo_id', $id)
        ->first();
        return $ultimoAno;
    }


    public function indexCadastroAnoLectivo(){
        $ano_lectivo = Ano_lectivo::where('status_ano_lectivo', 1)->get();
        if (count($ano_lectivo) > 0) {
            return redirect()->route('ano.lectivo')->with('erro', 'Ainda há um ano lectivo em curso.');
        }
        return view('ano-lectivo/criar-ano-lect');
    }

    public function store(AnoLectivoRequest $req){
        $request = $req->validated();
        //dd(date('Y', strtotime($request['data_inicio_ano_lectivo'])) . "-" . date('Y', strtotime($request['data_fim_ano_lectivo'])));
        $anoLectivo = [
            'ano_lectivo' => $request['ano_lectivo'],
            'status_ano_lectivo' => 1,
            'data_inicio_ano_lectivo' => date('Y-m-d'),
            'num_aluno_na_turma' => $request['num_aluno_na_turma'],
            'num_sala_escola' => $request['num_sala_escola'],
            'data_inicio_inscricao' => $request['data_inicio_inscricao'],
            'data_fim_inscricao' => $request['data_fim_inscricao'],
            'data_inicio_matricula' => $request['data_inicio_matricula'],
            'data_fim_matricula' => $request['data_fim_matricula'],
        ];

        $al = Ano_lectivo::where('status_ano_lectivo', 1)->first();
        if($al){
            $al->status_ano_lectivo = 0;
            $al->save();
        }

        $id = Ano_Lectivo::create($anoLectivo);
        //dd($id->ano_lectivo_id);
        $trimestre[0] = [
            'trimestre' => "1º",
            'status' => 0,
            'data_inicio' => null,
            'data_fim' => null,
            'ano_lectivo_id' => $id->ano_lectivo_id
        ];
        $trimestre[1] = [
            'trimestre' => "2º",
            'status' => 0,
            'data_inicio' => null,
            'data_fim' => null,
            'ano_lectivo_id' => $id->ano_lectivo_id
        ];
        $trimestre[2] = [
            'trimestre' => "3º",
            'status' => 0,
            'data_inicio' => null,
            'data_fim' => null,
            'ano_lectivo_id' => $id->ano_lectivo_id
        ];

        $tr = Trimestre::where('status', 1)->first();
        if($tr){
            $tr->status = 0;
            $tr->save();
        }

        for($i = 0; $i < count($trimestre); $i++){
            Trimestre::create($trimestre[$i]);
        }

        //dd($trimestre);

        //Todas as funções que devem acontecer no inicio do ano lectivo devem estar abaixo deste comentário
        AlunoTurmaController::alunoAnolectivo(); // Criar turma automaticamente
        AlunoTurmaController::situacaoAluno(); // Atribuir turmas aos alunos da 11ª em diante.

        return redirect()->route('ano.lectivo')->with('sucesso', "Ano lectivo criado com sucesso.");
    }

    public function index(){
        $anoLectivo = Ano_lectivo::all()->toArray();

        return view('ano-lectivo/ano-lect', compact('anoLectivo'));
    }

    public function indexUpdate($id){
        $anoLectivo = Ano_lectivo::where('ano_lectivo_id', $id)->get()->toArray();
        if(count($anoLectivo) > 0 && $anoLectivo[0]['status_ano_lectivo'] == 1){
            $trimestre = Trimestre::where('ano_lectivo_id', $anoLectivo[0]['ano_lectivo_id'])->get()->toArray();
            return view('ano-lectivo/edit-ano-letivo', compact(['anoLectivo', 'trimestre']));
        } else{
            return redirect()->route('ano.lectivo')->with('erro', 'O ano lectivo seleccionado está inactivo.');
        }
    }

    public function update(AnoLectivoRequest $req){
        $request = $req->validated();
        //dd($request);
        $verif = Ano_lectivo::where('ano_lectivo', $request['ano_lectivo'])->get()->first();
        //dd($verif);
        if(!empty($verif) && $verif->ano_lectivo_id != $request['id']){
            return redirect()->back()->with('erro', 'Este ano lectivo já existe.');
        } else{
            $anoLectivo = [
                'ano_lectivo' => $request['ano_lectivo'],
                'status_ano_lectivo' => 1,
                'num_aluno_na_turma' => $request['num_aluno_na_turma'],
                'num_sala_escola' => $request['num_sala_escola'],
                'data_inicio_inscricao' => $request['data_inicio_inscricao'],
                'data_fim_inscricao' => $request['data_fim_inscricao'],
                'data_inicio_matricula' => $request['data_inicio_matricula'],
                'data_fim_matricula' => $request['data_fim_matricula'],
            ];

            Ano_Lectivo::where('ano_lectivo_id', $request['id'])->update($anoLectivo);

            return redirect()->route('ano.lectivo')->with('sucesso', 'Ano lectivo actualizado com sucesso.');
        }
    }

    public static function pegarNumVagas()
    {
        $ultimoAno = Ano_lectivo::latest()->first();
        return $ultimoAno->num_aluno_na_turma;
    }

    public static function pegarDataFimInscricao()
    {
        $ultimoAno = Ano_lectivo::latest()->first();
        return $ultimoAno->data_fim_inscricao;
    }

    public function indexConfiguracao($ano_lectivo_id){
        $ano_lectivo = Ano_lectivo::find($ano_lectivo_id);
        if ($ano_lectivo && $ano_lectivo->status_ano_lectivo === 1) {
            $trimestres = Trimestre::where('ano_lectivo_id', $ano_lectivo->ano_lectivo_id)->get();
            return view('ano-lectivo.configuracoes-do-ano-lectivo', compact(['ano_lectivo', 'trimestres']));
        } elseif($ano_lectivo && $ano_lectivo->status_ano_lectivo === 0){
            return redirect()->route('ano.lectivo')->with('erro', 'Não é possível configurar um ano lectivo fechado.');
        } else{
            return redirect()->route('ano.lectivo')->with('erro', 'Ano lectivo não encontrado.');
        }
    }

    public function configuracaoAnoLectivo(Request $request){

        if (isset($request->trimestre1º)) {

            if(!AnoLectivoTrait::validarAberturaTrimestre()){
                return redirect()->back()->with('erro', 'Não pode haver mais de um trimestre abertos na mesma data.');
            }
            if(!AnoLectivoTrait::validarProcessoAberturaTrimestre($request->trimestre1º)){
                return redirect()->back()->with('erro', 'Não pode abrir o primeiro trimestre sem que o prazo para as matriculas termine.');
            }
            if(!AnoLectivoTrait::validarStatusTrimestre()){
                return redirect()->back()->with('erro', 'Não pode abrir um trimestre sem fechar o anterior.');
            }
            if(AnoLectivoTrait::abrirTrimestre($request->trimestre1º)){
                return redirect()->back()->with('sucesso', 'Trimestre aberto com sucesso.');
            }
        }
        if (isset($request->trimestre2º)) {
            if(!AnoLectivoTrait::validarAberturaTrimestre()){
                return redirect()->back()->with('erro', 'Não pode haver mais de um trimestre abertos na mesma data.');
            }
            if(!AnoLectivoTrait::validarProcessoAberturaTrimestre($request->trimestre2º)){
                return redirect()->back()->with('erro', 'Não pode abrir o segundo trimestre sem que o primeiro trimestre seja concluído.');
            }
            if(!AnoLectivoTrait::validarStatusTrimestre()){
                return redirect()->back()->with('erro', 'Não pode abrir um trimestre sem fechar o anterior.');
            }
            if(AnoLectivoTrait::abrirTrimestre($request->trimestre2º)){
                return redirect()->back()->with('sucesso', 'Trimestre aberto com sucesso.');
            }
        }
        if (isset($request->trimestre3º)) {
            if(!AnoLectivoTrait::validarAberturaTrimestre()){
                return redirect()->back()->with('erro', 'Não pode haver mais de um trimestre abertos na mesma data.');
            }
            if(!AnoLectivoTrait::validarProcessoAberturaTrimestre($request->trimestre3º)){
                return redirect()->back()->with('erro', 'Não pode abrir o terceiro trimestre sem que o segundo trimestre seja concluído.');
            }
            if(!AnoLectivoTrait::validarStatusTrimestre()){
                return redirect()->back()->with('erro', 'Não pode abrir um trimestre sem fechar o anterior.');
            }
            if(AnoLectivoTrait::abrirTrimestre($request->trimestre3º)){
                return redirect()->back()->with('sucesso', 'Trimestre aberto com sucesso.');
            }
        }
        if (isset($request->fechar_trimestre)) {
            if(!AnoLectivoTrait::validarFechamentoTrimestre()){
                return redirect()->back()->with('erro', 'Não é poossível fechar mais de um trimestre na mesma data.');
            }
            // $trimestre = Trimestre::find($request->fechar_trimestre);
            // if(!AnoLectivoTrait::validateFimTrimestres($trimestre->data_inicio, date('Y-m-d'))){
            //     return redirect()->back()->with('erro', 'Um trimestre deve durar no mínimo 3 meses.');
            // }
            if(AnoLectivoTrait::fecharTrimestre($request->fechar_trimestre)){
                return redirect()->back()->with('sucesso', 'Trimestre fechado com sucesso.');
            }
        }
        if (isset($request->fechar_ano_lectivo)) {
            if(!AnoLectivoTrait::verificarStatusAnoLectivo($request->fechar_ano_lectivo)){
                return redirect()->back()->with('erro', 'Este ano lectivo já se encontra fechado.');
            }
            if(!AnoLectivoTrait::verificarTrimestresAnoLectivo($request->fechar_ano_lectivo)){
                return redirect()->back()->with('erro', 'Ano lectivo não pode ser fechado se existir algum trimestre em curso.');
            }
            $trimestre = Trimestre::where('trimestre', "3º")->where('ano_lectivo_id', $request->fechar_ano_lectivo)->get()->first();
            if(!AnoLectivoTrait::validarDataFimAnoLectivo($trimestre->data_fim, date('Y-m-d'))){
                return redirect()->back()->with('erro', 'Ano lectivo só pode ser fechado após o fechamento do terceiro trimestre.');
            }

             CandidatoController::eliminarCandidatos(); // Eliminar todos os candidatos não matriculados no ano lectivo
             AlunoController::alunosVinculados(); //Cortar o acesso de todos os alunos do sistema


             //Todas as funções devem ser colocadas acima porque depois do ano lectivo estar com o status 0 nenhuma ação é permitida.
             $ano_lectivo = Ano_lectivo::find($request->fechar_ano_lectivo);
             $ano_lectivo->status_ano_lectivo = 0;
             $ano_lectivo->data_fim_ano_lectivo = date('Y-m-d');
             $ano_lectivo->save();
             return redirect()->route('ano.lectivo')->with('sucesso', 'Ano lectivo fechado com sucesso.');

        }
    }


}
