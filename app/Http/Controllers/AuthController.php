<?php

namespace App\Http\Controllers;

use App\Traits\PessoaTrait;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
    Auth,
    Validator,
    Password
};
use Laravel\Fortify\Fortify;

class AuthController extends Controller
{
    use PessoaTrait;
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
    // public function resetForm(){
    //     return view('autenticacao.recuperar-senha');
    // } 
    // public function resetPasswordForm($token){
    //     return view('autenticacao.nova_senha', ['token' => $token]);
    // }
    public function loginCheck(Request $request){
       
        $credencias= [
            'nome_usuario'=>$request->username,
            'password'=>$request->password,
        ];

        if (empty($credencias['nome_usuario']) || empty($credencias['password'])) {
            return redirect()->back()->with('erro_login_001', 'Por favor, insira os dados de acesso');
        }
        if (!Auth::attempt($credencias,$request->lembrar)) {
            return redirect()->back()->with('erro_login_002', 'Dados incorretos');
        }
        $user = Auth::user();
        if(!$user->status_usuario){

            Auth::logout();
            return redirect()->back()->with('erro_login_003', 'Usuario Bloqueado, Entre em contacto com a instituição');
        }

        Session::start();
        $request->session()->regenerate();
        session(['user'=>$user]);

        return redirect()->intended('/');
    }
    public function store(Request $request){

        //Criando o nome do Usuario
        $posicao = 0; // posição do caractere desejado(Onde começa a contagem do caracter)
        $abreNome = substr($request->nome, $posicao,2);
        $abreSobreNome = substr($request->sobre_nome, $posicao,2);

        $regras_gerais=[

            //Formulario da Pessoa
            'nome'=>'required|string|min:2|max:50',
            'sobre_nome'=>'required|string|min:5|max:50',
            'data_nascimento'=>'required|date|before:'.now()->format('d-m-Y'),
            'num_bi'=>'required|size:14|unique:pessoas,num_bi',

            //Formulario do user
            'email'=>'required|email|max:200|unique:users,email',
            'password'=>'required|min:5|max:32',
            'num_telefone'=>'required|size:9',

            //Formulario do endereço
            'municipio'=>'required|string|min:2',
            'bairro'=>'required|string',
            'zona'=>'required|string',
            'num_casa'=>'required|numeric',
        ];
        $msg_erro=[

            '*.required'=>'Este campo deve ser preenchido',
            '*.string'=>'Este campo deve conter apenas Letras',

            //Formulario da Pessoa
            'nome.max'=>'Este campo não pode conter mais de 50 letras.',
            'nome.min'=>'Este campo não pode conter menos de 2 letras.',
            'sobre_nome.max'=>'Este campo não pode conter mais de 50 letras.',
            'sobre_nome.min'=>'Este campo não pode conter menos de 2 letras.',
            'data.date' => 'O campo :attribute deve ser uma data válida.',
            'data_nascimento.before'=> 'O campo :attribute deve ser uma data posterior à data atual.',
            'num_bi.size'=> 'Número de identificação esta incorrecto',
            'num_bi.unique'=> 'Número de identificação Já esta a ser usado',

            //Formulario do user
            'email.email'=>'Este campo deve conter um email valido',
            'email.max'=>'Lamentamos! Digita um email com menos caracter(letra)',
            'email.unique'=>'Lamentamos, este email já esta em uso',
            'password.min'=>'A password deve conter no minimo 6 letras',
            'password.max'=>'A password deve conter no maximo 32 letras',
            //'password.confirmed'=>'A confirmação da senha não corresponde.',
            'num_telefone'=>'Digite um número de telefone valido',

            //Formulario do endereço
            'municipio.min'=>'O seu municipio não pode conter menos de 2 Letras',
            'num_casa.numeric'=>'Número de casa deve conter apenas digitos validos.',
        ];
        $dadosFiltrados=[

            //Dados da Pessoa
            'nome'=>$request->nome,
            'sobre_nome'=>$request->sobre_nome,
            'data_nascimento'=>$request->data_nascimento,
            'num_bi'=>$request->num_bi,

           //Dados do user
            'email'=>$request->email,
            'password'=>$request->password,
            'num_telefone'=>$request->num_telefone,

            //Dados do endereço
            'municipio'=>$request->municipio,
            'bairro'=>$request->bairro,
            'zona'=>$request->zona,
            'num_casa'=>$request->num_casa,

        ];

        $validator= Validator::make($dadosFiltrados,$regras_gerais,$msg_erro);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dadosPessoa=[
            'nome_completo'=>ucfirst($request->nome)." ".ucfirst($request->sobre_nome),
            'data_nascimento'=>$request->data_nascimento,
            'num_bi'=> strtoupper($request->num_bi),
            'genero'=>$request->genero,
            'telefone'=>$request->num_telefone
        ];
        $dadosEndereco=[
            'municipio'=>$request->municipio,
            'bairro'=>$request->bairro,
            'zona'=>$request->zona,
            'numero_casa'=>$request->num_casa,
        ];
        $pessoa_id= $this->storePessoa($dadosPessoa, $dadosEndereco);

        $dadosUser=[
            'nome_usuario'=>$abreNome.count(User::all()).$abreSobreNome,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'num_telefone'=>$request->num_telefone,
            'cargo_usuario'=>$request->cargo,
            'status_usuario'=>1,
            'pessoa_id'=>$pessoa_id,
        ];

        $user=UserController::store($dadosUser);
        if(!$user){
            $msg="Lamentamos! Dados não Cadastrado, tente este processo mais tarde...";
            return redirect()->back()->with("erroCadastroUser",$msg);
        }

        //Depois deve se fazer mudanças basicas nem todo cadastro deve lhe reencaminhar no Login.

        $msg=$request->cargo." Cadastrado com Sucesso. Por favor entre com os seus dados";
        return view('autenticacao.login')->with('registrado',$msg);
    }
    public function logout(){
        Auth::logout();
        Session::invalidate();
        return redirect()->route("login");      
    }

