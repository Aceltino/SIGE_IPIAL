<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{CalendarioProva, Curso, Classe, Turno, Trimestre};

class CalendarioController extends Controller
{
    public function index()
    {
        $Calendario = CalendarioProva::all();
        return view('calend-prova.calendario-prova',['Calendario' => $Calendario]);
    }
    public function create()
    {
        return view('calend-prova.cri-calend-prov');
    }
    
}
