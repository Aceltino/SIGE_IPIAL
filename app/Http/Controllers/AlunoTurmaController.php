<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoTurmaController extends Controller
{
    public static function SelecionarTurma() //10ª Classe
    {
       $alunos = AlunoController::alunosSemturma();
       $vagas = AdmissaoController::Vagas();

       usort($alunos, function ($a, $b)
            {
                $data_nascA = $a['data_nasc'];
                $data_nascB = $b['data_nasc'];

                if ($data_nascA == $data_nascB)
                {
                    return 0;
                }

                return ($data_nascA > $data_nascB) ? -1 : 1;
            });



        dd($vagas);
    }
}