    // public function envioLinkEmail(Request $request){

    //     $request->validate(['email' => 'required|email']);

    //     $consutEmail= User::where('email',$request->email)->first();
    //     if(!$consutEmail) {
    //         $msg="Lamentamos! este email não esta atrelado a conta do usuario";
    //         return redirect()->back()->with('erro_email_001',$msg);
    //     }
    //     $status = Password::sendResetLink(
    //         $request->only('email')
    //     );
        
    //     return $status === Password::RESET_LINK_SENT
    //                 ? back()->with(['status' => __("Enviamos seu link de redefinição de senha por e-mail!")])
    //                 : back()->withErrors(['email' => __($status)]);

    // }

    // public function resetPassword(){

    //     $request->validate([
    //         'token' => 'required',
    //         'email' => 'required|email',
    //         'password' => 'required|min:8|confirmed',
    //     ]);
     
    //     $status = Password::reset(
    //         $request->only('email', 'password', 'password_confirmation', 'token'),
    //         function ($user, $password) {
    //             $user->forceFill([
    //                 'password' => Hash::make($password)
    //             ])->setRememberToken(Str::random(60));
     
    //             $user->save();
     
    //             event(new PasswordReset($user));
    //         }
    //     );
     
    //     return $status === Password::PASSWORD_RESET
    //                 ? redirect()->route('login')->with('status', __($status))
    //                 : back()->withErrors(['email' => [__($status)]]);

    // }


    //TESTE-1..............Passo-1.......................

    public function resetForm()
    {
        return view('autenticacao.recuperar-senha');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );  

        
        return $response == Password::RESET_LINK_SENT
            ? back()->with('status', "Enviamos seu link de redefinição de senha por e-mail!")
            : back()->withErrors(['email' => trans($response)]);

    }



    //TESTE-2.............Passo-2.....................
    
    public function resetPasswordForm(Request $request, $token = null)
    {
        return view('autenticacao.nova_senha')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    
    public function reset(Request $request)
    {
        $request->validate($this->rules(), $this->validationErrorMessages());

        $response = $this->broker()->reset(
            $this->credentials($request),
            function ($user, $password) {
                $this->resetPassword($user, $password);
            }
        );

        return $response == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', trans($response))
            : back()->withErrors(['email' => trans($response)]);
    }

    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ];
    }

    protected function validationErrorMessages()
    {
        return [];
    }

    protected function credentials(Request $request)
    {
        return $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );
    }

    protected function resetPassword($user, $password)
    {
        $user->password = bcrypt($password);
        $user->save();
    }

    public function broker()
    {
        return Password::broker();
    }
}   