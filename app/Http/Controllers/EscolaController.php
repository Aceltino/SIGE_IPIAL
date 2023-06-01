<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Escola_proveniencia;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    public static function storeEscola($dadosEscola):int
    {
        $escola = Escola_proveniencia::create($dadosEscola);
        $escolaId = $escola->id;

        return $escolaId;
    }
}
