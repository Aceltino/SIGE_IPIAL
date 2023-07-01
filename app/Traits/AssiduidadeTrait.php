<?php

namespace App\Traits;
use App\Models\Assiduidade_aluno;
use Illuminate\Support\Fluent;
use App\Models\Disciplina;
use App\Models\AlunoTurma;
use App\Models\Trimestre;
use App\Traits\AvaliacaoTrait;
trait AssiduidadeTrait
{
    public static function pegarAssiduidadeAluno($disciplinas, $turmas){

        $trimestre = AvaliacaoTrait::pegarTrimestre();
        $ano_lectivo = AvaliacaoTrait::pegarAnoLectivo();

        for ($dis = 0; $dis < count($disciplinas); $dis++) {
            for ($tur = 0; $tur < count($turmas[$dis]); $tur++) {
                $aluno = AlunoTurma::with('aluno.candidato.pessoa', 'turmaAno.turma')->where('turmaAno_id', $turmas[$dis][$tur])
                ->get();

                $disc = Disciplina::find($disciplinas[$dis]);

                for($i = 0; $i < count($aluno); $i++){
                    $presencial = 0;
                    $disciplinar = 0;
                    $material = 0;

                    $faltas = Assiduidade_aluno::with(['disciplina'])->where('aluno_id', $aluno[$i]->aluno_id)
                    ->where('id_trimestre', $trimestre[0]->trimestre_id)
                    ->where('disciplina_id', $disciplinas[$dis])->get();
                    //dd($faltas);
                    if(count($faltas) < 1){
                        $dados[$dis][$tur][$i] = [
                            'aluno_id' => $aluno[$i]->aluno_id,
                            'nome' => $aluno[$i]->aluno->candidato->pessoa->nome_completo,
                            'numero_aluno' => $aluno[$i]->aluno->turmas[0]->numero_aluno,
                            'turma_id' => $aluno[$i]->aluno->anoturma[0]->turma->turma_id,
                            'nome_turma' => $aluno[$i]->aluno->anoturma[0]->turma->nome_turma,
                            'trimestre_id' => $trimestre[0]->trimestre_id,
                            'trimestre' => $trimestre[0]->trimestre,
                            'falta_presencial' => $presencial,
                            'falta_disciplinar' => $disciplinar,
                            'falta_material' => $material,
                            'disciplina_id' => $disc->disciplina_id,
                            'nome_disciplina' => $disc->nome_disciplina,
                            'curso' => $aluno[$i]->aluno->anoturma[0]->turma->curso->nome_curso,
                        ];
                    } else{
                        $pres = Assiduidade_aluno::with(['disciplina'])->where('aluno_id', $aluno[$i]->aluno_id)
                        ->where('tipo_falta', 'Presencial')
                        ->where('id_trimestre', $trimestre[0]->trimestre_id)
                        ->where('disciplina_id', $disciplinas[$dis])->get();

                        $discip = Assiduidade_aluno::with(['disciplina'])->where('aluno_id',  $aluno[$i]->aluno_id)
                        ->where('tipo_falta', 'Disciplinar')
                        ->where('id_trimestre', $trimestre[0]->trimestre_id)
                        ->where('disciplina_id', $disciplinas[$dis])->get();

                        $mat = Assiduidade_aluno::with(['disciplina'])->where('aluno_id',  $aluno[$i]->aluno_id)
                        ->where('tipo_falta', 'Material')
                        ->where('id_trimestre', $trimestre[0]->trimestre_id)
                        ->where('disciplina_id', $disciplinas[$dis])->get();

                        $presencial = count($pres);
                        $disciplinar = count($discip);
                        $material = count($mat);
                        $dados[$dis][$tur][$i] = [
                            'aluno_id' => $aluno[$i]->aluno->aluno_id,
                            'nome' => $aluno[$i]->aluno->candidato->pessoa->nome_completo,
                            'numero_aluno' => $aluno[$i]->aluno->turmas[0]->numero_aluno,
                            'turma_id' => $aluno[$i]->aluno->anoturma[0]->turma->turma_id,
                            'nome_turma' => $aluno[$i]->aluno->anoturma[0]->turma->nome_turma,
                            'trimestre_id' => $trimestre[0]->trimestre_id,
                            'trimestre' => $trimestre[0]->trimestre,
                            'falta_presencial' => $presencial,
                            'falta_disciplinar' => $disciplinar,
                            'falta_material' => $material,
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
}
