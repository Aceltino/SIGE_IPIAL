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
    DisciplinaCurso,
    Media,
    Trimestre
};

class MiniPautaController extends Controller
{
    public function index()
    {
        $turmas = AnoTurmaCood::has('alunoAno')->with('turma', 'alunoAno')->get();
        
        return view('mini-pauta.mini-pauta', ['turmas' => $turmas]);
    }

    public function turma($turma, $curso)
    {
        $turma = Turma::findOrFail($turma);
        
        $disciplinaGerais = Disciplina::where('componente','Cientificas')
                        ->Orwhere('componente','Socio-culturais')
                        ->get();

        $disciplinaEspecificas = Disciplina::where('componente','Técnicas')
                                            ->where('curso_id',$turma->curso->curso_id)
                                            ->get();

        //Combinei as duas coleções de disciplinas(Tecnicas e Gerais) em uma única variável            
        $disciplinasAll = $disciplinaGerais->concat($disciplinaEspecificas)->all();
        
        $disciplinar = [];

        foreach ($disciplinasAll as $disciplina) {
            $professor = Professor_disciplina::where('disciplina_id', $disciplina->disciplina_id)->first();
            if ($professor) {
                $disciplinar[] = [
                    'disciplina' => $disciplina,
                    'professor' => $professor
                ];
            }
        }

        $total = [
            'curso' => $turma->curso,
            'turma' => $turma,
            'disciplinar' => $disciplinar
        ];
        return view('mini-pauta.mini-pauta-discip', $total);
    }

    public function view($turma_id, $disciplina_id)
    {
        $turma = Turma::findOrFail($turma_id);
        $professor_discip = Professor_disciplina::where('disciplina_id', $disciplina_id)->first();
        $ano_turma_coord = AnoTurmaCood::where('turma_id', $turma->turma_id)->first();
        $disciplina = Disciplina::findOrFail($disciplina_id);
        
        $alunos = $turma->beAluno()
            ->orderBy('numero_aluno', 'asc')
            ->get();

        $notas = Nota::whereIn('aluno_id', $alunos->pluck('aluno_id'))
            ->get();
            
        $trimestres = Trimestre::all();

        $medias = [];

        foreach ($alunos as $aluno) {
            foreach ($trimestres as $trimestre) {
                $notasTrimestre = Nota::where('aluno_id', $aluno->aluno_id)
                    ->where('disciplina_id', $disciplina_id)
                    ->where('id_trimestre', $trimestre->trimestre_id)
                    ->whereIn('tipo_prova', ['Avaliação Contínua', 'Prova Professor', 'Prova Trimestre'])
                    ->get();
    
                if ($notasTrimestre->isNotEmpty()) {
                    $mediaTrimestre = $notasTrimestre->average('nota_aluno');
                    
                    $media = Media::where('aluno_id', $aluno->aluno_id)
                        ->where('disciplina_id', $disciplina_id)
                        ->where('ano_lectivo_id', $ano_turma_coord->ano_lectivo_id)
                        ->where('trimestre_id', $trimestre->trimestre_id)
                        ->first();
    
                    if (!$media) {
                        // Caso não exista média, insira uma nova média
                        $media = new Media();
                        $media->aluno_id = $aluno->aluno_id;
                        $media->disciplina_id = $disciplina_id;
                        $media->ano_lectivo_id = $ano_turma_coord->ano_lectivo_id;
                        $media->trimestre_id = $trimestre->trimestre_id;
                    }
                    $media->nota = $mediaTrimestre;
    
                    // Defina outros atributos da média, se houver
    
                    // Salve a média
                    $media->save();
    
                    $medias[$aluno->aluno_id][$trimestre->trimestre_id] = $media;
                }
            }
        }
        
        return view('mini-pauta.mini-pauta-doc', compact('alunos', 'ano_turma_coord', 'notas', 'disciplina', 'turma', 'professor_discip'));
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
