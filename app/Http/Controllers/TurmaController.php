<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function createTurma()
    {
        $vagas = AlunoTurmaController::pegarVagasTurno();
        dd($vagas);
        return view('turma.cri-turma', compact('vagas'));
    }
}
