<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public static function pegarIdClasse($nomeClasse):int
    {
        $idClasse = Classe::where('classe', $nomeClasse)->pluck('classe_id')->first();
        return $idClasse;
    }
    
}
