<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoCursoController extends Controller
{
    private static int $inserido = 0;
    public static function store($candCurso)
    {

        $cursoCount = count($candCurso['curso_id']);

        for($i = 1; $i <= $cursoCount; $i++)
        {
            $candidato = Candidato::find($candCurso['candidato_id']);
            $candidato->curso()->attach($candCurso['curso_id'][$i],
            [
            'preferencia' => $i
            ]);
            self::$inserido++;
        }

        return self::$inserido == $cursoCount;

    }
}
