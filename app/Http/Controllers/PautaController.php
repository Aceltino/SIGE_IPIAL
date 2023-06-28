<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\{
    Aluno_turma,Aluno,User,
    AnoTurmaCood,Ano_lectivo,Turma
};

class PautaController extends Controller
{
 
    public function index()
    {
        $anoTurmaCoord = $this->buscarAnoTurmaCoord();
        return view('pauta.pautas', ['anoTurmaCoord' => $anoTurmaCoord]);
    }

    private function buscarAnoTurmaCoord()
    {
        $anoTurmaCoord = AnoTurmaCood::all()->toArray();

        foreach ($anoTurmaCoord as &$item) {
            $turma = Turma::find($item['turma_id']);
            $anoLectivo = Ano_lectivo::find($item['ano_lectivo_id']);

            $item['turma'] = $turma;
            // $item['professor'] = $professor;
            $item['anoLectivo'] = $anoLectivo;
        }
        return $anoTurmaCoord;
    }

    public function show($id, $anoLectivo)
    {
        $anoTurmaCoord = AnoTurmaCood::where('turma_id', $id)->first();
        $turmaAluno = Aluno_turma::where('ano_coord_id', $anoTurmaCoord->turmaAno_id)->get();
        $director = User::where('cargo_usuario', 'Director')->first();
        $alunos = Aluno::find($turmaAluno);

        // dd($turmaAluno);

        switch ($director) {
            case false || null:
                return redirect()->back()->with('msg_sem_director',"Lamentamos! Esta pauta não pode ser gerada sem conter um director no sistema");

            default:
                goto conti;
        }

        conti:
        if (!$anoTurmaCoord || !$turmaAluno || !$alunos){
            return redirect()->back()->with('msg_sem_pauta',"Lamentamos! Esta pauta ainda não esta composta... Aguarde o lançamento das notas");
        }

      

        return view('pauta.pauta-doc', ['alunos' => $alunos, 'anoTurmaCoord' => $anoTurmaCoord, 'director' => $director]);
    }

    
    
}
