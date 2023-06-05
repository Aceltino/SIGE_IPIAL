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
        $cursosSelecionados = [];

        foreach ($candCurso['curso_id'] as $i => $cursoId)
        {

            if (in_array($cursoId, $cursosSelecionados))
            {
                return false;
            }

            $candidato = Candidato::find($candCurso['candidato_id']);
            $candidato->curso()->attach($cursoId, [
                'preferencia' => $i + 1
            ]);

            $cursosSelecionados[] = $cursoId;
            self::$inserido++;
        }

        return self::$inserido == count($candCurso['curso_id']);
    }

    public static function validarCurso($curso)
    {
        $cursosSelecionados = [];

        foreach ($curso as $i => $cursoNome)
        {
            if (in_array($cursoNome, $cursosSelecionados))
            {
                return false;
            }

            $cursosSelecionados[] = $cursoNome;
        }

        return true;

    }


}
