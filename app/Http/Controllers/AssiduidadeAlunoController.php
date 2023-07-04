<?php

namespace App\Http\Controllers;

use App\Models\Assiduidade_aluno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\AvaliacaoTrait;
use App\Traits\AssiduidadeTrait;
use Illuminate\Support\Facades\Auth;
use App\Models\Professor;


class AssiduidadeAlunoController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        if($user->cargo_usuario === "Administrador" || $user->cargo_usuario === "Subdirector"){
            $professor = AvaliacaoTrait::pegarAdmin();
        }
        if($user->cargo_usuario === "Professor"){
            $professor = AvaliacaoTrait::pegarProfessor($user);
        }
        if($user->cargo_usuario === "Coordenacao"){
            $coord = Professor::where('pessoa_id', $user->pessoa_id)->get();
            if($coord[0]->cargo === "Coordenador Curso"){
                $professor = AvaliacaoTrait::pegarCoordenadorCurso($user);
            }
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
        $trimestre = AvaliacaoTrait::pegarTrimestre();
        $alunos = AssiduidadeTrait::pegarAssiduidadeAluno($disciplina_id, $turmas);
        return view('assiduid-aluno/assd-aluno', compact(['alunos', 'nome_turma', 'cursos', 'nome_disciplina', 'trimestre', 'professor']));
    }

    public function store(Request $request, $aluno_id, $disciplina_id, $turma_id, $professor_disciplina_id)
    {
        $trimestre = AvaliacaoTrait::pegarTrimestre();
        $falta = [
            'falta_aluno' => 1,
            'status_falta' => "N-JUSTIFICADA",
            'descricao_falta' => $request->conteudo,
            'tipo_falta' => $request->tipo_falta,
            'aluno_id' => $aluno_id,
            'id_trimestre' => $trimestre[0]->trimestre_id,
            'disciplina_id' => $disciplina_id
        ];
        Assiduidade_aluno::create($falta);
        return redirect()->back()->with('sucesso', "Falta aplicada com sucesso!");
    }

    public function show($aluno_id, $disciplina_id)
    {
        $trimestre = AvaliacaoTrait::pegarTrimestre();
        $assiduidade = Assiduidade_aluno::with('aluno.candidato.pessoa', 'aluno.turmas', 'trimestre')->where('aluno_id', $aluno_id)
        ->where('id_trimestre', $trimestre[0]->trimestre_id)
        ->get();
        if(count($assiduidade) < 1){
            return redirect()->back()->with('erro', "Nenhuma falta encontrada!");
        }
        $tempos = AssiduidadeTrait::pegarTempo($assiduidade);
        return view('assiduid-aluno/edit-assd-aluno', compact(['assiduidade', 'trimestre', 'tempos']));
    }

    public function update(Request $request, $assiduidade_id)
    {
        $assiduidade = Assiduidade_aluno::find($assiduidade_id);
        $assiduidade->status_falta = "JUSTIFICADA";
        $assiduidade->save();
        return redirect()->back()->with('sucesso', "Falta justificada com sucesso!");
    }

    public function delete(Assiduidade_aluno $assiduidade_aluno)
    {

    }
}
