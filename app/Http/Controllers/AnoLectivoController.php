<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ano_lectivo;
use Illuminate\Http\Request;

class AnoLectivoController extends Controller
{
    public static function pegarIdAnoLectivo()
    {
        $ultimoAno = Ano_lectivo::latest()->first();
        return $ultimoAno->ano_lectivo_id;
    }
    public static function pegarNumVagas()
    {
        $ultimoAno = Ano_lectivo::latest()->first();
        return $ultimoAno->num_aluno_na_turma;
    }

    public static function pegarDataFimInscricao()
    {
        $ultimoAno = Ano_lectivo::latest()->first();
        return $ultimoAno->data_fim_inscricao;
    }
}
