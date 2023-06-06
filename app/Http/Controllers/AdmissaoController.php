<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Turma;
use Carbon\Carbon;

class AdmissaoController extends Controller
{
    public static function numeroVagas()
    {
        $quantCursos = CursoController::quantidadeCurso();
        $cursoNome = CursoController::pegarNomeCurso();
        $classe = ClasseController::pegarIdClasse("10ª");
        $num_aluno = AnoLectivoController::pegarNumVagas();
        $vagaCurso = [];

        for ($i = 0; $i < $quantCursos; $i++)
        {
            $curso[$i] = CursoController::pegarIdCurso($cursoNome[$i]);

            $turmas = Turma::where('classe_id', $classe)
                ->where('curso_id', $curso[$i])
                ->get();

            $vagaCurso[$i] = [
                'Curso' => $cursoNome[$i],
                'Vagas da 10ª Classe' => $turmas->count() * $num_aluno,
            ];
        }

        return $vagaCurso;
    }

    public static function validarCandidato()
    {
        $dataAtual = Carbon::now();
        $data = AnoLectivoController::pegarDataFimInscricao();

        $dataMaisUmDia = Carbon::parse($data)->addDay()->format('Y-m-d');

        if ($dataMaisUmDia == $dataAtual)
        {
            $numVagasCurso = AdmissaoController::numeroVagas();
            $vagasTotal = 0;
            $admitidos = CandidatoController::pegarAdmitidos();

            foreach ($numVagasCurso as $vagasCurso)
            {
                $vagasTotal += $vagasCurso['Vagas da 10ª Classe'];
            }
            $numeroVagasTotal = $vagasTotal - $admitidos;

            if($numeroVagasTotal === 0)
            {
                return false;
            }

            $candidatos = CandidatoController::pegarCandidatos();

            foreach ($candidatos as &$candidato)
            {
                $dataNascimento = Carbon::parse($candidato['Data de Nascimento']);
                $idade = $dataAtual->diffInYears($dataNascimento);
                $candidato['idade'] = $idade;
            }

            foreach ($candidatos as &$candidato)
            {
                $media = ($candidato['Matematica']
                + $candidato['Lingua Portuguesa']
                + $candidato['Fisica']
                + $candidato['Quimica']) / 4;
                $medias[] = $candidato['media'] = $media;
            }

            $mediaOrdenada = $medias;
            arsort($mediaOrdenada);
            $maioresMedias = array_slice($mediaOrdenada, 0, $numeroVagasTotal);


            $candAdmitidos = [];
            $count = 0;

            for($i= 0; $i < count($candidatos); $i++)
            {
                if(in_array($candidatos[$i]['media'], $maioresMedias))
                {
                    $candAdmitidos[] = $candidatos[$i];
                    $count++;

                    if ($count >= count($maioresMedias))
                    {
                        break;
                    }
                }
            }

            usort($candAdmitidos, function ($a, $b)
            {
                $idadeA = $a['idade'];
                $idadeB = $b['idade'];

                if ($idadeA == $idadeB)
                {
                    return 0;
                }

                return ($idadeA < $idadeB) ? -1 : 1;
            });

            foreach ($candAdmitidos as $candidato)
            {
                CandidatoController::atualizarStatus($candidato['id']);
            }
            return $candAdmitidos;
        }
    }
}
