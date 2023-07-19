<?php

namespace App\Http\Controllers;

use App\Models\Dia;
use Illuminate\Http\Request;

class DiaController extends Controller
{
    public static function dias()
    {
        $turno = Dia::all();
        return $turno;
    }
}
