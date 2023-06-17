<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidato;
use App\Models\Escola_proveniencia;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    public static function storeEscola($dadosEscola):int
    {
        $escola = Escola_proveniencia::create($dadosEscola);
        $escolaId = $escola->escola_proveniencia_id;

        return $escolaId;
    }

    public static function updateEscola($dadosEscola)
    {
        $escola = Escola_proveniencia::find($dadosEscola['escola_proveniencia_id']);
        foreach ($dadosEscola as $campo => $valor)
        {
            $escola->$campo = $valor;
        }
        $escolaAtualizado = $escola->save();
        return $escolaAtualizado;
    }
}
