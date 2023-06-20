<?php
namespace App\Http\Controllers;

use App\Models\{
    User,
};
use App\Http\Controllers\{
    Controller
};

class UserController extends Controller
{

    //Metodo que retorna a views do cadastro de usuario
    public function usuarioFormCadastro(){
        return view('usuario/use_cadastro');
    }


    public static function index()
    {
        return User::all();
    }
    

    public static function store($dados)
    {
        return User::create($dados);
    }

    public static function show($id)
    {
        // User::with('pessoa')->findOrFail($id);
        $user = User::findOrFail($id)->findOrFail();
        return $user;
    }

    public static function updateUser($dadosUser)
    {
        $user = User::find($dadosUser['usuario_id']);
        foreach ($dadosUser as $campo => $valor)
        {
            $user->$campo = $valor;
        }
        $userAtualizado = $user->save();
        return $userAtualizado;
    }

}
