<?php

namespace App\Http\Controllers;

use App\Models\Tempo;
use Illuminate\Http\Request;

class TempoController extends Controller
{
    public static function tempos()
    {
        $turno = Tempo::all();
        return $turno;
    }
}
