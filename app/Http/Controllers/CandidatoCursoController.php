<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoCursoController extends Controller
{
    private static int $inserido = 0;
    private static int $preferencia = 1;


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
                'preferencia' =>self::$preferencia++
            ]);

            $cursosSelecionados[] = $cursoId;
            self::$inserido++;
        }

        return self::$inserido == count($candCurso['curso_id']);
    }

    public static function validarCurso($curso)
    {
        $cursosSelecionados = [];

        foreach ($curso as $cursoNome)
        {
            if (in_array($cursoNome, $cursosSelecionados))
            {
                return false;
            }

            $cursosSelecionados[] = $cursoNome;
        }

        return true;

    }

    public static function cursoEscolhidoPreferencia($candidato)
{
    $candidato = Candidato::find($candidato);
    $candidato->load('curso');

    foreach ($candidato->curso as $escolhido) {
        if ($escolhido->pivot->preferencia === 1) 
        {
            $cursoPreferencia = [
                'idCurso' => $escolhido->curso_id,
                'siglaCurso' => $escolhido->sigla,
            ];
        }
    }
    return $cursoPreferencia;
}

    public static function cursoEscolhido($candidato)
    {
        $candidato = Candidato::find($candidato);
        $candidato->load('curso');

        $cursoPreferencia = [];
        foreach($candidato->curso as $escolhido) {
            $cursoPreferencia[] = [
                'nomeCurso' => $escolhido->nome_curso,
                'prefCurso' => $escolhido->pivot->preferencia
            ];
        }
        return $cursoPreferencia;
    }

    public static function updateCandCurso($candCurso)
    {
        foreach ($candCurso['curso_id'] as $i => $cursoId)
        {
            $candidato = Candidato::find($candCurso['candidato_id']);
            $candidato->curso()->detach($cursoId);
        }

        $cursosSelecionados = [];
        foreach ($candCurso['curso_id'] as $i => $cursoId)
        {
            if (in_array($cursoId, $cursosSelecionados))
            {
                return false;
            }

            $candidato = Candidato::find($candCurso['candidato_id']);
            $candidato->curso()->attach($cursoId, [
                'preferencia' =>self::$preferencia++
            ]);

            $cursosSelecionados[] = $cursoId;
            self::$inserido++;
        }

        return self::$inserido == count($candCurso['curso_id']);
    }


}
