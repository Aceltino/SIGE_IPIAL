<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public static function store($dadosAluno)
    {
        $alunoCriado = Aluno::create($dadosAluno);
        return $alunoCriado->aluno_id;
    }

    public static function updateStatusTrue($idAluno) // Atualizr status para admitido
    {
        $alunoCriado = Aluno::find($idAluno);
        $alunoCriado->status =1;
        $alunoCriado->save();
        return $alunoCriado;
    }

    public static function alunosSemturma() // 10ª Classe
    {
        $alunos = Aluno::with('candidato', 'curso', 'encarregado')
        ->whereHas('candidato', function ($query) {
            $query->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo());
        })
        ->where('status', 0 )
        ->get();

        $Alunos = [];

        foreach ($alunos as $aluno)
        {
            $Alunos[] =
            [
                'aluno_id' => $aluno->aluno_id,
                'curso' => $aluno->candidato->cursoAdmitido,
                'data_nasc' => $aluno->candidato->pessoa->data_nascimento,
                'nome' => $aluno->candidato->pessoa->nome_completo,
                'idCurso' => CursoController::pegarIdCurso($aluno->candidato->cursoAdmitido),
            ];
        }
        return $Alunos;
    }
}
