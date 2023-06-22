<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth};
use App\Models\{
    User,
    Turma,
    AnoTurmaCood,
    Notas,
    Disciplina
};

class MiniPautaController extends Controller
{
    public function index()
    {
        $data = Auth::user()->pessoa->data_nascimento;
        $idade = $this->getIdade($data);
        $turmas = Turma::all();
        $ano   = AnoTurmaCood::all();
        $discip = Disciplina::all();

        return view('mini-pauta.mini-pauta', ['discips' => $discip, 'turmas' => $turmas, 'idade' => $idade]);
    }

    public function show()
    {
        return view('mini-pauta.mini-pauta-doc');
    }

    private function getIdade($data)
    {
        $dataNascimento = $data;

        // Obter a data atual
        $dataAtual = new \DateTime();

        // Criar um objeto DateTime com a data de nascimento
        $dtNascimento = new \DateTime($dataNascimento);

        // Calcular a diferença entre as datas
        $diferenca = $dataAtual->diff($dtNascimento);

        // Obter a idade em anos
        $idade = $diferenca->y;

        return $idade;
    }
}
