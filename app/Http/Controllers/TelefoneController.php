<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Telefone;
use Illuminate\Http\Request;

class TelefoneController extends Controller
{
    public static function storeTelefone($dadosTelefone):bool
    {
        $telefone = self::verTelefone($dadosTelefone['num_tel']);

        if(!$telefone)
        {
            return false;
        }
        Telefone::create($dadosTelefone);
        return true;
    }

    public static function verTelefone($telefone):bool
    {
        $idtelefone = Telefone::where('num_tel', $telefone)->pluck('telefone_id')->first();
        if($idtelefone)
        {
            return false;
        }
        return true;
    }

}
