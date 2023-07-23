<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Candidato;
use App\Traits\PessoaTrait;
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
        ->where(function ($query) {
            $query->where('status', 'admitido')
                ->orWhere('status', 'matriculado');
        })->get();

        $candAdmitidos = count($candidatos);

        return $candAdmitidos;
    }

    public static function pegarPendentes()
    {
        $candidatos = Candidato::with('pessoa', 'escola')
        ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
        ->where(function ($query) {
            $query->where('status', 'Pendente');
        })->get();

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

    public static function eliminarAdmitidos() //Função chamada na atribuição da turma - MatriculaController
    {
        $candidatos = Candidato::where('status', 'Admitido')->get();

        foreach ($candidatos as $candidato)
        {
            PessoaTrait::deletePessoa($candidato->pessoa_id);
        }

    }

    public static function eliminarCandidatos() //Função chamada no final do ano lectivo
    {
        $candidatos = Candidato::where('status', 'Admitido')
        ->where('status', 'Pendente')
        ->where('status', 'Não admitido')
        ->get();
        foreach ($candidatos as $candidato)
        {
            PessoaTrait::deletePessoa($candidato->pessoa_id);
        }
    }

    //FUNÇÂO USADA PARA API, TESTEM => "http://127.0.0.1:8000/api/candidatos"
    public static function pegarDadosCandidatos()
    {
        $dataAtual = Carbon::now();

        $candidatos = Candidato::with( 'pessoa', 'escola', 'ano_lectivo')
        ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
        ->where(function ($query) {
            $query->where('status', 'não admitido')
                ->orWhere('status', 'Pendente')
                ->orWhere('status', 'admitido');
        })->get();

        // if(!$candidatos) {
        //     return 'Sem candidatos inscritos';
        // }


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
            $cursoCandidato = CandidatoCursoController::cursoEscolhido($candidato->candidato_id);
        }
// dd($candidato[0]);
        if( !isset($candidato) )
        {
            return 'Sem candidatos inscritos';
        }
// dd($candidatos);
        $cursoEscolhido = [];
        if($cursoCandidato)
        {
            usort($cursoCandidato, function ($a, $b)
            {
                return $a['prefCurso'] - $b['prefCurso'];
            });
        }
        foreach($cursoCandidato as $curso)
        {
            $cursoEscolhido[] = $curso['nomeCurso'];
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
                'Turma' => $candidato->escola->turma_aluno,
                'Numero_Processo' => $candidato->escola->num_processo,
                'Numero_Aluno' => $candidato->escola->num_aluno,
                'Ultimo_AnoLectivo' => $candidato->escola->ultimo_anoLectivo,
                'Media' => $candidato->media,

                'Curso' => $candidato->cursoAdmitido,
                'cursosEscolhidos' => $cursoEscolhido,

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
                'Curso' => $candidato->cursoAdmitido,

                'Pai' => $candidato->nome_pai_cand,
                'Mae' => $candidato->nome_mae_cand,
                'Naturalidade' => $candidato->naturalidade_cand,
            ];
        return $dadosCandidatos;
    }

    public static function updateCandidato($dadosCandidato)
    {
        $candidato = Candidato::find($dadosCandidato['candidato_id']);
        foreach ($dadosCandidato as $campo => $valor)
        {
            $candidato->$campo = $valor;
        }
        $candidatoAtualizado = $candidato->save();

        return $candidatoAtualizado;
    }

    public static function atualizarMatriculado($candidatoStatus) //Atualizar status
    {
        // Atualizar os dados
        $candidato = Candidato::find($candidatoStatus['id']);
        $candidato->status = "Matriculado";
        $candidato->save();
    }

    public static function Admitidos() //Detalhes
    {
        $candidatos = Candidato::where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
        ->where('status', 'Admitido')
        ->get();

        if (!$candidatos) {
            return 0;
        }
        if ($candidatos->isEmpty()) {
            return 0;
        }

        foreach ($candidatos as &$candidato)
        {
            $candidato['cursoAdmitido'] = CandidatoCursoController::cursoEscolhidoPreferencia($candidato->candidato_id);
        }

        foreach ($candidatos as $candidato)
        {
            $curso = $candidato->cursoAdmitido['idCurso'];
            $sigla = $candidato->cursoAdmitido['siglaCurso'];

            $chave = $curso;

            if (!isset($cand[$chave]))
            {
                $cand[$chave] = [
                        'sigla' => $sigla,
                        'candidatos' => 0
                ];
            }

            $cand[$chave]['candidatos']++;
        }
        return array_values($cand);
    }

    public static function NAdmitidos() //Detalhes
    {
        $candidatos = Candidato::where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
        ->where('status', 'Não admitido')
        ->get();

        if (!$candidatos) {
            return 0;
        }
        if ($candidatos->isEmpty()) {
            return 0;
        }

        foreach ($candidatos as &$candidato)
        {
            $candidato['cursoAdmitido'] = CandidatoCursoController::cursoEscolhidoPreferencia($candidato->candidato_id);
        }

        foreach ($candidatos as $candidato)
        {
            $curso = $candidato->cursoAdmitido['idCurso'];
            $sigla = $candidato->cursoAdmitido['siglaCurso'];

            $chave = $curso;

            if (!isset($cand[$chave]))
            {
                $cand[$chave] = [
                        'sigla' => $sigla,
                        'candidatos' => 0
                ];
            }

            $cand[$chave]['candidatos']++;
        }
        return array_values($cand);
    }

    public static function Inscritos() //Detalhes
    {
        $candidatos = Candidato::where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
        ->get();
        if (!$candidatos) {
            return 0;
        }
        if ($candidatos->isEmpty()) {
            return 0;
        }

        foreach ($candidatos as $candidato)
        {
            $candidato['cursoAdmitido'] = CandidatoCursoController::cursoEscolhidoPreferencia($candidato->candidato_id);

            $curso = $candidato->cursoAdmitido['idCurso'];
            $sigla = $candidato->cursoAdmitido['siglaCurso'];

            $chave = $curso;

            if (!isset($cand[$chave]))
            {
                $cand[$chave] = [
                        'sigla' => $sigla,
                        'candidatos' => 0
                ];
            }

            $cand[$chave]['candidatos']++;
        }

        return array_values($cand);
    }

}
