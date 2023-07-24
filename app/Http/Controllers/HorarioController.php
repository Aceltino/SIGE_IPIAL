<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Turma;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function create()
    {
        return view('horario/criar-horario');
    }

    // public function pegarDadosHorario()
    // {
    //     Turma
    // }
}
