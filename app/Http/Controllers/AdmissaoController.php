<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Turma;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class AdmissaoController extends Controller
{
    public static function numeroVagas()
    {
        $quantCursos = CursoController::quantidadeCurso();
        $cursoNome = CursoController::pegarNomeCurso();
        $classe = ClasseController::pegarIdClasse("10ª");
        $num_aluno = AnoLectivoController::pegarNumVagas();

        for ($i = 0; $i < $quantCursos ; $i++)
        {
            $curso[$i] = CursoController::pegarIdCurso($cursoNome[$i]);

            $turmas = Turma::where('classe_id', $classe)
            ->where('curso_id', $curso[$i])
            ->get();

            $vagaCurso[$i]=[
            'Curso' => $cursoNome[$i],
            // 'Classe' => $classe,
            'Vagas da 10ª Classe' => $turmas->count() * $num_aluno,
            // 'Nomes das Turmas' => $turmas->pluck('nome_turma')->toArray(),
            ];
        }

        return $vagaCurso;
    }

    public static function validarCandidato()
    {

        $numVagas = AdmissaoController::numeroVagas();
        dd($numVagas);
        $quantCand = count(CandidatoController::pegarCandidatos());
        $candidato = CandidatoController::pegarCandidatos();

        $dataNascimento = Carbon::parse($candidato[0]['Data de Nascimento']);
        $dataAtual = Carbon::now();
        $idade = $dataAtual->diffInYears($dataNascimento);

        dd($candidato);
        // Aceltino





    }
}
