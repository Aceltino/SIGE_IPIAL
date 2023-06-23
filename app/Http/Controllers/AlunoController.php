<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Carbon\Carbon;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public static function store($dadosAluno)
    {
        $alunoCriado = Aluno::create($dadosAluno);
        return $alunoCriado->aluno_id;
    }

    public static function updateStatusTrue($idAluno) // Atualizr status para admitido
    {
        $alunoCriado = Aluno::find($idAluno);
        $alunoCriado->status =1;
        $alunoCriado->save();
        return $alunoCriado;
    }

    public static function alunosSemturma() // 10ª Classe
    {
        $alunos = Aluno::with('candidato')
        ->whereHas('candidato', function ($query) {
            $query->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo());
            $query->where('status', 'Matriculado');
        })
        ->where('status', 0 )
        ->get();

        $Alunos = [];

        foreach ($alunos as $aluno)
        {
            $Alunos[] =
            [
                'aluno_id' => $aluno->aluno_id,
                'curso' => $aluno->candidato->cursoAdmitido,
                'data_nasc' => $aluno->candidato->pessoa->data_nascimento,
                'nome' => $aluno->candidato->pessoa->nome_completo,
                'idCurso' => CursoController::pegarIdCurso($aluno->candidato->cursoAdmitido),
            ];
        }
        return $Alunos;
    }

    public static function alunosVinculados() // Fechamento do ano lectivo, ano lectivo status 0 -> Colocar esta função no fechamento do Ano Lectivo
    {
        $alunos = Aluno::where('status', 1 )->get();

        $Alunos = [];

        foreach ($alunos as $aluno)
        {
            $userId = AlunoController::pegarIdUser($aluno->aluno_id);
            $dadosUser=[
                'usuario_id'=> $userId,
                'status_usuario'=>0,
            ];

            UserController::updateUser($dadosUser);
            $Alunos[] =
            [
                $aluno->status = 0,
                $aluno->save()
            ];
        }
        return $Alunos;
    }

    public static function pegarIdUser($idAluno)
    {
        $alunos = Aluno::with('candidato.pessoa.user')
        ->where('aluno_id', $idAluno)
        ->get();

        foreach ($alunos as $aluno) {
            $userId = $aluno->candidato->pessoa->user->usuario_id;
        }

        return $userId;
    }
    // API MATRICULADOS... http://127.0.0.1:8000/api/matriculados
    public static function pegarDadosMatriculados()
    {
        $alunos = Aluno::with('candidato', 'anoturma')
        ->whereHas('candidato', function ($query) {
            $query->where('status', 'Matriculado');
        })
       // ->whereHas('anoturma', function ($query) {
           // $query->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo());
       // })
        ->get();

        $dataAtual = Carbon::now();
        foreach ($alunos as &$aluno)
        {
            $dataNascimento = Carbon::parse($aluno->candidato->pessoa->data_nascimento);
            $idade = $dataAtual->diffInYears($dataNascimento);
            $aluno['idade'] = $idade;
        }

        $Alunos = [];

        foreach ($alunos as $aluno) {
            foreach ($aluno->anoturma as $anoturma) {
                $Alunos[] = [
                    'N_processo' => $aluno->aluno_id,
                    'estado' => $aluno->status,
                    'nome' => $aluno->candidato->pessoa->nome_completo,
                    'nomeTurma' => $anoturma->turma->nome_turma,
                    'idade' => $aluno->idade,
                    'pai' => $aluno->candidato->nome_pai_cand,
                    'mae' => $aluno->candidato->nome_mae_cand,
                    'data_nasc' => $aluno->candidato->pessoa->data_nascimento,
                    'num_bi' => $aluno->candidato->pessoa->num_bi,
                    'genero' => $aluno->candidato->pessoa->genero,
                    'tel_aluno' => $aluno->candidato->pessoa->telefone,
                    'escola_prov' => $aluno->candidato->escola->nome_escola,
                    'turno_prov' => $aluno->candidato->escola->turno,
                    'turma_prov' => $aluno->candidato->escola->turma_aluno,
                    'ano_prov' => $aluno->candidato->ano_lectivo->ano_lectivo,
                    'processo_prov' => $aluno->candidato->escola->num_processo,
                    'N_aluno_prov' => $aluno->candidato->escola->num_aluno,
                    'cod_inscr' => $aluno->candidato->candidato_id,
                    'anoLectivo' => $anoturma->ano_lectivo->ano_lectivo,
                    'turno' => $anoturma->turma->turno->nome_turno,
                    'nomeTurma' => $anoturma->turma->nome_turma,
                    'classe' => $anoturma->turma->classe->classe,
                    'N_aluno' => $anoturma->pivot->numero_aluno,
                    'curso' => $aluno->candidato->cursoAdmitido,
                    'enc_grau_1'=>$aluno->encarregado[0]->grau_parentensco_enc,
                    'tel_grau_1'=>$aluno->encarregado[0]->pessoa->telefone,
                    'enc_grau_2'=>$aluno->encarregado[1]->grau_parentensco_enc,
                    'tel_grau_2'=>$aluno->encarregado[1]->pessoa->telefone,
                    'enc_grau_3'=>$aluno->encarregado[2]->grau_parentensco_enc,
                    'tel_grau_3'=>$aluno->encarregado[2]->pessoa->telefone,
                    'situacao'=>$anoturma->pivot->situacao,
                ];
            }
        }
        dd($Alunos);
        return $Alunos;

    }
