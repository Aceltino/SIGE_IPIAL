<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{

    public static function salas()
    {
        $sala = Sala::all();
        return $sala;
    }

}
