<?php

namespace App\Traits;

use App\Models\Ano_lectivo;

trait AnoLectivoTrait
{
    public static function pegarAnoLectivo()
    {
        $ultimoAno = Ano_lectivo::latest()->first();
        return $ultimoAno->ano_lectivo_id;
    }
}