//
    public static function alunosTurma() // Função chamada no AlunoTurmacontroller para saber a situação doa aluno no ano anterior
    {
        $alunos = Aluno::with('candidato', 'anoturma')
        ->whereHas('anoturma', function ($query) {
            $query->where('ano_lectivo_id', AnoLectivoController::pegarPenultimoAnoLectivo());
        })
        ->where('status', 0 )
        ->get();

        $Alunos = [];

        foreach ($alunos as $aluno) {
            foreach ($aluno->anoturma as $anoturma) {
                $Alunos[] = [
                    'aluno_id' => $aluno->aluno_id,
                    'aluno_status' => $aluno->status,
                    'situacao' =>  $anoturma->pivot->situacao,
                    'curso' => $aluno->candidato->cursoAdmitido,
                    'data_nasc' => $aluno->candidato->pessoa->data_nascimento,
                    'nome' => $aluno->candidato->pessoa->nome_completo,
                    'idCurso' => CursoController::pegarIdCurso($aluno->candidato->cursoAdmitido),
                    'classeId' => $anoturma->turma->classe->classe_id,
                    'nomeTurma' => $anoturma->turma->nome_turma
                ];
            }
        }
        return $Alunos;
    }

    public static function pegarDadosMatriculado($id)
    {
        $alunos = Aluno::with('candidato', 'anoturma')
        ->whereHas('candidato', function ($query) {
            $query->where('status', 'Matriculado');
        })
        ->whereHas('anoturma', function ($query) {
            $query->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo());
        })
        ->where('aluno_id', $id)
        ->get();

        $dataAtual = Carbon::now();
        foreach ($alunos as &$aluno)
        {
            $dataNascimento = Carbon::parse($aluno->candidato->pessoa->data_nascimento);
            $idade = $dataAtual->diffInYears($dataNascimento);
            $aluno['idade'] = $idade;
        }

        $Alunos = [];

        foreach ($alunos as $aluno) {
                $Alunos[] = [
                    'N_processo' => $aluno->aluno_id,
                    'nome' => $aluno->candidato->pessoa->nome_completo,
                    'idade' => $aluno->idade,
                    'pai' => $aluno->candidato->nome_pai_cand,
                    'mae' => $aluno->candidato->nome_mae_cand,
                    'data_nasc' => $aluno->candidato->pessoa->data_nascimento,
                    'num_bi' => $aluno->candidato->pessoa->num_bi,
                    'genero' => $aluno->candidato->pessoa->genero,
                    'tel_aluno' => $aluno->candidato->pessoa->telefone,
                    'escola_prov' => $aluno->candidato->escola->escola_prov,
                    'turno_prov' => $aluno->candidato->escola->turno,
                    'turma_prov' => $aluno->candidato->escola->turma_aluno,
                    'ano_prov' => $aluno->candidato->ano_lectivo->ano_lectivo,
                    'processo_prov' => $aluno->candidato->escola->num_processo,
                    'N_aluno_prov' => $aluno->candidato->escola->num_aluno,
                    'curso' => $aluno->candidato->cursoAdmitido,
                    'enc_grau_1'=>$aluno->encarregado[0]->grau_parentensco_enc,
                    'tel_grau_1'=>$aluno->encarregado[0]->pessoa->telefone,
                    'enc_grau_2'=>$aluno->encarregado[1]->grau_parentensco_enc,
                    'tel_grau_2'=>$aluno->encarregado[1]->pessoa->telefone,
                    'enc_grau_3'=>$aluno->encarregado[2]->grau_parentensco_enc,
                    'tel_grau_3'=>$aluno->encarregado[2]->pessoa->telefone
                ];
        }
        dd($Alunos);
        return $Alunos;

    }
//
}
