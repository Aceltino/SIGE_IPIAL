<?php

namespace App\Traits;

use App\Http\Controllers\EnderecoController;
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
        $pessoa = Pessoa::find($dadosPessoa['pessoa_id']);
        foreach ($dadosPessoa as $campo => $valor)
        {
            $pessoa->$campo = $valor;
        }
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
