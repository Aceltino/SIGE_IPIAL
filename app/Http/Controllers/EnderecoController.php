<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public static function store(Request $request){
       
        $dados=[
            'municipio'=>$request->municipio,
            'bairro'=>$request->bairro,
            'zona'=>$request->zona,
            'num_casa'=>$request->num_casa,
        ];
            
        if(!Endereco::create($dados)){
            return false;
        }
        return true;
    }

}
