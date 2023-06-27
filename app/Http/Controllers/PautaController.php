<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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

        $anoTurmaCoord= AnoTurmaCood::where('turma_id',$id)->firstOrFail();
        $turmaAluno= Aluno_turma::where('ano_coord_id',$anoTurmaCoord->turmaAno_id)->get();
        $director= User::where('cargo_usuario','Director')->firstOrFail();
        $alunos= Aluno::find($turmaAluno);
        // foreach ($turmaAluno as $key => $value) {
        //     $alunos= Aluno::find($value);
        //     echo $alunos;
        //     echo "<hr>";
        // }

        // die;
    
        return view('pauta.pauta-doc',['alunos'=>$alunos,'anoTurmaCoord'=>$anoTurmaCoord,'director'=>$director] );
    }
    
}
