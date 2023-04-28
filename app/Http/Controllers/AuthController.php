<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function formLogin(){
        return view('autenticacao.login');
    }
    public function recuperarPassword(){
        return view('autenticacao.recuperar-senha');
    }

    public function checkLogin(Request $request){

        $credencias=[
            'username'=>$request->username,
            'password'=>$request->password,
        ];
        
        if (Auth::attempt($credencias)) {
            
            $user= Auth::user();
            $dadosUser=[
                'username'=>$user->username,
                'cargo'=>$user->cargo,
                'imagem'=>$user->imagem,
                'status'=>$user->status,
            ];
            if ($dadosUser['status']==0) {
                return redirect()->back()->with(
                    'erroCkeckLogin_Status',
                    'Usuario Bloqueado! direija-se a direcção do Instituto Alda Lara'
                );
            }
            session($dadosUser);
            return view('pagina-inicial');
        }
        return redirect()->back()->with('erroCheckLogin','Lamentamos, dados do usuario esta incorrecto!');
    }

    public function logout(request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }

}
