<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\{
    User
};
use App\Http\Controllers\{
    Controller
};

class UserController extends Controller
{

    public static function index(){
        return User::all();
    }
    public static function store(Request $request){

        $num_registo=count(User::all());

        //Criando o nome do Usuario
        $posicao = 0; // posição do caractere desejado(Onde começa a contagem do caracter)
        $abreNome = substr($request->nome, $posicao,2);
        $abreSobreNome = substr($request->sobre_nome, $posicao,2);

        $username= $abreNome.$num_registo.$abreSobreNome;
              
        $dados=[
            'nome_usuario'=>$username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'num_telefone'=>$request->num_telefone,
        ];
        if(!User::create($dados)){
            return false;
        }
        return true;
    }

    public static function show($id){

        $user= User::findOrFail($id)->findOrFail();
        return $user;
        // User::with('pessoa')->findOrFail($id);
    }

}
