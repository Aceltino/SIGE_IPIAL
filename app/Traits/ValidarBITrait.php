<?php

namespace App\Traits;

trait ValidarBITrait
{
    // > Augusto Kussema
    // Como usar ValidarBITrait::validar('');
    //
    public static function validar($bi)
    {
        $pattern = '/^\d{9}[A-Z]{2}\d{3}$/';

        return preg_match($pattern, $bi) === 1;
    }
}