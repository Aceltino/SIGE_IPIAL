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
        $alunos = $this->buscarAluno();
        return view('processo.processos', ['alunos'=>$alunos ]) ;
    } 
    public function destroy($aluno_id)
    {
        Aluno::where('aluno_id',$aluno_id)->delete();
        return redirect()->route('processo.consultar');

    }
    public function buscarAluno()
    {
        $alunos = Aluno::with('candidato','curso','anoturma')->get();
        $dadosAluno = [];
       foreach($alunos as $aluno)
        {
            if (!empty($aluno->anoturma)){
                foreach($aluno->anoturma as $anoTurma)
                {
                    $dadosAluno = [
                        'Nome' => $aluno->candidato->pessoa->nome_completo,
                        'Processo' => $aluno->aluno_id,
                        'turma' => $anoTurma->turma->nome_turma,
                        'turno' => $aluno->candidato->escola->turno,
                        'Nome do Pai' =>$aluno->candidato->nome_pai_cand,
                        'Nome da mãe' =>$aluno->candidato->nome_mae_cand,
                        'Data de nascimento' =>$aluno->candidato->pessoa->data_nascimento,
                        'BI' => $aluno->candidato->pessoa->num_bi,
                        'curso' => $aluno->candidato->cursoAdmitido,
                    ];
                }
                
            }
            
        }
        return $alunos;
    }
}
