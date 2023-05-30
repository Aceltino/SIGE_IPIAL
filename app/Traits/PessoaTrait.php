<?php

namespace App\Traits;
use App\Models\Endereco;
use App\Models\Pessoa;

trait PessoaTrait
{  
    public static function storePessoa($dadosEndereco,$dadosPessoa):int
    {
        $enderecoCriado=Endereco::create($dadosEndereco);
        $enderecoId=$enderecoCriado->id;

        $dadosPessoa['endereco_id']= $enderecoId;
        $pessoaCriada=Pessoa::create($dadosPessoa);   
        
        return $pessoaCriada->id;
    }
}
