<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Inscricao;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public static function index() //http://127.0.0.1:8000/api/settings 
    {
        $dados = [
          'Vagas'  => AlunoTurmaController::pegarVagas(),    //Ano lectivo activo --- Portal
          //Página Inicial
          'Admitidos'  =>CandidatoController::Admitidos(),   //Ano lectivo activo
          'NAdmitidos'  =>CandidatoController::NAdmitidos(), //Ano lectivo activo
          'Inscritos'  =>CandidatoController::Inscritos(),   //Ano lectivo activo
          'Matriculados'  =>AlunoController::matriculados(), //Retorna apenas os matriculados do ano lectivo activo
          'TurmasActivas'  =>AlunoTurmaController::turmas(), //Retorna apenas as turmas deste ano lectivo
          'VagasCurso'  =>AlunoTurmaController::vagas(),     //Retorna as turmas deste ano lectivo Página Inicial
          'TotalTurmasCurso'  =>AlunoTurmaController::turmasCursoTurno(),     //Retorna Total de turmas com base o turno e curso deste ano lectivo Página Inicial

          'SituacaoAlunos'  =>AlunoController::situacaoAluno(), //Retorna apenas a situação de alunos do ano lectivo activo

        // FIM Página Inicial -- Aceltino
            'AnoLetivoConfiguracoes' => AnoLectivoController::AnoLectivoConfig(),
        ];

        return $dados;
    }
}
