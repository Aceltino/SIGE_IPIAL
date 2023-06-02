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

    public static function pegarCandidatos()
    {
        $candidatos = Candidato::with('pessoa', 'escola')->get();

        $dadosCandidatos = [];

        foreach ($candidatos as $candidato) {
            $dadosCandidatos[] = [
                'Nome' => $candidato->pessoa->nome_completo,
                'Data de Nascimento' => $candidato->pessoa->data_nascimento,
                'Matematica' => $candidato->escola->matematica,
                'Lingua Portuguesa' => $candidato->escola->ling_port,
                'Fisica' => $candidato->escola->fisica,
                'Quimica' => $candidato->escola->quimica,
                'id' => $candidato->candidato_id,
            ];
        }

        return $dadosCandidatos;
    }

}
