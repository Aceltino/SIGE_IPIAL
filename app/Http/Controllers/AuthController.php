<?php

namespace App\Http\Controllers;

use App\Traits\PessoaTrait;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
    Auth,Validator,Mail,DB,Hash,Session
};
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\Return_;

class AuthController extends Controller
{
    use PessoaTrait;

    //Metodo que retorna o formulario de login
    public function loginForm(){
        $user= User::all();

        if(count($user)==0){
            return $this->registrarForm();
        }
        return view('autenticacao.login');
    }

    //Metodo que retorna o formulario de cadastro(registro)
    public function registrarForm(){
       return view('autenticacao.registrar');
    }

    //Metodo de Check de Login
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
        return redirect()->intended('/');
    }

    //Metodo de Armazenamento dos usuario,pessoa e endereço
    public function storeInicio(Request $request):mixed
    {

        //Criando o nome do Usuario
        $posicao = 0; // posição do caractere desejado(Onde começa a contagem do caracter)
        $abreNome = substr($request->nome, $posicao,2);
        $abreSobreNome = substr($request->sobre_nome, $posicao,2);

        $regras_gerais=[

            //Formulario da Pessoa
            'nome'=>'required|string|min:2|max:50',
            'sobre_nome'=>'required|string|min:2|max:50',
            'data_nascimento'=>'required|date|before:'.now()->format('d-m-Y'),
            'num_bi'=>'required|size:14|unique:pessoas,num_bi',
            'num_telefone'=>'required|size:9',

            //Formulario do user
            'email'=>'required|email|max:200|unique:users,email',
            'password'=>'required|min:6',

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
        $pessoa_id= $this->storePessoa($dadosPessoa, $dadosEndereco);//retorna id da pessoa

        $dadosUser=[
            'nome_usuario'=>$abreNome.count(User::all()).$abreSobreNome,
            'email'=>$request->email,
            'password'=>bcrypt($request->num_telefone),
            'cargo_usuario'=> $request->cargo,
            'num_telefone' =>$request->num_telefone,
            'status_usuario'=>1,
            'pessoa_id'=> $pessoa_id
        ];

        $user=UserController::store($dadosUser);
        if(!$user){
            $msg = "Lamentamos! Dados não Cadastrado, tente este processo mais tarde...";
            return redirect()->back()->with("erroCadastroUser",$msg);
        }

        $msg="Adminstrador do sSistema Cadastrado com Sucesso. Por favor entre com os seus dados";
        return view('autenticacao.login')->with('registrado',$msg);
    }

    public function store(Request $request):mixed
    {

        //Gerar Password
        $hexAleatorio = Str::random(8);
        dd($hexAleatorio);
        //Criando o nome do Usuario
        $posicao = 0; // posição do caractere desejado(Onde começa a contagem do caracter)
        $abreNome = substr($request->nome, $posicao,2);
        $abreSobreNome = substr($request->sobre_nome, $posicao,2);

        $regras_gerais=[

            //Formulario da Pessoa
            'nome_completo'=>'required|string|min:3',
            'data_nascimento'=>'required|date|before:'.now()->format('d-m-Y'),
            'num_bi'=>'required|size:14|unique:pessoas,num_bi',
            'num_telefone'=>'required|size:9|unique:pessoas,telefone',

            //Formulario do user
            'email'=>'required|email|max:250|unique:users,email',
            
            //Formulario do endereço
            'municipio'=>'required|string|min:2',
            'bairro'=>'required|string',
            'zona'=>'required|string',
            'num_casa'=>'required|numeric',
        ];
       
        $dadosFiltrados=[

            //Dados da Pessoa
            'nome_completo'=>$request->nome_completo,
            'data_nascimento'=>$request->data_nascimento,
            'num_bi'=>$request->num_bi,
            'num_telefone'=>$request->num_telefone,

           //Dados do user
            'email'=>$request->email,

            //Dados do endereço
            'municipio'=>$request->municipio,
            'bairro'=>$request->bairro,
            'zona'=>$request->zona,
            'num_casa'=>$request->num_casa,

        ];

        $validator= Validator::make($dadosFiltrados,$regras_gerais);
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
        $pessoa_id= $this->storePessoa($dadosPessoa, $dadosEndereco);//retorna id da pessoa

        $dadosUser=[
            'nome_usuario'=>$abreNome.count(User::all()).$abreSobreNome,
            'email'=>$request->email,
            'password'=>bcrypt($hexAleatorio),
            'cargo_usuario'=> $request->cargo,
            'num_telefone' =>$request->num_telefone,
            'status_usuario'=>1,
            'pessoa_id'=> $pessoa_id
        ];

        $user=UserController::store($dadosUser);
        if(!$user){
            $msg = "Lamentamos! Dados não Cadastrado, tente este processo mais tarde...";
            return redirect()->back()->with("erroCadastroUser",$msg);
        }

        $msg="Adminstrador do sSistema Cadastrado com Sucesso. Por favor entre com os seus dados";
        return view('autenticacao.login')->with('registrado',$msg);
    }


    //Metodo que termina o inicio de sessão
    public function logout(){
        Auth::logout();
        Session::invalidate();
        return redirect()->route("login");
    }

    //Metodo que retorna o formulario de recuperação de senha
    public function resetForm(){
        return view('autenticacao.recuperar-senha');
    }


    //Metodo que retorna o formulario de reposição de uma nova senha
    public function resetPasswordForm($token)
    {
        return view('autenticacao.nova_senha', ['token' => $token]);
    }

    //Metodo que envia o link de recuperação de senha no email do usuario
    public function envioLinkEmail(Request $request):mixed
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            $msg = "Lamentamos! Este e-mail não está vinculado a uma conta de usuário.";
            return redirect()->back()->with('erro_email_001', $msg);
        }

        // Gerar o token de redefinição de senha
        $token = app('auth.password.broker')->createToken($user);

        // Construir o URL de redefinição de senha
        $resetUrl = url('autenticacao/reset', $token);

        // Enviar o e-mail
        Mail::send('Mail.resetPassword', ['resetUrl' => $resetUrl], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('SIGE-IPIAL (Redefinição de senha)');
        });

        return back()->with(['status' => 'Enviamos o link de redefinição de senha por e-mail!']);

    }

    //Metodo que processa redifinição de senha na db com base ao link
    public function processarRedefinicaoPassword(Request $request):mixed
    {
        switch($request->password) {
            case $request->password_confirmation:
                goto conti_salvar;
            default:
            $msg = "A confirmação da senha não correspondem.";
            return redirect()->back()->with('erro_senha_001', $msg)->withInput();
        }

        conti_salvar:
        $dados=[
            'token'=>$request->token,
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        $regras=[
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
        $msg_erro=[
            '*.required'=>'Este campo deve ser preenchido',
            'email.email'=>'Este campo deve conter um email valido',
            'password.min'=>'A senha deve conter no minimo 6 letras',
        ];

        $validator= Validator::make($dados,$regras,$msg_erro);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            $msg = "Lamentamos! Este e-mail não está vinculado a uma conta de usuário.";
            return redirect()->back()->with('erro_email_001', $msg)->withInput();
        }

        conti_expire:
        $resetPassword = DB::table('password_resets')
        ->where('email', $request->email)
        ->first();

        if (!$resetPassword) {
            return redirect()->back()->with('erro_link_001','Link inválido de redefinição de senha.')->withInput();
        }

        $dataCarbon = Carbon::parse($resetPassword->created_at);
        $dataAtual = Carbon::now();

        // Verifique se a data armazenada já passou 10 minutos em relação à data atual
        if($dataCarbon->diffInMinutes($dataAtual) >= 10) {
            // Remover o token de redefinição de senha após 10min
            DB::table('password_resets')->where('email', $request->email)->delete();
            goto conti_expire;
        }

        $resetPassword=Hash::check($request->token, $resetPassword->token);
        if (!$resetPassword) {
            return back()->with('erro_link_001', 'Link inválido de redefinição de senha.')->withInput();
        }

        $user->password = bcrypt($request->password);
        $user->save();

        // Remover o token de redefinição de senha após a alteração
        DB::table('password_resets')->where('email', $request->email)->delete();

        return redirect()->route('login')->with('success_reset_001','Senha redefinida com sucesso! Faça login com sua nova senha.');

    }


}

