<?php

namespace App\Http\Controllers;

use App\Traits\PessoaTrait;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
    Auth,
    Validator
};

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

    public function loginCheck(Request $request){

        $credencias=[
            'nome_usuario'=>$request->username,
            'password'=>$request->password
        ];

        if(empty($credencias['nome_usuario']) || empty($credencias['password'])){
           return redirect()->back()->with('erro_login_001',"Por favor, Insira os dados de Acesso");
        }
        if(!Auth::attempt($credencias)){
            return redirect()->back()->with('erro_login_002',"Dados Incorrecto");
        }
        $user= Auth::user();
        return view('pagina-inicial',['user'=>$user]); //sobe

       
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
            'num_bi'=>'required|size:14',

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
            'genero'=>$request->genero
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
        return view('pagina-inicial')->with('registrado',$msg);
    }
}
