<?php

namespace App\Traits;
use App\Models\Cursos;

trait CursoTrait
{
    public static function pegarIdCurso($nomeCurso)
    {
        $idCurso = Cursos::where('nome_curso', $nomeCurso)->pluck('curso_id')->first();

        return $idCurso;
    }
}
