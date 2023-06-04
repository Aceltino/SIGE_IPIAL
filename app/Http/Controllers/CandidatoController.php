<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidato;

class CandidatoController extends Controller
{
    public static function store($dadosCandidato)
    {
        return Candidato::create($dadosCandidato);
    }

    public static function pegarCandidatos()
    {
        $candidatos = Candidato::with('pessoa', 'escola')
        ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
        ->where(function ($query) {
            $query->where('status', 'não admitido')
                ->orWhere('status', 'pendente');
        })->get();

        $dadosCandidatos = [];

        foreach ($candidatos as $candidato)
        {
            $dadosCandidatos[] =
            [
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

    public static function pegarAdmitidos()
    {
        $candidatos = Candidato::with('pessoa', 'escola')
        ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
        ->where('status', 'Admitido')
        ->get();

        $candAdmitidos = count($candidatos);

        return $candAdmitidos;
    }

    public static function atualizarStatus($candidatoId)
    {
            // Atualizar os dados do candidato
            $candidato = Candidato::find($candidatoId);
            $candidato->status = "Admitido";

            $candidato->save();

            $candidatos = Candidato::where('status', 'pendente')->get();

            foreach ($candidatos as $candidato) {
                $candidato->status = 'não admitido';
                $candidato->save();
            }
    }

    //FUNÇÂO USADA PARA API, TESTEM => "http://127.0.0.1:8000/api/candidatos"
    public static function pegarDadosCandidatos()
    {
        $candidatos = Candidato::with('pessoa', 'escola', 'ano_lectivo')->get();

        $dadosCandidatos = [];

        foreach ($candidatos as $candidato)
        {
            $dadosCandidatos[] =
            [
                'Nome' => $candidato->pessoa->nome_completo,
                'Data de Nascimento' => $candidato->pessoa->data_nascimento,
                'NumeroBI' => $candidato->pessoa->num_bi,
                'Genero' => $candidato->pessoa->genero,

                'Matematica' => $candidato->escola->matematica,
                'Lingua Portuguesa' => $candidato->escola->ling_port,
                'Fisica' => $candidato->escola->fisica,
                'Quimica' => $candidato->escola->quimica,
                'Escola' => $candidato->escola->nome_escola,
                'Turno' => $candidato->escola->turno,
                'Numero Processo' => $candidato->escola->num_processo,
                'Numero Aluno' => $candidato->escola->num_aluno,
                'Ultimo AnoLectivo' => $candidato->escola->ultimo_anoLectivo,

                'Pai' => $candidato->nome_pai_cand,
                'Mae' => $candidato->nome_mae_cand,
                'Naturalidade' => $candidato->naturalidade_cand,
                'Situacao' => $candidato->status
            ];
        }

        return $dadosCandidatos;

    }


}
