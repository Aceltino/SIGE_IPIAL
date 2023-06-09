<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Http\Requests\MatriculaStoreRequest;
use Illuminate\Http\Request;
use App\Models\{
    Candidato, 
    Notificacao
};

class MatriculaController extends Controller
{
    public function create($candidato_id){
        $idcandidato = Candidato::find($candidato_id);
        return view('matricula.matricular-aluno', compact('idcandidato'));
    }

    public function store(Request $request){

    //    $var = "x";
    //    dd($var);
    }
}
