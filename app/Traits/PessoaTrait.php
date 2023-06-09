<?php

namespace App\Traits;

use App\Http\Controllers\EnderecoController;
use App\Models\Candidato;
use App\Models\Pessoa;

trait PessoaTrait
{
    public static function storePessoa($dadosPessoa, $dadosEndereco = null)
    {
        if($dadosEndereco)
        {
            $enderecoId = EnderecoController::store($dadosEndereco);
            $dadosPessoa['endereco_id']= $enderecoId;
        }
        $pessoaCriada = Pessoa::create($dadosPessoa);
        return $pessoaCriada->pessoa_id;
    }

    public static function updatePessoa($dadosPessoa, $dadosEndereco = null)
    {
        $candidato = Candidato::find($dadosPessoa['id']);
        $pessoa = $candidato->pessoa;
        $pessoa->nome_completo = $dadosPessoa['nome_completo'];
        $pessoa->data_nascimento = $dadosPessoa['data_nascimento'];
        $pessoa->genero = $dadosPessoa['genero'];
        $pessoa->telefone = $dadosPessoa['telefone'];
        $pessoaAtualizado = $pessoa->save();
        // if($dadosEndereco)  ----- Antes de descomentar tens de criar o metodo update na controller endereço
        // {
        //     $enderecoId = EnderecoController::store($dadosEndereco);
        //     $dadosPessoa['endereco_id']= $enderecoId;
        // }
        // $pessoa
        return $pessoaAtualizado;
    }

}
