<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\AlunoTurma;
use App\Models\AnoTurmaCood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AlunoTurmaController extends Controller
{
    public static function SelecionarTurma() //10ª Classe
    {
       $alunos = AlunoController::alunosSemturma();

       if(!$alunos)
       {
            return "Todos os alunos matriculados atualmente estão nas suas devidas turmas.";
       }
       $alunoTurma = [];


       usort($alunos, function ($a, $b)
            {
                $data_nascA = $a['data_nasc'];
                $data_nascB = $b['data_nasc'];

                if ($data_nascA == $data_nascB)
                {
                    return 0;
                }

                return ($data_nascA > $data_nascB) ? -1 : 1;
            });

        for($i = 0; $i < count($alunos); $i++)
        {
            $turmas = AlunoTurmaController::pegarTurmasCurso($alunos[$i]['curso']);

            usort($turmas, function ($a, $b)
            {
                $identificadorA = substr($a['turma'], -1);
                $identificadorB = substr($b['turma'], -1);
                $turnos = ['M' => 3, 'T' => 2, 'N' => 1];

                if ($identificadorA != $identificadorB)
                {
                    return $turnos[$identificadorB] - $turnos[$identificadorA];
                }

                return strcmp($identificadorA, $identificadorB);
            });

            foreach ($turmas as $turma)
            {
                if($turma['num_vaga'] > 0)
                {
                    $alunoTurma[] = [
                    'turma' => $turma['TurmaAno_id'],
                    'aluno' => $alunos[$i]['aluno_id'],
                    'nome' => $alunos[$i]['nome']
                    ];

                    $vaga = $turma['num_vaga'] - 1;
                    $vagaUpdate = [
                    'id' => $turma['TurmaAno_id'],
                    'vaga' => $vaga
                    ];
                    AlunoController::updateStatusTrue($alunos[$i]['aluno_id']);
                    AlunoTurmaController::atualizarVaga($vagaUpdate);
                    break;
                }
            }
        }

        usort($alunoTurma, function($a, $b) {
            return strcmp($a['nome'], $b['nome']);
        });

        $alunosOrdemTurma = [];
        foreach($alunoTurma as $aluno)
        {
            if( !in_array($aluno['aluno'], $alunosOrdemTurma) )
            {

            $qtdAlunos = AlunoTurmaController::quantidadeTurma($aluno['turma']);
            $alunoA = Aluno::find($aluno['aluno']);
            $alunoA->Anoturma()->attach($aluno['turma'],[
                'numero_aluno' => $qtdAlunos + 1
            ]);

            $userId = AlunoController::pegarIdUser($aluno['aluno']);
            $dadosUser=[
                'usuario_id'=> $userId,
                'status_usuario'=>1,
            ];
            $user = UserController::updateUser($dadosUser);
            if(!$user)
            {
                return "Algum problema com o aluno ".$aluno['nome'].", tente mais tarde.";
            }
            $alunoTurma = [];

            
            $alunosOrdemTurma[] = $aluno['aluno'];
            }


        }

        $msg="Os alunos foram atribuidas as suas turmas com sucesso!";
        return Redirect::route('matriculas')->with("Sucesso",$msg);
    }

    public static function pegarTurmasCurso($curso) //Pegar turmas 10ª Classe
    {
        $turmas = AnoTurmaCood::with('turma','ano_lectivo')
        ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
        ->whereHas('turma', function ($query)  use ($curso) {
            $query->where('classe_id', ClasseController::pegarIdClasse('10ª'));
            $query->where('curso_id', CursoController::pegarIdCurso($curso));
        })
        ->get();

        $Turmas = [];

        foreach ($turmas as $turmaA)
        {
            if($turmaA->num_vagas > 0)
            {
                $Turmas[] =
                [
                    'turma' => $turmaA->turma->nome_turma,
                    'TurmaAno_id' => $turmaA->turmaAno_id,
                    'num_vaga' => $turmaA->num_vagas
                ];
            }
        }
        return $Turmas;
    }

    public static function quantidadeTurma($turma) //Pegar turmas 10ª Classe deste ano lectivo
    {
        $turmas = AlunoTurma::all()
        ->where('turmaAno_id', $turma);
        return count($turmas);
    }

    public static function atualizarVaga($turmaAno)
    {
        $turma = AnoTurmaCood::find($turmaAno['id']);
        $turma->num_vagas = $turmaAno['vaga'];
        $turma->save();

        return $turma;
    }
}
