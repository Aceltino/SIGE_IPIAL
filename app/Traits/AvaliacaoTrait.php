<?php

namespace App\Traits;
use App\Models\Trimestre;
use App\Models\Nota;
use App\Models\Disciplina;
use App\Models\Professor;
use App\Models\Professor_disciplina;
use App\Models\AnoTurmaCood;
use App\Models\AlunoTurma;
use App\Models\Ano_lectivo;


trait AvaliacaoTrait
{
    public static function pegarAnoLectivo()
    {
        $ano_lectivo = Ano_lectivo::where('status_ano_lectivo', 1)->get();
        return $ano_lectivo;
    }
    public static function pegarTrimestre()
    {
        $trimestre = Trimestre::with('anoLectivo')->where('status', 1)->get();
        return $trimestre;
    }


    public static function pegarNotaAluno($disciplinas, $turma){
        $trimestre = self::pegarTrimestre();

        for ($inc = 0; $inc < count($disciplinas); $inc++) {
            for ($ii = 0; $ii < count($turma[$inc]); $ii++) {

                $aluno = AlunoTurma::with(['aluno.candidato.pessoa', 'aluno.turmas', 'aluno.anoturma.turma'])
                ->where('turmaAno_id', $turma[$inc][$ii])->get();
                //dd($aluno[0]->aluno->candidato->pessoa->nome_completo);
            $dis = Disciplina::find($disciplinas[$inc]);

            for($i = 0; $i < count($aluno); $i++){
                $mac = null;
                $med = null;
                $npp = null;
                $npt = null;
                $npg = null;
                $recurso = null;
                $exame_recurso = null;
                $exame = null;
                $exame_especial = null;

                $nota = Nota::where('aluno_id', $aluno[$i]->aluno_id)
                ->where('trimestre_id', $trimestre[0]->trimestre_id)
                ->where('disciplina_id', $disciplinas[$inc])->get();
                $ac = Nota::with(['disciplina'])->where('aluno_id', $aluno[$i]->aluno_id)
                ->where('trimestre_id', $trimestre[0]->trimestre_id)
                ->where('tipo_prova', 'AvaliacaoContinua')
                ->where('disciplina_id', $disciplinas[$inc])->get();
                //dd($nota);
                if(count($nota) < 1){
                    $dados[$inc][$i] = [
                        'aluno_id' => $aluno[$i]->aluno_id,
                        'nome' => $aluno[$i]->aluno->candidato->pessoa->nome_completo,
                        'numero_aluno' => $aluno[$i]->aluno->turmas[0]->numero_aluno,
                        'turma_id' => $aluno[$i]->aluno->anoturma[0]->turma->turma_id,
                        'nome_turma' => $aluno[$i]->aluno->anoturma[0]->turma->nome_turma,
                        'trimestre_id' => $trimestre[0]->trimestre_id,
                        'trimestre' => $trimestre[0]->trimestre,
                        'mac' => $mac,
                        'npp' => $npp,
                        'npt' => $npt,
                        'npg' => $npg,
                        'recurso' => $recurso,
                        'exame_recurso' => $exame_recurso,
                        'exame' => $exame,
                        'exame_especial' => $exame_especial,
                        'disciplina_id' => $dis->disciplina_id,
                        'nome_disciplina' => $dis->nome_disciplina,
                        'curso' => $aluno[$i]->aluno->anoturma[0]->turma->curso->nome_curso,
                    ];
                } else{
                    for($j = 0; $j < count($ac); $j++){
                        $mac += $ac[$j]->nota_aluno;
                        $med++;
                    }
                    if($med > 0){
                        $mac /= $med;
                    }
                    for($j = 0; $j < count($nota); $j++){
                        if($nota[$j]->tipo_prova === "Prova Professor"){
                            $npp = $nota[$j]->nota_aluno;
                        }
                    }
                    for($j = 0; $j < count($nota); $j++){
                        if($nota[$j]->tipo_prova === "ProvaTrimestre"){
                            $npt = $nota[$j]->nota_aluno;
                        }
                    }
                    for($j = 0; $j < count($nota); $j++){
                        if($nota[$j]->tipo_prova === "Prova Global"){
                            $npg = $nota[$j]->nota_aluno;
                        }
                    }
                    for($j = 0; $j < count($nota); $j++){
                        if($nota[$j]->tipo_prova === "Recurso"){
                            $recurso = $nota[$j]->nota_aluno;
                        }
                    }
                    for($j = 0; $j < count($nota); $j++){
                        if($nota[$j]->tipo_prova === "Exame Recurso"){
                            $exame_recurso = $nota[$j]->nota_aluno;
                        }
                    }
                    for($j = 0; $j < count($nota); $j++){
                        if($nota[$j]->tipo_prova === "Exame"){
                            $exame = $nota[$j]->nota_aluno;
                        }
                    }
                    for($j = 0; $j < count($nota); $j++){
                        if($nota[$j]->tipo_prova === "Exame Especial"){
                            $exame_especial = $nota[$j]->nota_aluno;
                        }
                    }
                    $dados[$inc][$i] = [
                        'aluno_id' => $aluno[$i]->aluno->aluno_id,
                        'nome' => $aluno[$i]->aluno->candidato->pessoa->nome_completo,
                        'numero_aluno' => $aluno[$i]->aluno->turmas[0]->numero_aluno,
                        'turma_id' => $aluno[$i]->aluno->anoturma[0]->turma->turma_id,
                        'nome_turma' => $aluno[$i]->aluno->anoturma[0]->turma->nome_turma,
                        'trimestre_id' => $trimestre[0]->trimestre_id,
                        'trimestre' => $trimestre[0]->trimestre,
                        'mac' => $mac,
                        'npp' => $npp,
                        'npt' => $npt,
                        'npg' => $npg,
                        'recurso' => $recurso,
                        'exame_recurso' => $exame_recurso,
                        'exame' => $exame,
                        'exame_especial' => $exame_especial,
                        'disciplina_id' => $dis->disciplina_id,
                        'nome_disciplina' => $dis->nome_disciplina,
                        'curso' => $aluno[$i]->aluno->anoturma[0]->turma->curso->nome_curso,
                    ];
                }
            }
        }
    }
        return $dados;
    }

