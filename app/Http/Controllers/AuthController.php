<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\{
    //Classes das Models
    User
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function store(Request $request){

        $regras_gerais=[

            //Formulario da Pessoa
            'nome'=>'required|string|min:2|max:50',
            'sobre_nome'=>'required|string|min:5|max:50',
            'data_nascimento'=>'required|date|after:'.now()->format('d-m-Y'),
            'num_bi'=>'required|main:14|max:14',

            //Formulario do user
            'username'=>'required|string|min:5|max:30',
            'email'=>'required|email|max:200',
            'password'=>'required|min:5|max:32|confirmed',

            //Formulario do endereço
            'municipio'=>'required|string|min:2',
            'bairro'=>'required|string',
            'zona'=>'required|string',
            'num_casa'=>'required|number',
        ];

        //Mensagens emitidas com base ao erro 
        $msg_erro=[
            
            '*.required'=>'Este campo deve ser preenchido',
            '*.string'=>'Este campo deve conter apenas Letras',

            //Formulario da Pessoa
            'nome.max'=>'Este campo não pode conter mais de 50 letras.',
            'nome.min'=>'Este campo não pode conter menos de 2 letras.',
            'sobre_nome.max'=>'Este campo não pode conter mais de 50 letras.',
            'sobre_nome.min'=>'Este campo não pode conter menos de 2 letras.',
            'data.date' => 'O campo :attribute deve ser uma data válida.',
            'data.after'=> 'O campo :attribute deve ser uma data posterior à data atual.',
            'num_bi.max'=> 'Número de identificação esta incorrecto',
            'num_bi.min'=> 'Número de identificação esta incorrecto',

            //Formulario do user
            'username.max'=>'Este campo não pode conter mais de 30 letras.',
            'username.min'=>'Este campo não pode conter menos de 5 letras.',
            'email.email'=>'Este campo deve conter um email valido',
            'email.max'=>'Lamentamos! Digita um email com menos caracter(letra)',
            'password.min'=>'A password deve conter no minimo 6 letras',
            'password.max'=>'A password deve conter no maximo 32 letras',
            'passwd.confirmed'=>'As suas senhas devem ser iguais',

            //Formulario do endereço
            'municipio.min'=>'O seu municipio não pode conter menos de 2 Letras',
            'num_casa.number'=>'Número de casa deve conter apenas digitos validos.',
        ];

        $dados=[

            //Formulario da Pessoa
            'nome'=>$request->nome,
            'sobre_nome'=>$request->sobre_nome,
            'data_nascimento'=>$request->data,
            'num_bi'=>$request->num_bi,

            //Formulario do user
            'username'=>$request->ajax(),
            'email'=>$request->email,
            'password'=>$request->password,

            //Formulario do endereço
            'municipio'=>$request->municipio,
            'bairro'=>$request->bairro,
            'zona'=>$request->zona,
            'num_casa'=>$request->num_casa,
        ];

        $validator= Validator::make($request->all() /*$regras,*/ /*$mensagens*/);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credencias=[
            "name"=>$request->name,
            "email"=>$request->email,
            'cargo'=>"Administrador",
            "password"=>bcrypt($request->password),
        ];

        $user= User::create($credencias);

        if(!$user){
            $msg="Lamentamos! Usuario não Cadastrado, tente este processo mais tarde...";
            return redirect()->back()->with("errorCadastroNewUsuario",$msg);
        }
        
        return view("auth.login");
    }
}