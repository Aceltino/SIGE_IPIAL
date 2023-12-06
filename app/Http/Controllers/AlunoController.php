<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Carbon\Carbon;

class AlunoController extends Controller
{
    public static function store($dadosAluno)
    {
        $alunoCriado = Aluno::create($dadosAluno);
        return $alunoCriado->aluno_id;
    }

    public static function updateAluno($dadosAluno)
    {
        $aluno = Aluno::find($dadosAluno['aluno_id']);
        foreach ($dadosAluno as $campo => $valor)
        {
            $aluno->$campo = $valor;
        }
        $alunoAtualizado = $aluno->save();
        return $alunoAtualizado;
    }

    public static function updateStatusTrue($idAluno) // Atualizar status para true
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

    public static function alunoCandId($id) // 10ª Classe
    {
        $aluno = Aluno::find($id);
        return $aluno->candidato->pessoa_id;
    }

    public static function alunosVinculados() // Fechamento do ano lectivo, ano lectivo status 0 -> Colocar esta função no fechamento do Ano Lectivo
    {
        $alunos = Aluno::where('status', 1 )->get();
        if ($alunos->isEmpty()) {
            return false;
        }

        foreach ($alunos as $aluno)
        {
            $userId = AlunoController::pegarIdUser($aluno->aluno_id);
            $dadosUser=[
                'usuario_id'=> $userId,
                'status_usuario'=>0,
            ];

            UserController::updateAluno($dadosUser);

            $Alunos =
            [
                $aluno->status = 0,
                $aluno->save()
            ];
        }
         return $Alunos;
    }