    public static function pegarProfessor($user){

        $professor = Professor::with('pessoa')->where('pessoa_id', $user->pessoa_id)->get();
        //dd($professor);
        $ano_lectivo = self::pegarAnoLectivo();
        $prof_disc = Professor_disciplina::with('turmaProf', 'disciplina')->where('professor_id', $professor[0]->professor_id)
        ->where('ano_lectivo_id', $ano_lectivo[0]->ano_lectivo_id)
        ->get();
        for ($i = 0; $i < count($prof_disc); $i++) {
            $dados[$i] = [
                'nome_disciplina' =>  $prof_disc[$i]->disciplina->nome_disciplina,
                'disciplina_id' => $prof_disc[$i]->disciplina->disciplina_id,
            ];
          for ($j = 0; $j < count($prof_disc[$i]->turmaProf); $j++) {
            $dados[$i][$j] = [
                'turma_id' => $prof_disc[$i]->turmaProf[$j]->turma_id,
                'nome_turma' => $prof_disc[$i]->turmaProf[$j]->nome_turma,
            ];
          }
        }
        return $dados;
    }

    public static function pegarAnoTurmaCoord($turma_id) : int {
        $ano_lectivo = self::pegarAnoLectivo();
        $ano_turma = AnoTurmaCood::where('turma_id', $turma_id)
        ->where('ano_lectivo_id', $ano_lectivo[0]->ano_lectivo_id)->get();
        return $ano_turma[0]->turmaAno_id;
    }
}
