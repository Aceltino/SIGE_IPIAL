<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Encarregado;
use Illuminate\Http\Request;

class EncarregadoController extends Controller
{
    public static function storeEncarregado($dadosEncarregado)
    {
        $encarregadoCriada = Encarregado::create($dadosEncarregado);
        return $encarregadoCriada->encarregado_id;
    }

}
