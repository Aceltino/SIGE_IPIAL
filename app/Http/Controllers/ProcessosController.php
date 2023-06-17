<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidato;

class ProcessosController extends Controller
{
    public function index()
    {
        $candidatos = Candidato::where('status', 'Admitidos')->get();
        return view('processo.processos')->with('candidato',$candidatos);
    }
}
