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

   
    public static function updatePessoa_ACTUALIZADO($dadosPessoa,$dadosEndereco=null)
    {      

        $pessoas= Pessoa::all();
        $pessoa=  Pessoa::find(session('pessoa_id'));
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
      
            foreach($pessoas as $pessoa){
                if($pessoa->endereco_id === session('endereco_id')){
                    $contador++;
                }
            }

            if($contador > 1){

                //Neste caso cria-se novo endereço
                if(EnderecoController::store($dadosEndereco)){
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

    public static function deletePessoa($id)
    {
        $pessoa = Pessoa::find($id);
        $pessoa->delete();
        return $pessoa;
    }

}
