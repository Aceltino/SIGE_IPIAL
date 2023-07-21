<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nota;
use App\Traits\AvaliacaoTrait;
use App\Models\Trimestre;
use App\Models\ResultadoFinalAluno;
use App\Models\Curso;
use App\Models\Turma;
use App\Models\Disciplina;

class ExameController extends Controller
{
    public static function indexRecurso(){
        $curso = Curso::all();
        $turma = Turma::all();
        $disciplina = Disciplina::all();
        $ano_lectivo = AvaliacaoTrait::pegarAnoLectivo();
        $dado = ResultadoFinalAluno::with('alunos.candidato.pessoa', 'alunos.anoTurma.turma.curso', 'ano_lectivos')
        ->where('ano_lectivo_id', $ano_lectivo[0]->ano_lectivo_id)
        ->where('situacao', "Exame")
        ->get();
        if(count($dado) < 1){
            $dados = array();
            $turma = array();
            $disciplina = array();
            $curso = array();
            return view('avaliac-aluno/recurso', compact(['dados', 'disciplina', 'turma', 'curso']))->with('erro', "Nenhum registro encontrado!");
        }
        for ($i = 0; $i < count($dado); $i++) {
            $id_cadeiras = json_decode($dado[$i]->id_cadeiras_def, true);
            foreach ($id_cadeiras as $chave => $valor) {
                $disciplinas[$chave - 1] = Disciplina::find($id_cadeiras[$chave]);
            }
            for ($j = 0; $j < count($disciplinas); $j++) {
                $dados[$i][$j]['aluno_id'] = $dado[$i]->aluno_id;
                $dados[$i][$j]['nome_completo'] = $dado[$i]->alunos->candidato->pessoa->nome_completo;
                $dados[$i][$j]['turma_id'] = $dado[$i]->alunos->anoTurma[count($dado[$i]->alunos->anoTurma)-1]->turma->turma_id;
                $dados[$i][$j]['nome_turma'] = $dado[$i]->alunos->anoTurma[count($dado[$i]->alunos->anoTurma)-1]->turma->nome_turma;
                $dados[$i][$j]['curso_id'] = $dado[$i]->alunos->anoTurma[count($dado[$i]->alunos->anoTurma)-1]->turma->curso->curso_id;
                $dados[$i][$j]['nome_curso'] = $dado[$i]->alunos->anoTurma[count($dado[$i]->alunos->anoTurma)-1]->turma->curso->nome_curso;
                $dados[$i][$j]['disciplina_id'] = $disciplinas[$j]->disciplina_id;
                $dados[$i][$j]['nome_disciplina'] = $disciplinas[$j]->nome_disciplina;;
                $dados[$i][$j]['ano_lectivo_id'] = $dado[$i]->ano_lectivos->ano_lectivo_id;
                $dados[$i][$j]['ano_lectivo'] = $dado[$i]->ano_lectivos->ano_lectivo;

            }

        }
        return view('avaliac-aluno/recurso', compact(['dados', 'disciplina', 'turma', 'curso']));
    }

    public static function indexUpdateRecurso($aluno_id){
        $trimestre = Trimestre::where('status', 1)->get();
        $dados = Nota::with('aluno.candidato.pessoa', 'aluno.turmaAno', 'disciplina')
        ->where('aluno_id', $aluno_id)
        ->where('id_trimestre', $trimestre[0]->trimestre_id)
        ->where('tipo_prova', "Recurso")
        ->get();
        if(count($dados) < 1){
            return redirect()->back()->with('erro', "Nenhum registro de recurso encontrado!");
        }
        return view('avaliac-aluno/edit-recurso', compact('dados'));
    }

    public static function indexExameEspecial(){
        $curso = Curso::all();
        $turma = Turma::all();
        $disciplina = Disciplina::all();
        $ano_lectivo = AvaliacaoTrait::pegarAnoLectivo();
        $dado = ResultadoFinalAluno::with('alunos.candidato.pessoa', 'alunos.anoTurma.turma.curso', 'ano_lectivos')
        ->where('ano_lectivo_id', $ano_lectivo[0]->ano_lectivo_id)
        ->where('situacao', "Exame")
        ->get();
        if(count($dado) < 1){
            $dados = array();
            $turma = array();
            $disciplina = array();
            $curso = array();
            return view('avaliac-aluno/exame', compact(['dados', 'disciplina', 'turma', 'curso']))->with('erro', "Nenhum registro encontrado!");
        }
        for ($i = 0; $i < count($dado); $i++) {
            $id_cadeiras = json_decode($dado[$i]->id_cadeiras_def, true);
            foreach ($id_cadeiras as $chave => $valor) {
                $disciplinas[$chave - 1] = Disciplina::find($id_cadeiras[$chave]);
            }
            for ($j = 0; $j < count($disciplinas); $j++) {
                $dados[$i][$j]['aluno_id'] = $dado[$i]->aluno_id;
                $dados[$i][$j]['nome_completo'] = $dado[$i]->alunos->candidato->pessoa->nome_completo;
                $dados[$i][$j]['turma_id'] = $dado[$i]->alunos->anoTurma[count($dado[$i]->alunos->anoTurma)-1]->turma->turma_id;
                $dados[$i][$j]['nome_turma'] = $dado[$i]->alunos->anoTurma[count($dado[$i]->alunos->anoTurma)-1]->turma->nome_turma;
                $dados[$i][$j]['curso_id'] = $dado[$i]->alunos->anoTurma[count($dado[$i]->alunos->anoTurma)-1]->turma->curso->curso_id;
                $dados[$i][$j]['nome_curso'] = $dado[$i]->alunos->anoTurma[count($dado[$i]->alunos->anoTurma)-1]->turma->curso->nome_curso;
                $dados[$i][$j]['disciplina_id'] = $disciplinas[$j]->disciplina_id;
                $dados[$i][$j]['nome_disciplina'] = $disciplinas[$j]->nome_disciplina;;
                $dados[$i][$j]['ano_lectivo_id'] = $dado[$i]->ano_lectivos->ano_lectivo_id;
                $dados[$i][$j]['ano_lectivo'] = $dado[$i]->ano_lectivos->ano_lectivo;

            }

        }
        return view('avaliac-aluno/exame', compact(['dados', 'disciplina', 'turma', 'curso']));
    }

    public static function indexUpdateExameEspecial($aluno_id){
        $trimestre = Trimestre::where('status', 1)->get();
        $dados = Nota::with('aluno.candidato.pessoa', 'aluno.turmaAno', 'disciplina')
        ->where('aluno_id', $aluno_id)
        ->where('id_trimestre', $trimestre[0]->trimestre_id)
        ->where('tipo_prova', "Recurso")
        ->get();
        if(count($dados) < 1){
            return redirect()->back()->with('erro', "Nenhum registro de recurso encontrado!");
        }
        return view('avaliac-aluno/edit-exame', compact('dados'));
    }

}
