<?php

namespace App\Traits;

use App\Http\Controllers\EnderecoController;
use App\Models\{
    Candidato, Endereco, Pessoa,User
};
use Illuminate\Support\Facades\Auth;


trait PessoaTrait
{
    public static function storePessoa($dadosPessoa, $dadosEndereco = null)
    {
        if($dadosEndereco)
        {
            $consultEndereco= EnderecoController::consultEndereco($dadosEndereco);
            if(!empty($consultEndereco)){
                $dadosPessoa['endereco_id']= $consultEndereco->endereco_id;
                goto contPessoa;
            }
            $enderecoId = EnderecoController::store($dadosEndereco);
            $dadosPessoa['endereco_id']= $enderecoId;
        }
        contPessoa:
        $pessoaCriada = Pessoa::create($dadosPessoa);
        return $pessoaCriada->pessoa_id;
    }

    private static function getPessoa($id):mixed
    {   
        $pessoa= Pessoa::find($id);
        return $pessoa;
    }

    //Update dos dados da Pessoa e Endereço 
    public static function updatePessoa_ACTUALIZADO($dadosPessoa,$dadosEndereco=null)
    {      

        $pessoa= self::getPessoa(session('pessoa_id'));
        $contador= 0;
        $id=$pessoa->endereco_id;

        $pessoa->nome_completo= $dadosPessoa['nome_completo'];
        $pessoa->num_bi= $dadosPessoa['num_bi'];
        $pessoa->data_nascimento= $dadosPessoa['data_nascimento'];  
        $pessoa->genero= $dadosPessoa['genero'];
        $pessoa->telefone= $dadosPessoa['telefone'];

        if(!$pessoa->save()){
            $statePessoa= false;
        }else{
            $statePessoa=true;
        }

        if(!$dadosEndereco==null){ 

            //Neste caso atrela o endereço existente ao usuario, para evitar redundancia
            $consultEndereco= EnderecoController::consultEndereco($dadosEndereco);
            
            if(!empty($consultEndereco)){
                $pessoa->endereco_id= $consultEndereco->endereco_id;
                if(!$pessoa->save()){
                    return false;
                }
                return true;
            }
            //Contador de pessoa que usam o mesmo endereço
            foreach(Pessoa::all() as $pessoa){
                if($pessoa->endereco_id === session('endereco_id')){
                    $contador++;
                }
            }
         
            if($contador > 1){

                //Neste caso cria-se um novo endereço
                $novoEndereco= EnderecoController::store($dadosEndereco);
                $pessoa->endereco_id=$novoEndereco->endereco_id;

                if($pessoa->save()){
                    sleep(5);
                    goto update;
                }
                return false;
                  
            }else{

                update:
                //Neste caso actualiza-se o endereço existente
                if(!EnderecoController::update($id, $dadosEndereco)){
                    return false;
                }
                return true;
            }
        }
        return $statePessoa;
    }

    public static function updatePessoa($dadosPessoa)
    {
        $pessoa = Pessoa::find($dadosPessoa['pessoa_id']);
        foreach ($dadosPessoa as $campo => $valor)
        {
            $pessoa->$campo = $valor;
        }
        $pessoaAtualizado = $pessoa->save();
        return $pessoaAtualizado;
    }

    public static function checkPessoa($dadosPessoa)
    {
        return Pessoa::where('nome_completo', $dadosPessoa['nome_completo'])
                     ->where('num_bi', $dadosPessoa['num_bi'])
                     ->where('data_nascimento', $dadosPessoa['data_nascimento'])
                     ->where('genero', $dadosPessoa['genero'])
                     ->where('telefone', $dadosPessoa['telefone'])->first();

    }

    public static function checkPessoaBI($bilhete)
    {
        return Pessoa::where('num_bi', $bilhete)->first();
    }

    public static function deletePessoa($id)
    {
        $pessoa = Pessoa::find($id);

        try {
            $pessoa = Pessoa::find($id);
            $pessoa->delete();
            return $pessoa;
        } catch (\Throwable $th) {
            return false;
        }

    }

}
