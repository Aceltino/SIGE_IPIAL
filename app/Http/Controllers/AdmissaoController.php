<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Turma;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class AdmissaoController extends Controller
{
    public static function numeroVagas() // Numero vagas e Curso
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

    public static function Vagas() // Vagas e Turma
    {
        $quantCursos = CursoController::quantidadeCurso();
        $cursoNome = CursoController::pegarNomeCurso();
        $classe = ClasseController::pegarIdClasse("10ª");
        $vagaTurma = [];

        for ($i = 0; $i < $quantCursos; $i++) {
            $curso[$i] = CursoController::pegarIdCurso($cursoNome[$i]);
            $turmas = Turma::where('classe_id', $classe)
                ->where('curso_id', $curso[$i])
                ->get();

            for ($j = 0; $j < $turmas->count(); $j++) { // Corrigido o operador de incremento $j++
                $vagaCurso[] = [
                    'Curso' => $cursoNome[$i],
                    'Turma' => $turmas[$j]->nome_turma
                ];
            }
        }

        dd($vagaCurso);
        return $vagaCurso;
    }

    // INICIO ADMISSÃO DA 10ª CLASSE
    public static function validarCandidato()
    {
        $dataAtual = Carbon::now();
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
                return "As vagas esgotaram, aguarde o inicio das matriculas.";
            }

            $candidatos = CandidatoController::pegarCandidatos();

            if(!$candidatos)
            {
                return "Ainda há ".$numeroVagasTotal." vagas cadastre novo(s) candidatos";
            }
            foreach ($candidatos as &$candidato)
            {
                $dataNascimento = Carbon::parse($candidato['Data_Nascimento']);
                $idade = $dataAtual->diffInYears($dataNascimento);
                $candidato['idade'] = $idade;
            }

            foreach ($candidatos as &$candidato)
            {
                $media = ($candidato['Matematica']
                + $candidato['Lingua_Portuguesa']
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

            foreach ($candAdmitidos as &$candidato) {
                $cursoPreferencia = CandidatoCursoController::cursoEscolhido($candidato['id']);
                $candidato['cursoEscolhido'] = $cursoPreferencia;
            }

            $admitidos = [];

            foreach ($candAdmitidos as &$candidato)
            {

                if (in_array($candidato['id'], $admitidos))
                {
                    continue;
                }

                usort($candidato['cursoEscolhido'], function ($a, $b)
                {
                    return $a['prefCurso'] - $b['prefCurso'];
                });

                $cursoEscolhido = null;

                foreach ($candidato['cursoEscolhido'] as $preferencia)
                {
                    $nomeCurso = $preferencia['nomeCurso'];

                    foreach ($numVagasCurso as $index => $curso)
                    {
                        if ($curso['Curso'] === $nomeCurso && $curso['Vagas da 10ª Classe'] > 0)
                        {
                            $cursoEscolhido = $nomeCurso;
                            $numVagasCurso[$index]['Vagas da 10ª Classe']--;
                            $admitidos[] = $candidato['id'];
                            break 2;
                        }
                    }

                    if ($cursoEscolhido !== null)
                    {
                        break;
                    }
                }
                $candidato['cursoEscolhido'] = $cursoEscolhido;
                CandidatoController::atualizarStatus($candidato);
            }
        return true;
    }

    public function admitirCandidatos()
    {
        $admitidos = AdmissaoController::validarCandidato();

        if($admitidos !== true)
        {
            return redirect()->back()->with("ErroCandidato", $admitidos);
        }
            $msg = "Novo(s) alunos admitidos!";
            return Redirect::route('inscricao-index')->with("Sucesso", $msg);
    }

    // FIM ADMISSÃO DA 10ª CLASSE



}
