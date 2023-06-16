<?php

namespace App\Traits;
use App\Models\Aluno;
use App\Models\Candidato;
use App\Models\Pessoa;
use App\Models\Disciplina;
use App\Models\Trimestre;
use App\Models\Curso;
use App\Models\Aluno_turma;
use App\Models\Ano_lectivo;
use App\Models\Ano_turma_coord;
use App\Models\Turma;
use App\Models\Nota;
use App\Models\Professor;
use App\Models\Professor_disciplina;
use Illuminate\Support\Facades\Auth;

trait AvaliacaoTrait
{
    public static function pegarAnoLectivo()
    {
        $anolec = Ano_lectivo::where('status_ano_lectivo', 1)->get();
        return $anolec[0]['ano_lectivo_id'];
    }
    public static function pegarNomeAluno($id)
    {
        $aluno = Aluno::find($id);
        $candidato = Candidato::where('candidato_id', $aluno->candidato_id)->get()->toArray();
        $pessoa = Pessoa::where('pessoa_id', $candidato[0]['pessoa_id'])->get();
        return $pessoa;
    }
    public static function pegarDisciplina($id)
    {
        $disciplina = Disciplina::where('disciplina_id', $id)->get();
        return $disciplina;
    }
    public static function pegarTrimestre()
    {
        $trimestre = Trimestre::where('status', 1)->get();
        return $trimestre;
    }
    public static function pegarCurso($id)
    {
        $curso = Curso::where('curso_id', $id)->get();
        return $curso;
    }
    public static function turmaAluno($id){
        $anolec = Ano_lectivo::latest()->first();
        $aluno_turma = Aluno_turma::where('aluno_id', $id)->get()->last();
        //dd($aluno_turma);
        $turma_coord = Ano_turma_coord::where('turmaAno_id', $aluno_turma['ano_coord_id'])->get()->first();
        $turma = Turma::find($turma_coord->turma_id);
        return $turma;
    }
    public static function notas($disciplina_id, $turma){
        $dados = array();
        $trimestre = self::pegarTrimestre();

        for($i = 0; $i < count($disciplina_id); $i++){
            $nota = Nota::with(['aluno.turmas.anoCoord.turma'])->where('disciplina_id', $disciplina_id[$i])->where('id_trimestre', $trimestre[0]['trimestre_id'])->get();
            dd($nota);
            for($k = 0; $k < count($nota); $k++){
                $aluno_id[$k] = $nota[$k]['aluno_id'];
            }
            $id = array_unique($aluno_id);
            $inc = 0;
            foreach($id as $i){
                $ID[$inc] = $i;
                $inc++;
            }
            //dd($nota[4]['aluno']['candidato']['pessoa']);

            for($j = 3; $j < count($ID); $j++){
                $np = $nota[$j];
                //dd($np);
                $dados[$j] = [
                    'id_aluno' => $np['aluno_id'],
                    'nome' => $np['aluno']['candidato']['pessoa']['nome_completo'],
                    'numero_aluno' => $np['aluno']['turmas'][0]['numero_aluno'],
                    $v = $np['aluno']['turmas'][0]['numero_aluno'],
                    dd($np['aluno']['turmas'][0]['anoCoord']),
                    'turma_id' => $np['aluno']['turmas'][0]['anoCoord'][0]['turma']['turma_id'],
                    'nome_turma' => $np['aluno']['turmas'][0]['anoCoord']['turma']['nome_turma'],
                    'trimestre_id' => $np['trimestre']['trimestre_id'],
                    'trimestre' => $np['trimestre']['trimestre'],
                ];
                for($k = 0; $k < count($nota); $k++){
                    $dados[$j][$k] = [
                        'nota_id' => $nota[$k]['nota_id'],
                        'nota_aluno' => $nota[$k]['nota_aluno'],
                        'tipo_prova' => $nota[$k]['tipo_prova'],
                        'disciplina_id' => $nota[$k]['disciplina_id'],
                        'nome_disciplina' => $nota[$k]['disciplina']['nome_disciplina'],
                        'data_avaliacao' => $nota[$k]['data_avaliacao'],
                        'descricao_nota' => $nota[$k]['descricao_nota'],
                    ];
                }

                dd($dados);
                    //echo $ID . "</br>";
                }

            }

        return $dados;
    }
    public static function pegarProfessor(){
        $prof = Professor::where('pessoa_id', Auth::user()->pessoa_id)->get();
        $disciplinas = Professor_disciplina::where('professor_id', $prof[0]['professor_id'])->where('ano_lectivo_id', self::pegarAnoLectivo())->get();
        $prof->load('professor_disciplina');
        $turma = Ano_turma_coord::where('professor');
        $disciplinas->load('turmaAnoCoord');
        dd($disciplinas);
        return $prof;
    }
    public static function dados($disciplina_id, $turma){

        return self::notas($disciplina_id);
    }
}
