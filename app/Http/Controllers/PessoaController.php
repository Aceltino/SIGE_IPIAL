<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\{
    Controller
};
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public static function store(Request $request){
     
        $dados=[
            'nome_completo'=>$request->nome." ".$request->sobre_nome,
            'data_nascimento'=>$request->data_nascimento,
            'num_bi'=>$request->num_bi,
            'genero'=>$request->genero
        ];
        if(!Pessoa::create($dados)){
            return false;
        }       
        return true;
    }
}
