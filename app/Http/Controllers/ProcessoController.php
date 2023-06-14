<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidato;

class ProcessoController extends Controller
{
    public function index()
    {
        $candidatos = Candidato::where('status', 'Admitidos')->get();
        return view('processo.processos',[' candidatos'=> $candidatos]);
    }
}
