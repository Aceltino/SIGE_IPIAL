<?php

namespace App\Http\Controllers;

use App\Models\{
    Turma, 
    Turno, 
    Curso,
};
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function createTurma()
    {
        $vagas = AlunoTurmaController::pegarVagasTurno();

        $cursos = Curso::all();
        $turnos = Turno::all();
     //   dd($vagas);
        return view('turma.cri-turma', compact('vagas','cursos','turnos'));
    }
}
