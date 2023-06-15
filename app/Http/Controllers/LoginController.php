<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   
    public function auth(Request $request)
    {
        $crendencias = $request->validate([
            'email' => ['required', 'email'],
            'Password' =>['required'],
            'status_usuario',
            'cargo_usuario',
        ],
        
        [
            'email.required' => 'O campo email e obrigatorio',
            'email.email' => 'O email não e valido',
            'Password.required' => 'O campo password e obrigatorio',
        ]
    );

        if(Auth::attempt($crendencias)) {
            $request->session()->regenerate();
                return redirect('inicio');
                }
                else{
                    return redirect()->back()->with('erro','Emailou senha invalido'); 
                }

    }

}
