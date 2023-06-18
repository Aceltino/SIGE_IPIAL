<?php

namespace App\Traits;
use App\Models\Trimestre;
use App\Models\Nota;
use App\Models\Aluno;
use App\Models\Disciplina;
use App\Models\pessoa;
use Illuminate\Support\Facades\Auth;

trait AvaliacaoTrait
{
    public static function pegarTrimestre()
    {
        $trimestre = Trimestre::with('anoLectivo')->where('status', 1)->get();
        return $trimestre;
    }


    public static function pegarNotaAluno($disciplinas){
        $trimestre = self::pegarTrimestre();
        //dd($trimestre);
        $aluno = Aluno::with(['candidato.pessoa', 'turmas', 'anoturma.turma'])->where('status', 1)->get();
        for ($inc = 0; $inc < count($disciplinas); $inc++) {
            $dis = Disciplina::find($disciplinas[$inc]);
            //dd($dis->nome_disciplina);
            for($i = 0; $i < count($aluno); $i++){
                $mac = null;
                $med = null;
                $pp = null;
                $npt = null;
                $npg = null;
                $recurso = null;
                $exame_recurso = null;
                $exame = null;
                $exame_especial = null;

                $nota = Nota::where('aluno_id', $aluno[$i]->aluno_id)
                ->where('id_trimestre', $trimestre[0]->trimestre_id)
                ->where('disciplina_id', $disciplinas[$inc])->get();
                $ac = Nota::with(['disciplina'])->where('aluno_id', $aluno[$i]->aluno_id)
                ->where('id_trimestre', $trimestre[0]->trimestre_id)
                ->where('tipo_prova', 'AvaliacaoContinua')
                ->where('disciplina_id', $disciplinas[$inc])->get();
                //dd($nota);
                if(count($nota) < 1){
                    $dados[$inc][$i] = [
                        'aluno_id' => $aluno[$i]->aluno_id,
                        'nome' => $aluno[$i]->candidato->pessoa->nome_completo,
                        'numero_aluno' => $aluno[$i]->turmas[0]->numero_aluno,
                        'turma_id' => $aluno[0]->anoturma[0]->turma->turma_id,
                        'nome_turma' => $aluno[0]->anoturma[0]->turma->nome_turma,
                        'trimestre_id' => $trimestre[0]->trimestre_id,
                        'trimestre' => $trimestre[0]->trimestre,
                        'mac' => $mac,
                        'pp' => $pp,
                        'pt' => $npt,
                        'pg' => $npg,
                        'recurso' => $recurso,
                        'exame_recurso' => $exame_recurso,
                        'exame' => $exame,
                        'exame_especial' => $exame_especial,
                        'disciplina_id' => $dis->disciplina_id,
                        'nome_disciplina' => $dis->nome_disciplina,
                        'curso' => $aluno[0]->anoturma[0]->turma->curso->nome_curso,
                    ];
                }
                for($j = 0; $j < count($ac); $j++){
                    $mac += $ac[$j]->nota_aluno;
                    $med++;
                }
                if($med > 0){
                    $mac /= $med;
                }
                for($j = 0; $j < count($nota); $j++){
                    if($nota[$j]->tipo_prova === "Prova Professor"){
                        $pp = $nota[$j]->nota_aluno;
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
                    'aluno_id' => $aluno[$i]->aluno_id,
                    'nome' => $aluno[$i]->candidato->pessoa->nome_completo,
                    'numero_aluno' => $aluno[$i]->turmas[0]->numero_aluno,
                    'turma_id' => $aluno[0]->anoturma[0]->turma->turma_id,
                    'nome_turma' => $aluno[0]->anoturma[0]->turma->nome_turma,
                    'trimestre_id' => $trimestre[0]->trimestre_id,
                    'trimestre' => $trimestre[0]->trimestre,
                    'mac' => $mac,
                    'npp' => $pp,
                    'npt' => $npt,
                    'pg' => $npg,
                    'recurso' => $recurso,
                    'exame_recurso' => $exame_recurso,
                    'exame' => $exame,
                    'exame_especial' => $exame_especial,
                    'disciplina_id' => $dis->disciplina_id,
                    'nome_disciplina' => $dis->nome_disciplina,
                    'curso' => $aluno[0]->anoturma[0]->turma->curso->nome_curso,
                ];
            }
        }
        //dd($dados);
        return $dados;
    }

    public static function pegarProfessor(){
        $prof = Auth::user();
        $pessoa = Pessoa::with('professor')->find($prof->pessoa_id);
        dd($pessoa);
    }
}
