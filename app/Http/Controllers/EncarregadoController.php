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

    public static function updateEncarregado($dadosPessoa)
    {
        $pessoa = Encarregado::find($dadosPessoa['pessoa_id']);
        foreach ($dadosPessoa as $campo => $valor)
        {
            $pessoa->$campo = $valor;
        }
        $pessoaAtualizado = $pessoa->save();
        return $pessoaAtualizado;
    }
}
