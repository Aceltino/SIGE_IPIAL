<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Http\Requests\MatriculaStoreRequest;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function create($id)
    {
        $candidato = CandidatoController::pegarDadosCandidato($id);
        return view('inscricao/edit-candidato',[
            'candidato' => $candidato[0]
        ]);
    }

    public function store(Request $request){

    //    $var = "x";
    //    dd($var);
    }
}
