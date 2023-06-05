<?php

namespace App\Traits;
use App\Models\Endereco;
use App\Models\Pessoa;

trait PessoaTrait
{
    public static function storePessoa($dadosPessoa, $dadosEndereco = null): int
    {
        $num_bi = self::verBilhete($dadosPessoa['num_bi']);
        if(!$num_bi)
        {
            return false;
        }

        if($dadosEndereco != null)
        {
            $enderecoCriado=Endereco::create($dadosEndereco);
            $enderecoId=$enderecoCriado->id;
            $dadosPessoa['endereco_id']= $enderecoId;
        }
            $pessoaCriada = Pessoa::create($dadosPessoa);

            return $pessoaCriada->pessoa_id;
    }

    public static function verBilhete($num_bi):bool
    {
        $num_bi = Pessoa::where('num_bi', $num_bi)->pluck('num_bi')->first();
        if($num_bi)
        {
            return false;
        }
        return true;
    }
}
