<?php

namespace App\Traits;
use App\Models\Assiduidade_aluno;
use Illuminate\Support\Fluent;
use App\Models\Disciplina;
use App\Models\AlunoTurma;
use App\Models\Dia;
use App\Models\Hora;
use App\Models\Horario;
use App\Models\Trimestre;
use App\Traits\AvaliacaoTrait;
use Carbon\Carbon;
use DateTime;
use Ramsey\Uuid\Type\Time;

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
                            'turno_id' => $aluno[$i]->aluno->anoturma[0]->turma->turno_id,
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
                            'turno_id' => $aluno[$i]->aluno->anoturma[0]->turma->turno_id,
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

    public static function pegarTempo($assiduidade){
        for($i = 0; $i < count($assiduidade); $i++){
            $hora_falta = new Carbon($assiduidade[$i]->data_hora);
            $hora_tempo = Hora::with('tempo')->get();
            for ($j = 0; $j < count($hora_tempo); $j++) {
                $h_falta = strtotime($hora_falta->toTimeString());
                $inicio = substr($hora_tempo[$j]->hora, 0, 5);
                $fim = substr($hora_tempo[$j]->hora, 8, 5);
                if($h_falta >= strtotime($inicio) && $h_falta <= strtotime($fim)){
                    $tempo[$i] = $hora_tempo[$j]->tempo->tempo;
                }
            }
        }
        return $tempo;
    }

    public static function pegarTempoFalta($turma_id, $professor_disciplina_id){
        $dia = self::pegarDiaBanco();
        if(!$dia){
            return false;
        }
        $tempo = Horario::with('tempo.hora', 'turma.turno')->where('dia_id', $dia[0]->dia_id)
        ->where('turma_id', $turma_id)
        ->where('disc_professor_id', $professor_disciplina_id)
        ->get();
        $hora_falta = now();
        $hora_falta = substr($hora_falta, 11, 5);
        $h_falta = strtotime($hora_falta);
        for($i = 0; $i < count($tempo); $i++){
            $hora_banco = Hora::where('turno_id', $tempo[$i]->turma->turno_id)->get();
            for ($j = 0; $j < count($hora_banco); $j++) {
                $inicio = substr($hora_banco[$j]->hora, 0, 5);
                $fim = substr($hora_banco[$j]->hora, 8, 5);
                if($h_falta >= strtotime($inicio) && $h_falta <= strtotime($fim)){
                    return $tempo;
                }
            }
        }
        return false;
    }

    public static function pegarDiaBanco(){
        $dia_corrente = self::pegarDiaSemana(date('D'));
        if($dia_corrente){
            $dia = Dia::where('nome_dia', $dia_corrente)->get();
            return $dia;
        } else{
            return false;
        }
    }

    public static function pegarDiaSemana($day){
        //dd($day);
        switch ($day) {
            case 'Mon':
                $dia = "SEGUNDA-FEIRA";
                break;
            case 'Tue':
                $dia = "TERÇA-FEIRA";
                break;
            case 'Wed':
                $dia = "QUARTA-FEIRA";
                break;
            case 'Thu':
                $dia = "QUINTA-FEIRA";
                break;
            case 'Fri':
                $dia = "SEXTA-FEIRA";
                break;
            default:
                $dia = false;
                break;
        }
        return $dia;
    }

}