    public static function pegarIdUser($idAluno)
    {
        $aluno = Aluno::with('candidato.pessoa.user')
        ->where('aluno_id', $idAluno)
        ->get()
        ->first();
        $userId = $aluno->candidato->pessoa->user[0]->usuario_id;

        return $userId;
    }
    // API MATRICULADOS... http://127.0.0.1:8000/api/matriculados
    public static function pegarDadosMatriculados()
    {
        $alunos = Aluno::with('candidato', 'anoturma')
        ->whereHas('candidato', function ($query) {
            $query->where('status', 'Matriculado');
        })
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
            $turmaAtual = null;
            $anoLectivo = null;
            $turno = null;
            $classe = null;
            $n_aluno = null;
            $situacao = null;
            foreach ($aluno->anoturma as $anoturma) {
                if ($anoturma->ano_lectivo_id === AnoLectivoController::pegarIdAnoLectivo()) {
                    $turmaAtual = $anoturma->turma->nome_turma;
                    $anoLectivo = $anoturma->ano_lectivo->ano_lectivo;
                    $turno = $anoturma->turma->turno->nome_turno;
                    $classe = $anoturma->turma->classe->classe;
                    $n_aluno = $anoturma->pivot->numero_aluno;
                    $situacao = $anoturma->pivot->situacao;
                    break;
                }
            }

            // dd($aluno->anoturma);
                $Alunos[] = [
                    'N_processo' => $aluno->aluno_id,
                    'estado' => $aluno->status,
                    'nome' => $aluno->candidato->pessoa->nome_completo,
                    'naturalidade' => $aluno->candidato->naturalidade_cand,
                    'nomeTurma' => $turmaAtual,
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
                    'anoLectivo' => $anoLectivo,
                    'turno' => $turno,
                    'classe' => $classe,
                    'N_aluno' => $n_aluno,
                    'curso' => $aluno->candidato->cursoAdmitido,
                    'enc_grau_1'=>$aluno->encarregado[0]->grau_parentensco_enc,
                    'tel_grau_1'=>$aluno->encarregado[0]->pessoa->telefone,
                    'enc_grau_2'=>$aluno->encarregado[1]->grau_parentensco_enc,
                    'tel_grau_2'=>$aluno->encarregado[1]->pessoa->telefone,
                    'enc_grau_3'=>$aluno->encarregado[2]->grau_parentensco_enc,
                    'tel_grau_3'=>$aluno->encarregado[2]->pessoa->telefone,
                    'situacao'=>$situacao,
                ];
            }
        return $Alunos;
    }

    public static function alunosTurmaTotal() // Função chamada no AlunoTurmacontroller para saber a situação doa aluno no ano anterior
    {
        $anoRestrict = AnoLectivoController::pegarIdAnoLectivo();

        $alunos = Aluno::with('candidato', 'anoturma')
            ->whereHas('anoturma', function ($query) use ($anoRestrict) {
                $query->where('ano_lectivo_id', '=', $anoRestrict);
            })
            ->get();

        $Alunos = [];

        foreach ($alunos as $aluno) {
            foreach ($aluno->anoturma as $anoturma) {
                if($anoturma->ano_lectivo_id === $anoRestrict)
                {
                $Alunos[] = [
                    'aluno_id' => $aluno->aluno_id,
                    'situacao' =>  $anoturma->pivot->situacao,
                ];
                }
            }
        }
        return $Alunos;
    }

    public static function alunosTurma() // Função chamada no AlunoTurmacontroller para saber a situação doa aluno no ano anterior
    {
        $anoRestrict = AnoLectivoController::pegarPenultimoAnoLectivo();

        $alunos = Aluno::with('candidato', 'anoturma')
            ->whereHas('anoturma', function ($query) use ($anoRestrict) {
                $query->where('ano_lectivo_id', '=', $anoRestrict);
            })
            ->get();

        $Alunos = [];

        foreach ($alunos as $aluno) {
            foreach ($aluno->anoturma as $anoturma) {
                if($anoturma->ano_lectivo_id === $anoRestrict)
                {
                $Alunos[] = [
                    'aluno_id' => $aluno->aluno_id,
                    'aluno_status' => $aluno->status,
                    'situacao' =>  $anoturma->pivot->situacao,
                    'curso' => $aluno->candidato->cursoAdmitido,
                    'data_nasc' => $aluno->candidato->pessoa->data_nascimento,
                    'nome' => $aluno->candidato->pessoa->nome_completo,
                    'cursoId' => CursoController::pegarIdCurso($aluno->candidato->cursoAdmitido),
                    'classeId' => $anoturma->turma->classe->classe_id,
                    'turnoId' => $anoturma->turma->turno->turno_id,
                    'anoLectivo' => $anoturma->ano_lectivo->ano_lectivo,
                    'nomeTurma' => $anoturma->turma->nome_turma,
                ];
                }
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

        foreach ($alunos as $aluno)
        {
            foreach ($aluno->anoturma as $anoturma)
            {
                $turmaAtual = $anoturma->turma->nome_turma;
                $turnoAtual = $anoturma->turma->turno->nome_turno;
                $classeAtual = $anoturma->turma->classe->classe;
                $numAlun_Atual = $anoturma->pivot->numero_aluno;
                if ($anoturma->ano_lectivo_id === AnoLectivoController::pegarIdAnoLectivo()) {
                    $turmaAtual = $anoturma->turma->nome_turma;
                    $turnoAtual = $anoturma->turma->turno->nome_turno;
                    $classeAtual = $anoturma->turma->classe->classe;
                    $numAlun_Atual = $anoturma->pivot->numero_aluno;
                    break;
                }
            }
            $Alunos[] = [
                'N_processo' => $aluno->aluno_id,
                'nome' => $aluno->candidato->pessoa->nome_completo,
                'idade' => $aluno->idade,
                'cod_inscr' => $aluno->candidato->candidato_id,
                'pai' => $aluno->candidato->nome_pai_cand,
                'mae' => $aluno->candidato->nome_mae_cand,
                'data_nasc' => $aluno->candidato->pessoa->data_nascimento,
                'num_bi' => $aluno->candidato->pessoa->num_bi,
                'genero' => $aluno->candidato->pessoa->genero,
                'tel_aluno' => $aluno->candidato->pessoa->telefone,
                'escola_prov' => $aluno->candidato->escola->nome_escola,
                'turno_prov' => $aluno->candidato->escola->turno,
                'naturalidade' => $aluno->candidato->naturalidade_cand,
                'turma_prov' => $aluno->candidato->escola->turma_aluno,
                'ano_prov' => $aluno->candidato->ano_lectivo->ano_lectivo,
                'processo_prov' => $aluno->candidato->escola->num_processo,
                'N_aluno_prov' => $aluno->candidato->escola->num_aluno,
                'turno' => $turnoAtual,
                'classe' => $classeAtual,
                'N_aluno' => $numAlun_Atual,
                'turma' => $turmaAtual,
                'anoLectivoA' => $anoturma->ano_lectivo->ano_lectivo,
                'curso' => $aluno->candidato->cursoAdmitido,
                'enc_grau_1'=>$aluno->encarregado[0]->grau_parentensco_enc,
                'tel_grau_1'=>$aluno->encarregado[0]->pessoa->telefone,
                'enc_grau_2'=>$aluno->encarregado[1]->grau_parentensco_enc,
                'tel_grau_2'=>$aluno->encarregado[1]->pessoa->telefone,
                'enc_grau_3'=>$aluno->encarregado[2]->grau_parentensco_enc,
                'tel_grau_3'=>$aluno->encarregado[2]->pessoa->telefone
            ];
        }
        return $Alunos;
    }

    public static function pegarReprovado($id)
    {
        $aluno = Aluno::with('candidato', 'anoturma')
            ->whereHas('candidato', function ($query) {
                $query->where('status', 'Matriculado');
            })
            ->where('aluno_id', $id)
            ->first();

            if($aluno->anoturma->first() == null)
            {
                $classeId = 1;
                $nome_turma = null;
            }
            else {
                $classeId = $aluno->anoturma->first()->turma->classe->classe_id;
                $nome_turma = $aluno->anoturma->first()->turma->nome_turma;
            }

            $alunoReprovado = [
                'aluno_id' => $aluno->aluno_id,
                'aluno_status' => $aluno->status,
                'curso' => $aluno->candidato->cursoAdmitido,
                'data_nasc' => $aluno->candidato->pessoa->data_nascimento,
                'nome' => $aluno->candidato->pessoa->nome_completo,
                'idCurso' => CursoController::pegarIdCurso($aluno->candidato->cursoAdmitido),
                'classeId' => $classeId,
                'nomeTurma' => $nome_turma
            ];

        return $alunoReprovado;
    }

    public static function pegarEncarregados($id)
    {
        $pessoas = Aluno::with('encarregado')
        ->where('aluno_id', $id)
        ->get();

        foreach ($pessoas as $pessoa) {
            foreach ($pessoa->encarregado as $encarregado) {
                $alunos[] = [
                    'pessoa_id' => $encarregado->pessoa->pessoa_id,
                ];
            }
        }
        return($alunos);
    }

    public static function alunoTurma($Aluno) // Função a ser chamada na reabertura do ano lectivo 11ª >
    {

        $aluno = Aluno::with('anoturma')
        ->whereHas('anoturma', function ($query) {
            $query->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo());
        })
        ->where('aluno_id', $Aluno)
        ->first();

        $ultimaPosicao = count($aluno->anoturma) - 1;
        $turmaAnoId = $aluno->anoturma[$ultimaPosicao]->turmaAno_id;

        return $turmaAnoId;
    }

    public static function matriculados()
    {
        $alunos = Aluno::with('anoturma')
        ->whereHas('anoturma', function ($query) {
            $query->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo());
        })
        ->get();
        if (!$alunos) {
            return 0;
        }
        if ($alunos->isEmpty()) {
            return 0;
        }

        foreach ($alunos as $aluno)
        {
            $curso = $aluno->curso_id;
            $cursoDados = CursoController::pegarCurso($aluno->curso_id);
            $sigla = $cursoDados->sigla;

            $chave = $curso;

            if (!isset($alun[$chave]))
            {
                $alun[$chave] = [
                        'sigla' => $sigla,
                        'alunos' => 0
                ];
            }

            $alun[$chave]['alunos']++;
        }
        return array_values($alun);
    }

    public static function situacaoAluno() // Função a ser chamada na reabertura do ano lectivo 11ª >
    {

            $alunos = AlunoController::alunosTurmaTotal();

            if (empty($alunos)) {
                return 0;
            }
            if(!$alunos)
            {
                return 0;
            }
            $alunosAdmitidos = [];
            $alunosNAdmitidos = [];
            $alunosRecurso = [];

            foreach( $alunos as $aluno )
            {
                if($aluno['situacao'] === "Transita")
                {
                    $alunosAdmitidos[] = $aluno;
                    continue;
                }
                if($aluno['situacao'] === "Não Transita" || $aluno['situacao'] === "RPF")
                {
                    $alunosNAdmitidos[] = $aluno;
                    continue;
                }
                if($aluno['situacao'] === "Recurso")
                {
                    $alunosRecurso[] = $aluno;
                    continue;
                }
            }

            $alunosStatus = [
                'Aprovados' => count($alunosAdmitidos),
                'Reprovados' => count($alunosNAdmitidos),
                'Recurso' => count($alunosRecurso),
            ];

            return $alunosStatus;
    }
//
}
