<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use Illuminate\Http\Request;

class TurnoController extends Controller
{
    public static function pegarIdTurno($nome_turno):int
    {
        $idCurso = Turno::where('nome_turno', $nome_turno)->pluck('turno_id')->first();
        return $idCurso;
    }
    public static function pegarTurno($id)
    {
        $turno = Turno::find($id)->first();
        return $turno;
    }

}
