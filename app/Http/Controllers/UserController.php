<?php
namespace App\Http\Controllers;

use App\Models\{
    User,
};
use App\Http\Controllers\{
    Controller
};
use Carbon\Carbon;
use Illuminate\Support\Facades\{
    Validator,Auth,
};
use Illuminate\Http\Request;
use App\Traits\PessoaTrait;


class UserController extends Controller
{

    use PessoaTrait;

    //Metodo que retorna a views do cadastro de usuario
    public function usuarioFormCadastro(){
        return view('usuario/use_cadastro');
    }

    //Metodo que retorna os dados do Usuario
    public static function index()
    {
        self::deleteBlockedUsers();
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
        $user = User::findOrFail($id);
        return view('usuario/use_editar',compact('user'));
    }

    //Metodo para fazer Update nos dados dos alunos
    public static function updateAluno($dadosUser)
    {
        $user = User::find($dadosUser['usuario_id']);

        foreach ($dadosUser as $campo => $valor)
        {
            $user->$campo = $valor;
        }
        return $user->save();
    }

    //Metodo para fazer Update nos dados do usuario
    public function updateUser(Request $request,$id)
    {
        $user= User::findOrFail($id);

        $regras_gerais=[

            //Formulario da Pessoa
            'nome_completo_update'=>'required|string|min:2|max:100',
            'data_nascimento_update'=>'required|date|before:'.now()->format('d-m-Y'),
            'num_bi_update'=>'required|size:14|unique:pessoas,num_bi,'.$user->pessoa_id.',pessoa_id',
            'telefone_update'=>'required|size:9|unique:pessoas,telefone,'.$user->pessoa_id.',pessoa_id',

            //Formulario do user
            'email_update'=> 'required|email|max:200|unique:users,email,'.$user->usuario_id.',usuario_id',

            //Formulario do endereço
            'municipio_update'=>'required|string|min:2',
            'bairro_update'=>'required|string',
            'zona_update'=>'required|string',
            'num_casa_update'=>'required|numeric',
        ];
        $msg_erro=[

            '*.required'=>'Este campo deve ser preenchido',
            '*.string'=>'Este campo deve conter apenas Letras',

            //Formulario da Pessoa
            'nome_completo_update.max'=>'Este campo não pode conter mais de 100 letras.',
            'nome_completo_update.min'=>'Este campo não pode conter menos de 2 letras.',
            'data_nascimento_update.date' => 'O campo :attribute deve ser uma data válida.',
            'data_nascimento_update.before'=> 'O campo :attribute deve ser uma data posterior à data atual.',
            'num_bi_update.size'=> 'Número de identificação esta incorrecto',
            'num_bi_update.unique'=> 'Número de identificação(BI) já esta a ser usado',
            'telefone_update.unique'=>'Número de telefone já esta sendo usado',
            'telefone_update.size'=> 'Número de telefone esta incorrecto',

            //Formulario do user
            'email_update.email'=>'Este campo deve conter um email valido',
            'email_update.max'=>'Lamentamos! Digita um email com menos caracter(letra)',
            'email_update.unique'=>'Lamentamos, este email já esta em uso',

            //Formulario do endereço
            'municipio_update.min'=>'O seu municipio não pode conter menos de 2 Letras',
            'num_casa_update.numeric'=>'Número de casa deve conter apenas digitos validos.',
        ];
        $dadosFiltrados=[

            //Dados da Pessoa
            'nome_completo_update'=>$request->nome_completo_update,
            'data_nascimento_update'=>$request->data_nascimento_update,
            'num_bi_update'=>$request->num_bi_update,
            'telefone_update'=>$request->telefone_update,

            //Dados do user
            'email_update'=>$request->email_update,
            'cargo_usuario_update'=>$request->cargo_usuario_update,

            //Dados do endereço
            'municipio_update'=>$request->municipio_update,
            'bairro_update'=>$request->bairro_update,
            'zona_update'=>$request->zona_update,
            'num_casa_update'=>$request->num_casa_update,
        ];

        $validator= Validator::make($dadosFiltrados,$regras_gerais,$msg_erro);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        session([
            'endereco_id'=>$user->pessoa->endereco_id,
            'pessoa_id'=>$user->pessoa_id,
            'usuario_id'=>$user->usuario_id,
        ]);

        //Dados do Endereço
        $dadosEndereco=[
            'municipio'=>$request->municipio_update,
            'bairro'=>$request->bairro_update,
            'zona'=>$request->zona_update,
            'numero_casa'=>$request->num_casa_update,
        ];

        //Dados do Pessoa
        $dadosPessoa=[
            'nome_completo'=>$request->nome_completo_update,
            'num_bi'=>$request->num_bi_update,
            'data_nascimento'=>$request->data_nascimento_update,
            'genero'=>$request->genero_update,
            'telefone'=>$request->telefone_update,
        ];

        //Update dos dados da Pessoa e Endereço
        if(!$this->updatePessoa_ACTUALIZADO($dadosPessoa,$dadosEndereco)){
            return redirect()->back()->with('erro_Update_002', 'Lamentamos! Erro na actualização de alguns dados.');
        }

        //Update dos dados do Usuario
        $user->email=$request->email_update;
        $user->cargo_usuario=$request->cargo_usuario_update;

        if (!$user->save()){
            return redirect()->back()->with('erro_Update_002', 'Lamentamos! Erro na actualização do Email.');
        }
        if (!AuthController::limitCadastroUser()) {
            return redirect()->back()->with('erro_Update_003', 'Lamentamos! Erro na actualização de alguns dados.');
        }
        return redirect()->back()->with('success', 'Dados actualizados com sucesso!');
    }

    //Metodo para mudar o estado do usuario.
    public static function userStateChange($id)
    {
        $user= User::findOrFail($id);

        if($user->status_usuario===0){

            if($user->cargo_usuario==='Director'){
                if(!AuthController::limitCadastroUser()){

                    $status=User::where('cargo_usuario','Director')->get();
                    foreach ($status as $value) {

                        if(!$value->status_usuario){
                            goto conti;
                        }
                        goto contiErro;
                    }

                    goto contiErro;
                }

                goto conti;
            }

            conti:
            $user->status_usuario=1;
            if(!$user->save()){
                contiErro:
                return redirect()->back()->with('erro_status_001','Lamentamos! Não foi possivel Desbloquer Usuario');
            }
            return redirect()->back()->with('success_status_001','Usuario Desbloqueado');

        }else{

            $user->status_usuario=0;
            if(!$user->save()){
                return redirect()->back()->with('erro_status_002','Lamentamos! Não foi possivel Bloqueado Usuario');
            }
            AuthController::detectarLogin($user); //Assim que o usuario for bloqueado a sessão sera finalizada
            return redirect()->back()->with('sucess_status_002','Usuario Bloqueado');
        }
    }

    private static function deleteBlockedUsers()
    {   
        try {
            $oneYearAgo = Carbon::now()->subYear();

            $blockedUsers = User::where('status_usuario', 0)
                                ->where('updated_at', '<=', $oneYearAgo)
                                ->get();
         
            foreach ($blockedUsers as $user) {
                $user->delete();
            }
            return count($blockedUsers);

        }catch (\Exception $e) {
           return false;
        }
    
    }

} //Fim da Classe UserController
