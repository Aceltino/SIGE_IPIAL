<?php

namespace App\Traits;
use App\Models\Escola_proveniencia;

trait EscolaTrait
{
    public static function storeEscola($dadosEscola):int
    {
        $escola = Escola_proveniencia::create($dadosEscola);
        $escolaId = $escola->id;

        return $escolaId;
    }
}
