<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ano_lectivo;
use Illuminate\Http\Request;

class AnoLectivoController extends Controller
{
    public static function pegarAnoLectivo()
    {
        $ultimoAno = Ano_lectivo::latest()->first();
        return $ultimoAno->ano_lectivo_id;
    }
}
