<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidato;
use App\Models\Curso;

class ProcessoController extends Controller
{
    public function index()
    {
        $candidatos = Candidato::where('status', 'Admitidos')->get();
        $cursos = curso::all();
        return view('processo.processos',compact('candidatos','cursos'));
    }
}
