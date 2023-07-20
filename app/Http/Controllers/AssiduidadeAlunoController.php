<?php

namespace App\Http\Controllers;

use App\Models\Assiduidade_aluno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\AvaliacaoTrait;
use App\Traits\AssiduidadeTrait;
use Illuminate\Support\Facades\Auth;
use App\Models\Professor;
use App\Models\Tempo;
use App\Models\Ano_lectivo;

class AssiduidadeAlunoController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        if($user->cargo_usuario === "Subdirector"){
            $professor = AvaliacaoTrait::pegarAdmin();
            $erro = AvaliacaoTrait::erros($professor);
            if($erro !== true){
                return redirect()->route('erro.assiduidade')->with('erro', $erro);
            }
        }
        if($user->cargo_usuario === "Coordenacao"){
            $coord = Professor::where('pessoa_id', $user->pessoa_id)->get();
            if(count($coord) < 1){
                return redirect()->route('erro.assiduidade')->with('erro', "Nenhuma avaliação encontrada!");
            }
            if($coord[0]->cargo === "Coordenador Curso"){
                $professor = AvaliacaoTrait::pegarCoordenadorCurso($user);
                $erro = AvaliacaoTrait::erros($professor);
                if($erro !== true){
                    return redirect()->route('erro.assiduidade')->with('erro', $erro);
                }
            }
            if($coord[0]->cargo === "Coordenador Area"){
                $professor = AvaliacaoTrait::pegarCoordenadorArea($user);
                $erro = AvaliacaoTrait::erros($professor);
                if($erro !== true){
                    return redirect()->route('erro.assiduidade')->with('erro', $erro);
                }
            }
        }
        if($user->cargo_usuario === "Professor"){
            $professor = AvaliacaoTrait::pegarProfessor($user);
            $erro = AvaliacaoTrait::erros($professor);
            if($erro !== true){
                return redirect()->route('erro.assiduidade')->with('erro', $erro);
            }
        }
        if (!isset($professor)) {
            return redirect()->route('inicio');
        }
        $inc = 0;
        for ($i = 0; $i < count($professor); $i++) {
            $disciplina_id[$i] = $professor[$i]['disciplina_id'];
            $nome_disciplina[$i] = $professor[$i]['nome_disciplina'];
            for ($j = 0; $j < (count($professor[$i]) - 3); $j++) {
                $turma =  AvaliacaoTrait::pegarAnoTurmaCoord($professor[$i][$j]['turma_id']);
                $n_turma = $professor[$i][$j]['nome_turma'];
                if($j === 0){
                    $turmas[$i][$j] = $turma;
                }
                if($inc === 0){
                    $nome_turma[$j] = $n_turma;
                    $inc++;
                }
                if(!in_array($n_turma, $nome_turma)){
                    $nome_turma[$inc] = $n_turma;
                    $inc++;
                }
                if(!in_array($turma, $turmas[$i])){
                    $turmas[$i][$j] = $turma;
                }
            }
        }
        $incremento = 0;
        for ($i = 0; $i < count($professor); $i++) {
            for ($j = 0; $j < (count($professor[$i]) - 3); $j++) {
                if ($incremento === 0) {
                    $cursos[$incremento] = $professor[$i][$j]['nome_curso'];
                    $incremento++;
                }
                if (!in_array($professor[$i][$j]['nome_curso'], $cursos)) {
                    $cursos[$incremento] = $professor[$i][$j]['nome_curso'];
                    $incremento++;
                }
            }
        }

        // $teste = Assiduidade_aluno::where('tipo_falta', 'PRESENCIAL')
        // ->where('aluno_id', 4)
        // ->where('id_trimestre', 28)->get();
        // dd($teste);
        $tempos = Tempo::all();
        $trimestre = AvaliacaoTrait::pegarTrimestre();
        $alunos = AssiduidadeTrait::pegarAssiduidadeAluno($disciplina_id, $turmas);
        //dd($professor);
        $erro = AvaliacaoTrait::erros($alunos);
        if($erro === true){
            return view('assiduid-aluno/assd-aluno', compact(['alunos', 'nome_turma', 'cursos', 'nome_disciplina', 'trimestre', 'professor', 'tempos']));
        } else{
            return redirect()->route('erro.assiduidade')->with('erro', $erro);
        }
    }
    public function store(Request $request)
    {
        if(!isset($request->aluno)){
            return redirect()->back()->with('erro', "Seleccione os alunos que pretende marcar a falta!");

        }
        $dia = AssiduidadeTrait::pegarDiaBanco();

        $erro = AvaliacaoTrait::erros($dia);
        if($erro !== true){
            return redirect()->back()->with('erro', $erro);
        }
        $tempo = AssiduidadeTrait::verifyTempo($dia[0]['dia_id'], $request->tempo, $request->turma[0], $request->professor_disciplina[0]);
        $erro = AvaliacaoTrait::erros($tempo);
        if($erro !== true){
            return redirect()->back()->with('erro', $erro);
        }
        $trimestre = AvaliacaoTrait::pegarTrimestre();
        $falha = 0;
        $sucesso = 0;
        foreach ($request->aluno as $key => $value) {
            $tot_faltas = Assiduidade_aluno::where('created_at', 'like', '%'.date('Y-m-d').'%')->where('aluno_id', $value)
            ->where('id_trimestre', $trimestre[0]->trimestre_id)->where('disciplina_id', $request->disciplina[0])
            ->where('tipo_falta', $request->tipo_falta)->get();
            if (count($tot_faltas) > 0) {
                $falha++;
            } else{
                $falta = [
                    'status_falta' => "N-JUSTIFICADA",
                    'tipo_falta' => $request->tipo_falta,
                    'aluno_id' => $value,
                    'id_trimestre' => $trimestre[0]->trimestre_id,
                    'disciplina_id' => $request->disciplina[0],
                    'tempo_id' => $request->tempo
                ];
                Assiduidade_aluno::create($falta);
                $sucesso++;
            }
        }
        if ($sucesso > 0 && $falha > 0) {
            return redirect()->back()->with('sucesso', "As faltas foram aplicadas com sucesso, mas há " . $falha . " aluno(s) que já possuía(m) uma falta neste tempo!");
        } elseif($sucesso > 0 && $falha === 0){
            return redirect()->back()->with('sucesso', "Falta(s) aplicada(s) com sucesso!");
        } elseif ($sucesso === 0 && $falha > 0) {
            return redirect()->back()->with('erro', "Não foi possível marcar falta porque o(s) aluno(s) já possuem uma falta neste tempo!");
        }

     }

    public function show($aluno_id, $disciplina_id)
    {
        $trimestre = AvaliacaoTrait::pegarTrimestre();
        $assiduidade = Assiduidade_aluno::with('aluno.candidato.pessoa', 'aluno.turmas', 'trimestre', 'tempo')->where('aluno_id', $aluno_id)
        ->where('disciplina_id', $disciplina_id)
        ->where('id_trimestre', $trimestre[0]->trimestre_id)
        ->get();
        if(count($assiduidade) < 1){
            return redirect()->back()->with('erro', "Nenhuma falta encontrada!");
        }
        return view('assiduid-aluno/edit-assd-aluno', compact(['assiduidade', 'trimestre']));
    }

    public function update(Request $request, $assiduidade_id)
    {
        $assiduidade = Assiduidade_aluno::find($assiduidade_id);
        $assiduidade->status_falta = "JUSTIFICADA";
        $assiduidade->descricao_falta = $request->conteudo;
        if($assiduidade->save()){
            return redirect()->back()->with('sucesso', "Falta justificada com sucesso!");
        }
        return redirect()->back()->with('sucesso', "Lamentamos! Erro na Justificação da Falta");
    }

    //Função que retorna todas as faltas do aluno para o Carlos Marques
    public static function assiduidadeAnual($aluno_id, $ano_lectivo_id):mixed
    {
        $ano_lectivo= Ano_lectivo::with('trimestres')->latest()
                                ->where('ano_lectivo_id', $ano_lectivo_id)
                                ->first();

        for($i = 0; $i < count($ano_lectivo->trimestres); $i++) {

            $faltas[$i] = Assiduidade_aluno::with('disciplina')
                                            ->where('aluno_id', $aluno_id)
                                            ->where('id_trimestre', $ano_lectivo->trimestres[$i]->trimestre_id)
                                            // ->where('status_falta',"N-JUSTIFICADA")
                                            ->get();
        }
        return $faltas;
    }

    //Função-2 que retorna todas as faltas do aluno para o Carlos Marques
    public static function assiduidadeAnual_2($aluno_id, $ano_lectivo_id):mixed
    {

        $ano_lectivo= Ano_lectivo::with('trimestres')->latest()
                                ->where('ano_lectivo_id', $ano_lectivo_id)
                                ->first();

        for($i = 0; $i < count($ano_lectivo->trimestres); $i++) {

            $faltas[$i] = Assiduidade_aluno::with('disciplina')
                                            ->where('aluno_id', $aluno_id)
                                            ->where('id_trimestre', $ano_lectivo->trimestres[$i]->trimestre_id)
                                            ->where('status_falta',"N-JUSTIFICADA")
                                            ->get();
        }
        return $faltas;
    }



}//Fim da Classe AssiduidadeAlunoController
