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
        $candidato = Candidato::find($dadosEscola['id']);
        $escola = $candidato->escola;
        $escola->nome_escola = $dadosEscola['nome_escola'];
        $escola->turno = $dadosEscola['turno'];
        $escola->turma_aluno = $dadosEscola['turma_aluno'];
        $escola->ling_port = $dadosEscola['ling_port'];
        $escola->matematica = $dadosEscola['matematica'];
        $escola->fisica = $dadosEscola['fisica'];
        $escola->quimica = $dadosEscola['quimica'];

        $escolaAtualizado = $escola->save();
        return $escolaAtualizado;
    }
}
