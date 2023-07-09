<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidato;
use App\Models\Curso;
use App\Models\Aluno;

class ProcessoController extends Controller
{
    public function index()
    {
        $candidatos = $this->buscarCandidato();
        return view('processo.processos', ['candidatos'=>$candidatos ]) ;
    } 
    public function buscarCandidato()
    {
        $candidatos = Candidato::with('pessoa', 'escola')
        ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
        ->where(function ($query) {
            $query->where('status', 'admitido')
                  ->orWhere('status', 'matriculado');
        })->get();

        $dadosCandidatos = [];

        foreach ($candidatos as $candidato)
        {
            $dadosCandidatos[] =
            [
                'Nome' => $candidato->pessoa->nome_completo,
                'num_bi' => $candidato->pessoa->num_bi,
                'Processo' => $candidato->escola->num_processo,
                'Turno' => $candidato->escola->turno,
                'Turma' => $candidato->escola->turma_aluno,
                'Curso' => $candidato->cursoAdmitido,
            ];
        }
            return $candidatos;
    }
    public function destroy($candidato_id)
    {
        Candidato::where('candidato_id',$candidato_id)->delete();
        return redirect()->route('processo.consultar');

    }
    public function buscarAluno()
    {
        $alunos = Aluno::with('candidato','curso','anoturma')->get();

        $dadosAluno = [];
       foreach($alunos as $aluno)
        {
            if (!empty($aluno->ano_turma_coord)){
                foreach($aluno->ano_turma_coord as $anoTurma){

                    $dadosAluno = [
                        'Nome' => $aluno->candidato->pessoa->nome_completo,
                        'Processo' => $aluno->aluno_id,
                        'turma' => $anoTurma->turmas->nome_turma,
                        'turno' => $aluno->candidato->escola->turno,
                        'Nome do Pai' =>$aluno->candidato->nome_pai_cand,
                        'Nome da mãe' =>$aluno->candidato->nome_mae_cand,
                        'Data de nascimento' =>$aluno->candidato->pessoa->data_nascimento,
                        'Municipio' => $aluno->candidato->pessoa->endereco->municipio,
                        'BI' => $aluno->candidato->pessoa->num_bi,
                        'curso' => $aluno->candidato->cursoAdmitido,
                    ];
                }
                
            }
            
        }
        return $alunos;
    }
}
