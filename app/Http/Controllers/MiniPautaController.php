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
    Media
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
        
        $disciplinaGerais= Disciplina::where('componente','Cientificas')
                        ->Orwhere('componente','Socio-culturais')
                        ->get();

        $disciplinaEspecificas= Disciplina::where('componente','Técnicas')
                                            ->where('curso_id',$turma->curso->curso_id)
                                            ->get();

        //Combinei as duas coleções de disciplinas(Tecnicas e Gerais) em uma única variável            
        $disciplinasAll = $disciplinaGerais->concat($disciplinaEspecificas)->all();
        
        foreach ($disciplinasAll as $key => $value) {
           $disciplinar[]=$value;
           $professor = Professor_disciplina::where('disciplina_id', $value->disciplina_id);
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
        #$professor = Professor::with('pessoa')->findOrFail($prof_id);
        $professor_discip = Professor_disciplina::where('disciplina_id', $disciplina_id)->first();
        $ano_turma_coord = AnoTurmaCood::where('turma_id',  $turma_id)->first();
        $disciplina = Disciplina::where('disciplina_id', $disciplina_id)->first();
        
        $alunos = AlunoTurma::whereHas('anoTurmaCood', function ($query) use ($turma_id) {
            $query->whereHas('turma', function ($query) use ($turma_id) {
                $query->where('turma_id', $turma_id);
            });
        })->orderBy('numero_aluno', 'asc')->get();

        // Extrai os IDs dos alunos
        $alunoIds = $alunos->pluck('aluno_id')->toArray();

        // Realiza a consulta em Nota usando os IDs dos alunos
        $notas = Nota::whereIn('aluno_id', $alunoIds)->get();
        
        $not = $notas;
        foreach ($notas as $nota) {
            $dadosNotaAluno[] = [
                'nota' => $nota, 
                'aluno' => $nota->aluno_id,
                'aluno_info' => $nota->aluno->candidato->pessoa->nome_completo,
                'disciplina' => $nota->disciplina,
                'trimestre' => $nota->trimestre,
                'ano_letivo' => $ano_turma_coord->ano_lectivo
            ];
        }
        $mmedia = Media::whereIn('aluno_id', $alunoIds)->get();

        foreach ($dadosNotaAluno as $dd => $key) {
            #echo $key['ano_letivo'].'<hr>';
            #echo getMT1($key['aluno'], $key['disciplina']->disciplina_id).'<hr>';
            
            
            $media = Media::create([
                'nota' => $key['nota'],
                'aluno_id' => $key['aluno'],
                'disciplina_id' => $key['disciplina']->disciplina_id,
                'trimestre_id' => $key['trimestre']->trimestre_id,
                'ano_lectivo_id' => $key['ano_letivo']->ano_lectivo_id,
            ]);
        }
        
        return view('mini-pauta.mini-pauta-doc', ['alunos' => $alunos, 'anoturmacoord' => $ano_turma_coord, 'notas' => $notas, 'disciplina' => $disciplina, 'turma' => $turma, 'professor_discip' => $professor_discip]);
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
