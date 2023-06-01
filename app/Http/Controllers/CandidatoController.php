<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    public static function store($dadosCandidato)
    {
        return Candidato::create($dadosCandidato);
    }

}
