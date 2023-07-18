<?php

namespace App\Traits;
use App\Models\Assiduidade_aluno;
use App\Models\Disciplina;
use App\Models\AlunoTurma;
use App\Models\Dia;
use App\Models\Hora;
use App\Models\Horario;
use App\Traits\AvaliacaoTrait;
use Carbon\Carbon;

trait AssiduidadeTrait
{
    public static function pegarAssiduidadeAluno($disciplinas, $turmas){
        //dd($turmas);
        $trimestre = AvaliacaoTrait::pegarTrimestre();
        if(count($trimestre) < 1){
            return 4;
        }
        $cont = 0;
        for ($dis = 0; $dis < count($disciplinas); $dis++) {
            if(!isset($turmas[$dis])){
                goto turn;
            }
            for ($tur = 0; $tur < count($turmas[$dis]); $tur++) {
                $aluno = AlunoTurma::with('aluno.candidato.pessoa', 'turmaAno.turma')->where('turmaAno_id', $turmas[$dis][$tur])
                ->get();
                if(count($aluno) > 0){
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
                            $dados[$cont][$tur][$i] = [
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
                            ->where('tipo_falta', "PRESENCIAL")
                            ->where('id_trimestre', $trimestre[0]->trimestre_id)
                            ->where('disciplina_id', $disciplinas[$dis])->get();

                            $discip = Assiduidade_aluno::with(['disciplina'])->where('aluno_id',  $aluno[$i]->aluno_id)
                            ->where('tipo_falta', 'DISCIPLINAR')
                            ->where('id_trimestre', $trimestre[0]->trimestre_id)
                            ->where('disciplina_id', $disciplinas[$dis])->get();

                            $mat = Assiduidade_aluno::with(['disciplina'])->where('aluno_id',  $aluno[$i]->aluno_id)
                            ->where('tipo_falta', 'MATERIAL')
                            ->where('id_trimestre', $trimestre[0]->trimestre_id)
                            ->where('disciplina_id', $disciplinas[$dis])->get();

                            $presencial = count($pres);
                            $disciplinar = count($discip);
                            $material = count($mat);
                            $dados[$cont][$tur][$i] = [
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

                } else{
                    return 6;
                }
            }
            $cont++;
            turn:
        }
        if(!isset($dados)){
            return 6;
        }
        //dd($dados);
        return $dados;
    }

    public static function pegarTempo($assiduidade){
        for($i = 0; $i < count($assiduidade); $i++){
            $hora_falta = new Carbon($assiduidade[$i]->updated_at);
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
        if(!isset($tempo)){
            for ($i = 0; $i < count($assiduidade); $i++) {
                $tempo[$i] = null;
            }

        }
        return $tempo;
    }

    public static function pegarTempoFalta($turma_id, $professor_disciplina_id){
        $dia = self::pegarDiaBanco();
        if(!$dia || count($dia) < 1){
            return 8;
        }
        $tempo = Horario::with('tempo.hora', 'turma.turno')->where('dia_id', $dia[0]->dia_id)
        ->where('turma_id', $turma_id)
        ->where('prof_disc_id', $professor_disciplina_id)
        ->get();

        if(count($tempo) < 1){
            return 9;
        }
        $hora_falta = now();
        $hora_falta = substr($hora_falta, 11, 5);
        $h_falta = strtotime($hora_falta);
        for($i = 0; $i < count($tempo); $i++){
            $hora_banco = Hora::where('turno_id', $tempo[$i]->turma->turno_id)->get();
            for ($j = 0; $j < count($hora_banco); $j++) {
                $inicio = substr($hora_banco[$j]->hora, 0, 5);
                $fim = substr($hora_banco[$j]->hora, 8, 5);
                if($h_falta >= strtotime($inicio) && $h_falta <= strtotime($fim)){
                    return $tempo->toArray();
                }
            }
        }
        return 10;
    }

    public static function calcularTempo($turma_id, $professor_disciplina_id){
        $dia = self::pegarDiaBanco();
        if(!$dia || count($dia) < 1){
            return 8;
        }
        $tempo = Horario::with('tempo.hora', 'turma.turno')->where('dia_id', $dia[0]->dia_id)
        ->where('turma_id', $turma_id)
        ->where('prof_disc_id', $professor_disciplina_id)
        ->get();

        if(count($tempo) < 1){
            return 9;
        }

        for ($i = 0; $i < count($tempo); $i++) {
            $tempos[$i] = [
                'tempo_id' => $tempo[$i]->tempo_id,
                'tempo' => $tempo[$i]->tempo->tempo
            ];
        }

        return $tempos;
    }

    public static function pegarDiaBanco(){
        $dia_corrente = self::pegarDiaSemana(date('D'));
        if($dia_corrente){
            $dia = Dia::where('nome_dia', $dia_corrente)->get();
            if(count($dia) > 0){
                return $dia->toArray();
            }else{
                return 9;
            }

        } else{
            return 9;
        }
    }

    public static function pegarDiaSemana($day){
        //dd($day);
        switch ($day) {
            case 'Mon':
                $dia = "Segunda-Feira";
                break;
            case 'Tue':
                $dia = "Terça-Feira";
                break;
            case 'Wed':
                $dia = "Quarta-Feira";
                break;
            case 'Thu':
                $dia = "Quinta-Feira";
                break;
            case 'Fri':
                $dia = "Sexta-Feira";
                break;
            default:
                $dia = false;
        }
        return $dia;
    }

    public static function verifyTempo($dia_id, $tempo_id, $turma_id, $prof_disc_id){
        $horario = Horario::where('dia_id', $dia_id)
        ->where('tempo_id', $tempo_id)
        ->where('turma_id', $turma_id)
        ->where('prof_disc_id', $prof_disc_id)
        ->get()->first();
        if($horario){
            return $horario->toArray();
        } else{
            return 9;
        }
    }

    public static function verifyFalta($aluno_id, $data_corrente, $disciplina_id, $tempo_id){
        $assiduidade = Assiduidade_aluno::where('aluno_id', $aluno_id)
        ->where('tempo_id', $tempo_id)
        ->where('disciplina_id',$disciplina_id)
        ->where('created_at', $data_corrente)
        ->get()->first();
        if($assiduidade){
            return true;
        } else{
            return false;
        }
    }

}
