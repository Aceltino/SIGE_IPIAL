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
        $turno = Turno::where('turno_id', $id)->first();
        return $turno;
    }

    public static function turnos()
    {
        $turno = Turno::all();
        return $turno;
    }

}
