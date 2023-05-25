<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{
    //Classes das Models
    User
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm(){
        $user= User::all();
        if(count($user)==0){
            return $this->registrarForm();
        }
        return view('autenticacao.login');
    }

    public function registrarForm(){
       return view('autenticacao.registrar');
    }

    public function loginCheck(Request $request){
        
        
        $credencias=[
            'nome_usuario'=>$request->username,
            'password'=>$request->password
        ]; 

        if(empty($credencias['nome_usuario']) || empty($credencias['password'])){
           return redirect()->back()->with('erro_login_001',"Por favor, Insira os dados de Acesso");
        }
        if(Auth::attempt($credencias)){
            $user= Auth::user();
            dd($user);
        } 
        return redirect()->back()->with('erro_login_002',"Dados Incorrecto"); 
     
    }

    public function cargo($id){
        //Pendente
    }
}