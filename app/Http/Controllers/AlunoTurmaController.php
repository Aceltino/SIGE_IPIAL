<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\AnoTurmaCood;
use Illuminate\Http\Request;

class AlunoTurmaController extends Controller
{
    public static function SelecionarTurma() //10ª Classe
    {
       $alunos = AlunoController::alunosSemturma();
       $vagas = AdmissaoController::Vagas();


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

        usort($turmas, function ($a, $b) {
            $identificadorA = substr($a['turma'], -1);
            $identificadorB = substr($b['turma'], -1);
            $turnos = ['M' => 3, 'T' => 2, 'N' => 1];

            if ($identificadorA != $identificadorB) {
                return $turnos[$identificadorB] - $turnos[$identificadorA];
            }

            return strcmp($identificadorA, $identificadorB);
        });

        // Exibir turmas em ordem crescente com prioridade de turno
        foreach ($turmas as $turma) {
            if($turma['num_vaga'] > 0)
            {

            $aluno = Aluno::find($alunos[$i]['aluno_id']);
            $aluno->Anoturma()->attach($turma['TurmaAno_id'],[
                'numero_aluno' => 1
            ]);

                $vagasTurma = [
                $turma['turma'],
                $turma['num_vaga'] - 1
                ];
            }
            dd($vagasTurma);
        }


        }

        //
        dd($alunos, $vagas);
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
            $Turmas[] =
            [
                'turma' => $turmaA->turma->nome_turma,
                'TurmaAno_id' => $turmaA->turmaAno_id,
                'num_vaga' => $turmaA->num_vagas
            ];
        }
        return $Turmas;
    }

    public static function atualizarVaga($turmaAno)
    {
        $turma = AnoTurmaCood::find($turmaAno['id']);
        $turma->num_vagas = $turmaAno['vaga'];
        $turma->save();

        return $turma;
    }
}
