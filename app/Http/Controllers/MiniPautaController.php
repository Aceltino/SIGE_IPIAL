<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
    Auth,
    DB
};
use App\Models\{
    User,
    Turma,
    AnoTurmaCood,
    Nota,
    Disciplina,
    ClasseDisciplina,
    Professor_disciplina,
    Professor,
    AlunoTurma
};

class MiniPautaController extends Controller
{
    public function index()
    {
        /*$dadosTurmas = Turma::join('classe_disciplina', 'turmas.classe_id', '=', 'classe_disciplina.classe_id')
                            #->jioin('disciplinas', 'classe_disciplina.discplina_id', '=', 'disciplinas.disciplina_id')
                            ->join('notas', 'classe_disciplina.disciplina_id', '=', 'notas.disciplina_id')
                            ->select('turmas.*', 'classe_disciplina.*', 'notas.*')
                            ->distinct()
                            ->get(); */
        $dados = Turma::join('classe_disciplina', 'turmas.classe_id', '=', 'classe_disciplina.classe_id')
                        ->join('disciplinas', 'classe_disciplina.disciplina_id', '=', 'disciplinas.disciplina_id')
                        ->select('turmas.*', 'classe_disciplina.*', 'disciplinas.*')
                        ->get();

        $dados = ClasseDisciplina::join('turmas', 'turmas.classe_id', '=', 'classe_disciplina.classe_id')
                                    ->join('professor_disciplina', 'professor_disciplina.disciplina_id', '=', 'classe_disciplina.disciplina_id')
                                    ->select('turmas.*', 'classe_disciplina.*', 'professor_disciplina.*')
                                    ->get();

        return view('mini-pauta.mini-pauta', ['dados' => $dados]);
    }

    public function view($turma_id, $prof_id, $disciplina_id)
    {
        $turma = Turma::findOrFail($turma_id);
        $professor = Professor::with('pessoa')->findOrFail($prof_id);
        $ano_turma_coord = AnoTurmaCood::where('turma_id',  $turma_id)->first();
        $disciplina = Disciplina::where('disciplina_id', $disciplina_id)->first();
        $notas  = Nota::where('disciplina_id', $disciplina_id)->first();
        
        $alunoTurma = AlunoTurma::where('turmaAno_id', $turma_id)->get();
        /*$alunoTurma = AlunoTurma::join('notas', 'notas.aluno_id', '=', 'aluno_turma.aluno_id')
                        ->select('aluno_turma.*', 'notas.*')
                        ->where('aluno_turma.aluno_id', 'notas.aluno_id')
                        ->get();*/

        return view('mini-pauta.mini-pauta-doc', ['alunoTurma' => $alunoTurma, 'anoturmacoord' => $ano_turma_coord, 'notas' => $notas, 'disciplina' => $disciplina, 'turma' => $turma, 'professor' => $professor]);
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
