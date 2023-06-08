<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidato;
use Carbon\Carbon;

class CandidatoController extends Controller
{
    public static function store($dadosCandidato)
    {
        return Candidato::create($dadosCandidato);
    }

    public static function pegarCandidatos()  //Candidatos para o processo de admissão
    {
        $candidatos = Candidato::with('pessoa', 'escola')
        ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
        ->where(function ($query) {
            $query->where('status', 'não admitido')
                ->orWhere('status', 'pendente');
        })->get();

        $dadosCandidatos = [];

        foreach ($candidatos as $candidato)
        {
            $dadosCandidatos[] =
            [
                'Nome' => $candidato->pessoa->nome_completo,
                'Data_Nascimento' => $candidato->pessoa->data_nascimento,
                'Matematica' => $candidato->escola->matematica,
                'Lingua_Portuguesa' => $candidato->escola->ling_port,
                'Fisica' => $candidato->escola->fisica,
                'Quimica' => $candidato->escola->quimica,
                'id' => $candidato->candidato_id,
            ];
        }

        return $dadosCandidatos;
    }

    public static function pegarAdmitidos()
    {
        $candidatos = Candidato::with('pessoa', 'escola')
        ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
        ->where('status', 'Admitido')
        ->get();

        $candAdmitidos = count($candidatos);

        return $candAdmitidos;
    }

    public static function atualizarStatus($candidatoStatus) //Atualizar status
    {
        // Atualizar os dados do candidato
        $candidato = Candidato::find($candidatoStatus['id']);
        $candidato->status = "Admitido";
        $candidato->cursoAdmitido = $candidatoStatus['cursoEscolhido'];


        $candidato->save();

        $candidatos = Candidato::where('status', 'pendente')->get();

        foreach ($candidatos as $candidato)
        {
            $candidato->status = 'não admitido';
            $candidato->save();
        }
    }

    //FUNÇÂO USADA PARA API, TESTEM => "http://127.0.0.1:8000/api/candidatos"
    public static function pegarDadosCandidatos()
    {
        $dataAtual = Carbon::now();

        $candidatos = Candidato::with( 'pessoa', 'escola', 'ano_lectivo')
        ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
        ->get();

        foreach ($candidatos as &$candidato)
        {
            $dataNascimento = Carbon::parse($candidato->pessoa->data_nascimento);
            $idade = $dataAtual->diffInYears($dataNascimento);
            $candidato['idade'] = $idade;
        }

        foreach ($candidatos as &$candidato)
        {
            $media = ($candidato->escola->fisica
            + $candidato->escola->matematica
            + $candidato->escola->quimica
            + $candidato->escola->ling_port) / 4;
            $candidato['media'] = $media;
        }

        $dadosCandidatos = [];
        foreach ($candidatos as $candidato)
        {
            $dadosCandidatos[] =
            [
                'Nome' => $candidato->pessoa->nome_completo,
                'Data_Nascimento' => $candidato->pessoa->data_nascimento,
                'NumeroBI' => $candidato->pessoa->num_bi,
                'Genero' => $candidato->pessoa->genero,
                'Idade' => $candidato->idade,
                'Telefone' => $candidato->pessoa->telefone,

                'Matematica' => $candidato->escola->matematica,
                'Lingua_Portuguesa' => $candidato->escola->ling_port,
                'Fisica' => $candidato->escola->fisica,
                'Quimica' => $candidato->escola->quimica,
                'Escola' => $candidato->escola->nome_escola,
                'Turno' => $candidato->escola->turno,
                'Numero_Processo' => $candidato->escola->num_processo,
                'Numero_Aluno' => $candidato->escola->num_aluno,
                'Ultimo_AnoLectivo' => $candidato->escola->ultimo_anoLectivo,
                'Media' => $candidato->media,

                'Curso' => $candidato->cursoAdmitido,
                'Pai' => $candidato->nome_pai_cand,
                'Mae' => $candidato->nome_mae_cand,
                'Naturalidade' => $candidato->naturalidade_cand,
                'Situacao' => $candidato->status,
                'Id_inscricao' => $candidato->candidato_id,
                'Data_inscricao' => $candidato->created_at
            ];
        }
        return $dadosCandidatos;
    }

    public static function pegarDadosCandidato($id)
    {
        $dataAtual = Carbon::now();

        $cursoCandidato = CandidatoCursoController::cursoEscolhido($id);

                usort($cursoCandidato, function ($a, $b)
                {
                    return $a['prefCurso'] - $b['prefCurso'];
                });
                // dd($cursoCandidato);
                $candidato = Candidato::with('pessoa', 'escola')->findOrFail($id);

                $cursoEscolhido = [];

                $dataNascimento = Carbon::parse($candidato->pessoa->data_nascimento);
                $idade = $dataAtual->diffInYears($dataNascimento);
                $candidato['idade'] = $idade;

                foreach($cursoCandidato as $curso)
                {
                    $cursoEscolhido[] = $curso['nomeCurso'];
                }

            $dadosCandidatos[] =
            [
                'Nome' => $candidato->pessoa->nome_completo,
                'Data_Nascimento' => $candidato->pessoa->data_nascimento,
                'NumeroBI' => $candidato->pessoa->num_bi,
                'Genero' => $candidato->pessoa->genero,
                'Idade' => $candidato->idade,
                'Telefone' => $candidato->pessoa->telefone,

                'Matematica' => $candidato->escola->matematica,
                'Lingua_Portuguesa' => $candidato->escola->ling_port,
                'Fisica' => $candidato->escola->fisica,
                'Quimica' => $candidato->escola->quimica,
                'Escola' => $candidato->escola->nome_escola,
                'Turno' => $candidato->escola->turno,
                'Turma' => $candidato->escola->turma_aluno,
                'Numero_Processo' => $candidato->escola->num_processo,
                'Numero_Aluno' => $candidato->escola->num_aluno,
                'Ultimo_AnoLectivo' => $candidato->escola->ultimo_anoLectivo,
                'Id_inscricao' => $candidato->candidato_id,
                'Cursos' => $cursoEscolhido,

                'Pai' => $candidato->nome_pai_cand,
                'Mae' => $candidato->nome_mae_cand,
                'Naturalidade' => $candidato->naturalidade_cand,
            ];
        return $dadosCandidatos;
    }

    public static function updateCandidato($dadosCandidato)
    {
        $candidato = Candidato::find($dadosCandidato['id']);

        $candidato->nome_pai_cand = $dadosCandidato['nome_pai_cand'];
        $candidato->nome_mae_cand = $dadosCandidato['nome_mae_cand'];
        $candidatoAtualizado = $candidato->save();

        return $candidatoAtualizado;
    }

}
