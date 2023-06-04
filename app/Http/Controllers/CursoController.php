<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cursos;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public static function pegarIdCurso($nomeCurso):int
    {
        $idCurso = Cursos::where('nome_curso', $nomeCurso)->pluck('curso_id')->first();
        return $idCurso;
    }

    public static function pegarNomeCurso()
    {
        $cursos = Cursos::all(['curso_id', 'nome_curso']);
        $nomesCursos = $cursos->pluck('nome_curso')->toArray();
        return $nomesCursos;
    }

    public static function quantidadeCurso()
    {
        $cursos = count(Cursos::all());
        return $cursos;
    }


}
