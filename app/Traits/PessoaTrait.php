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

}
