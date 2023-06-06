<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public static function store($dadosEndereco)
    {
        $enderecoCriado = Endereco::create($dadosEndereco);
        return $enderecoCriado->id;
    }

}
