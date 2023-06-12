<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pessoa;
use App\Models\Escola_proveniencia;
use App\Models\Turma;
use App\Models\Candidato;

class ProcessoController extends Controller
{
    public function index()
    {
        $candidatoDados = Candidato::all(['status']);
        $pessoaDados = Pessoa::all(['nome_completo', 'num_bi']);
        $EscolaDADOS = Escola_proveniencia::all(['num_processo','turno']);
        $turmaDados = Turma::all(['nome_turma']);
        return view('processo.processos',['pessoaDados'=>$pessoaDados, 'EscolaDados'=>$EscolaDADOS, 'turmaDados'=>$turmaDados ]);
    }
}
