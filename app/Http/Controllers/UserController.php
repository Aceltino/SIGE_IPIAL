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

    //Metodo que retorna os dados do Usuario
    public static function index()
    {
        $users= User::all();
        return view('usuario/usuarios',compact('users'));
    }

    //Metodo que cadastra usuario no banco de dados 
    public static function store($dados)
    {
        return User::create($dados);
    }

    //Metodo que busca dados de um usuario especifico
    public static function show($id)
    {
        $user = User::findOrFail($id)->findOrFail();
        return view('testando...'); 
    }

    //Metodo para fazer Update nos dados do usuario
    public static function updateUser($dadosUser)
    {
        $user = User::find($dadosUser['usuario_id']);
        foreach ($dadosUser as $campo => $valor)
        {
            $user->$campo = $valor;
        }
        return $user->save();
    }

    //Metodo para mudar o estado do usuario.
    public static function userStateChange($id)
    {
        $user= User::findOrFail($id);

        if($user->status_usuario===0){
            $user->status_usuario=1;
            if(!$user->save()){
                return redirect()->back()->with('erro_status_001','Lamentamos! Não foi possivel Desbloquer Usuario');
            }
            return redirect()->back()->with('success_status_001','Usuario Desbloqueado');

        }else{
            $user->status_usuario=0;
            if(!$user->save()){
                return redirect()->back()->with('erro_status_002','Lamentamos! Não foi possivel Bloqueado Usuario');
            }
            return redirect()->back()->with('sucess_status_002','Usuario Bloqueado');
        } 
    }

}
