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
    AlunoTurma,
    DisciplinaCurso
};

class MiniPautaController extends Controller
{
    public function index()
    {

        /*$dados = Turma::join('classe_disciplina', 'turmas.classe_id', '=', 'classe_disciplina.classe_id')
                        ->join('disciplinas', 'classe_disciplina.disciplina_id', '=', 'disciplinas.disciplina_id')
                        ->select('turmas.*', 'classe_disciplina.*', 'disciplinas.*')
                        ->get();
    
        $dados = ClasseDisciplina::join('turmas', 'turmas.classe_id', '=', 'classe_disciplina.classe_id')
                    ->join('professor_disciplina', 'professor_disciplina.disciplina_id', '=', 'classe_disciplina.disciplina_id')
                    ->select('turmas.*', 'classe_disciplina.*', 'professor_disciplina.*')
                    ->get();*/

        #$turmas = Turma::has('beAlunos')->with('anoTurmaCoord')->distinct()->get();
        $turmas = AnoTurmaCood::has('alunoAno')->with('turma', 'alunoAno')->get();
        
        return view('mini-pauta.mini-pauta', ['turmas' => $turmas]);
    }

    public function turma($turma, $curso)
    {
        $turma = Turma::findOrFail($turma);
        $disciplinas = DisciplinaCurso::with('disciplinas', 'curso', 'professorDisciplina')
                        ->where('curso_id', $curso)
                        ->get();

        return view('mini-pauta.mini-pauta-discip', ['turma' => $turma, 'disciplinas' => $disciplinas]);
    }

    public function view($turma_id, $prof_id, $disciplina_id)
    {
        $turma = Turma::findOrFail($turma_id);
        $professor = Professor::with('pessoa')->findOrFail($prof_id);
        $ano_turma_coord = AnoTurmaCood::where('turma_id',  $turma_id)->first();
        $disciplina = Disciplina::where('disciplina_id', $disciplina_id)->first();
        #$notas  = Nota::where('disciplina_id', $disciplina_id)->first();
        
        $alunos = AlunoTurma::whereHas('anoTurmaCood', function ($query) use ($turma_id) {
            $query->whereHas('turma', function ($query) use ($turma_id) {
                $query->where('turma_id', $turma_id);
            });
        })->orderBy('numero_aluno', 'asc')->get();

        // Extrai os IDs dos alunos
        $alunoIds = $alunos->pluck('aluno_id')->toArray();

        // Realiza a consulta em Nota usando os IDs dos alunos
        $notas = Nota::whereIn('aluno_id', $alunoIds)->get();

        return view('mini-pauta.mini-pauta-doc', ['alunos' => $alunos, 'anoturmacoord' => $ano_turma_coord, 'notas' => $notas, 'disciplina' => $disciplina, 'turma' => $turma, 'professor' => $professor]);
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
