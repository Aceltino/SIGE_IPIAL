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
        $ano_lectivo = self::pegarAnoLectivo();
        //dd($turma);
        for ($dis = 0; $dis < count($disciplinas); $dis++) {
            for ($tur = 0; $tur < count($turma[$dis]); $tur++) {
                $aluno = AlunoTurma::with('aluno.candidato.pessoa', 'turmaAno.turma')->where('turmaAno_id', $turma[$dis][$tur])
                ->get();

                $disc = Disciplina::find($disciplinas[$dis]);
                //dd($aluno);
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

                    $nota = Nota::with(['disciplina'])->where('aluno_id', $aluno[$i]->aluno_id)
                    ->where('trimestre_id', $trimestre[0]->trimestre_id)
                    ->where('disciplina_id', $disciplinas[$dis])->get();

                    $ac = Nota::with(['disciplina'])->where('aluno_id',  $aluno[$i]->aluno_id)
                    ->where('trimestre_id', $trimestre[0]->trimestre_id)
                    ->where('tipo_prova', 'AvaliacaoContinua')
                    ->where('disciplina_id', $disciplinas[$dis])->get();
                    //dd($aluno);
                    if(count($nota) < 1){
                        $dados[$dis][$tur][$i] = [
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
                            'disciplina_id' => $disc->disciplina_id,
                            'nome_disciplina' => $disc->nome_disciplina,
                            'curso' => $aluno[$i]->aluno->anoturma[0]->turma->curso->nome_curso,
                        ];
                    } else{
                        for($j = 0; $j < count($ac); $j++){
                            $mac += $ac[$j]->nota_aluno;
                            $med++;
                        }
                        if($med > 0){
                            $mac /= $med;
                            $mac = number_format($mac, 1, ".");
                        }
                        for($j = 0; $j < count($nota); $j++){
                            if($nota[$j]->tipo_prova === "Prova Professor"){
                                if($nota[$j]->nota_aluno){
                                    $npp = $nota[$j]->nota_aluno;
                                    $npp = number_format($npp, 1, ".");
                                } else{
                                    $npp = $nota[$j]->nota_aluno;
                                }
                            }
                        }
                        for($j = 0; $j < count($nota); $j++){
                            if($nota[$j]->tipo_prova === "ProvaTrimestre"){
                                if($nota[$j]->nota_aluno){
                                    $npt = $nota[$j]->nota_aluno;
                                    $npt = number_format($npt, 1, ".");
                                } else{
                                    $npt = $nota[$j]->nota_aluno;
                                }
                            }
                        }
                        for($j = 0; $j < count($nota); $j++){
                            if($nota[$j]->tipo_prova === "Prova Global"){
                                if($nota[$j]->nota_aluno){
                                    $npg = $nota[$j]->nota_aluno;
                                    $npg = number_format($npg, 1, ".");
                                } else{
                                    $npg = $nota[$j]->nota_aluno;
                                }
                            }
                        }
                        for($j = 0; $j < count($nota); $j++){
                            if($nota[$j]->tipo_prova === "Recurso"){
                                if($nota[$j]->nota_aluno){
                                    $recurso = $nota[$j]->nota_aluno;
                                    $recurso = number_format($recurso, 1, ".");
                                } else{
                                    $recurso = $nota[$j]->nota_aluno;
                                }
                            }
                        }
                        for($j = 0; $j < count($nota); $j++){
                            if($nota[$j]->tipo_prova === "Exame Recurso"){
                                if($nota[$j]->nota_aluno){
                                    $exame_recurso = $nota[$j]->nota_aluno;
                                    $exame_recurso = number_format($exame_recurso, 1, ".");
                                } else{
                                    $exame_recurso = $nota[$j]->nota_aluno;
                                }
                            }
                        }
                        for($j = 0; $j < count($nota); $j++){
                            if($nota[$j]->tipo_prova === "Exame"){
                                if($nota[$j]->nota_aluno){
                                    $exame = $nota[$j]->nota_aluno;
                                    $exame = number_format($exame, 1, ".");
                                } else{
                                    $exame = $nota[$j]->nota_aluno;
                                }
                            }
                        }
                        for($j = 0; $j < count($nota); $j++){
                            if($nota[$j]->tipo_prova === "Exame Especial"){
                                if($nota[$j]->nota_aluno){
                                    $exame_especial= $nota[$j]->nota_aluno;
                                    $exame_especial = number_format($exame_especial, 1, ".");
                                } else{
                                    $exame_especial = $nota[$j]->nota_aluno;
                                }
                            }
                        }
                        $dados[$dis][$tur][$i] = [
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
                            'disciplina_id' => $disc->disciplina_id,
                            'nome_disciplina' => $disc->nome_disciplina,
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
        $prof_disc = Professor_disciplina::with('turmaProf.curso', 'disciplina')->where('professor_id', $professor[0]->professor_id)
        ->where('ano_lectivo_id', $ano_lectivo[0]->ano_lectivo_id)
        ->get();
        //dd($prof_disc->toArray());
        for ($i = 0; $i < count($prof_disc); $i++) {
            $dados[$i] = [
                'nome_disciplina' =>  $prof_disc[$i]->disciplina->nome_disciplina,
                'disciplina_id' => $prof_disc[$i]->disciplina->disciplina_id,
            ];
          for ($j = 0; $j < count($prof_disc[$i]->turmaProf); $j++) {
            $dados[$i][$j] = [
                'turma_id' => $prof_disc[$i]->turmaProf[$j]->turma_id,
                'nome_turma' => $prof_disc[$i]->turmaProf[$j]->nome_turma,
                'curso_id' => $prof_disc[$i]->turmaProf[$j]->curso->curso_id,
                'nome_curso' => $prof_disc[$i]->turmaProf[$j]->curso->nome_curso,
            ];
          }
        }
        return $dados;
    }

    public static function pegarAnoTurmaCoord($turma_id) : int {
        $ano_lectivo = self::pegarAnoLectivo();
        $ano_turma = AnoTurmaCood::where('turma_id', $turma_id)
        ->where('ano_lectivo_id', $ano_lectivo[0]->ano_lectivo_id)->get();
        //dd($ano_turma);
        return $ano_turma[0]->turmaAno_id;

    }

    public static function pegarAdmin(){
        $ano_lectivo = self::pegarAnoLectivo();
        $prof_disc = Professor_disciplina::with('turmaProf.curso', 'disciplina')
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
                'curso_id' => $prof_disc[$i]->turmaProf[$j]->curso->curso_id,
                'nome_curso' => $prof_disc[$i]->turmaProf[$j]->curso->nome_curso,
            ];
          }
        }
        return $dados;
    }

    public static function pegarCoordenadorCurso($user){
        $coordenador = Professor::with('pessoa')->where('pessoa_id', $user->pessoa_id)->get();
        $ano_lectivo = self::pegarAnoLectivo();
        $prof_disc = Professor_disciplina::with('turmaProf.curso', 'disciplina')
        ->where('ano_lectivo_id', $ano_lectivo[0]->ano_lectivo_id)
        ->get();
        //dd($prof_disc->toArray());
        for ($i = 0; $i < count($prof_disc); $i++) {
            for ($j = 0; $j < count($prof_disc[$i]->turmaProf); $j++) {
                if($prof_disc[$i]->turmaProf[$j]->curso->curso_id === $coordenador[0]->curso_id){
                    $dados[$i] = [
                        'nome_disciplina' =>  $prof_disc[$i]->disciplina->nome_disciplina,
                        'disciplina_id' => $prof_disc[$i]->disciplina->disciplina_id,
                    ];
                    $dados[$i][$j] = [
                        'turma_id' => $prof_disc[$i]->turmaProf[$j]->turma_id,
                        'nome_turma' => $prof_disc[$i]->turmaProf[$j]->nome_turma,
                        'curso_id' => $prof_disc[$i]->turmaProf[$j]->curso->curso_id,
                        'nome_curso' => $prof_disc[$i]->turmaProf[$j]->curso->nome_curso,
                    ];
                }

            }
        }
        return $dados;
    }

}
