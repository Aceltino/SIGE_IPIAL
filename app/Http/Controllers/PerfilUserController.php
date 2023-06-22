<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
    Auth,Validator,Hash,File,
};
use App\Traits\PessoaTrait;



class PerfilUserController extends Controller
{
    use PessoaTrait;

    //Metodo que retorna a views do Perfil
    public function index(){
        return view('perfil.perfil');
    }

    //Metodo para Actualizar dados do Usuario
    public function update(Request $request)
    {   
    
        $user= Auth::user();
        $user= User::findOrFail($user->usuario_id);

        if(!$request->hasFile('imagem_update')) {
            goto contiUpdate;   
        }
        $this->atualizarImagem($request);//UpLoad de Imagem

        contiUpdate:
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
            'num_bi_update.unique'=> 'Número de identificação Já esta a ser usado',
            'telefone_update'=>'Digite um número de telefone valido',

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

        if(!$this->updatePessoa_ACTUALIZADO($dadosPessoa,$dadosEndereco)){
            return redirect()->route('perfil')->with('erro_Update_001', 'Lamentamos! Erro na actualização de alguns dados.');
        }

        //Update do Usuário
        $user->email=$request->email_update;
        if (!$user->save()){
            return redirect()->route('perfil')->with('erro_Update_002', 'Lamentamos! Erro na actualização do Email.');
        }
        
        return redirect()->route('perfil')->with('success', 'Dados actualizados com sucesso!');
    }

    //Metodo para actualizar Imagem
    public function atualizarImagem($request)
    {   
        $user= Auth::user();
        $user=User::findOrFail($user->usuario_id);
        
        $imagem= $request->file('imagem_update');
        $extensao= $imagem->getClientOriginalExtension(); 

        $extensao= strtolower($extensao);
        $valiExtencion=['png','jpg','jpeg']; 
        $tamanhoBytes= filesize($imagem);
        $tamanhoMB = $tamanhoBytes/(1024 * 1024);
        $tamanho= round($tamanhoMB, 2);
          
        //Validando o tipo de imagem
        if(!in_array($extensao,$valiExtencion)){
            return redirect()->back()->with('erro_imagem_001','Lamentamos! Deve inserir uma imagem')->withInput();
        }

        //Validando o Tamnho da Imagem
        if($tamanho > 1){ //1MB
            return redirect()->back()->with('erro_imagem_002','Lamentamos! Deve inserir uma imagem com peso abaixo de 1MB')->withInput();
        } 
        
        $nomeImagem = uniqid ($user->usuario_id,true).'.'.$extensao;
        $path= public_path('img\fotoPerfilUsuario');
        
        $imagem_antiga= public_path().str_replace("/", '\\', $user->imagem_usuario);
        $caminhoCompleto= $imagem->move($path,$nomeImagem); 
        $caminhoRelativo= str_replace(public_path(), '', $caminhoCompleto);

        $user->imagem_usuario= str_replace("\\", '/', $caminhoRelativo);
        
        if(!$user->save()){
            return redirect()->back()->with('erro_imagem_003', 'Lamentamos! Detectamos um erro desconhecido ao carregar a imagem.');
        }  

        if (File::exists($imagem_antiga)) {
            try {
                File::delete($imagem_antiga);
            } catch (\Exception $e) {
                return redirect()->back()->with('erro_imagem_004', 'Lamentamos! Não foi possível excluir a imagem antiga.');
            }
        }
        return redirect()->back()->with('success_imagem_001', 'Imagem atualizada com sucesso.');
    }

    //Metodo para Actualizar Senha
    public static function changePassword(Request $request)
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
            'password_old'=>$request->password_old,
            'password'=>$request->password,
        ];
        $regras=[
            'password' => 'required|min:6',
            'password_old'=>'required|min:6',
        ];
        $msg_erro=[
            '*.required'=>'Este campo deve ser preenchido',
            'password.min'=>'A senha deve conter no minimo 6 letras',
            'password_old.min'=>'A senha deve conter no minimo 6 letras',
        ];
        $validator= Validator::make($dados,$regras,$msg_erro);

        if($validator->fails()){
            return redirect()->back()->with('erro_senha_001', 'Erro senha não redifinida.')->withErrors($validator)->withInput();
        }
        $userAuth= Auth::user();
        $user= User::findOrFail($userAuth->usuario_id);

        if (!Hash::check($request->password_old, $user->password)) {
            return redirect()->back()->with('erro_senha_002', 'Senha actual incorrecta.')->withInput();
        }

        $user->password = bcrypt($request->password);
        if($user->save()){
            return redirect()->back()->with('success_updatePassword_001','Senha redefinida com sucesso!');
        }
    }


}
