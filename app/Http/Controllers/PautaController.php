<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\{
    Aluno_turma,Aluno,User,Nota,
    AnoTurmaCood,Ano_lectivo, Disciplina, Turma,
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
            $item['anoLectivo'] = $anoLectivo;
        }
        return $anoTurmaCoord;
    }

    public static function getNotasTurmas($alunos):mixed
    {
        return Nota::where('aluno_id',$alunos)->get();
    }

    public static function getNotaDisciplina($nomeDisicplina,$alunos):mixed
    {
        $idDiscipliana=Disciplina::where('nome_disciplina',$nomeDisicplina)->first();
        return Nota::where('disciplina_id',$idDiscipliana->disciplina_id)
                    ->where('aluno_id',$alunos)
                    ->get();
    } 

    public static function show($id)
    {
      
        $disciplina_1= "Língua Portuguesa";
        $disciplina_2= "Matematica";

        $anoTurmaCoord = AnoTurmaCood::where('turma_id', $id)->first();
        $turmaAluno = Aluno_turma::where('ano_coord_id', $anoTurmaCoord->turmaAno_id)->get();
        $director = User::where('cargo_usuario', 'Director')->first();
        $alunos = Aluno::find($turmaAluno);

        foreach ($alunos as $aluno) {
   
            $notas= self::getNotaDisciplina($disciplina_2,$aluno->aluno_id);
            // foreach ($notas as $value) {
                
            //     $nome_disciplina= $value->disciplina->nome_disciplina;
            //     $nota_diciplina=$value->nota_aluno;
            //     $tipo_prova= $value->tipo_prova;
            //     $nome_aluno=$value->aluno->candidato->pessoa->nome_completo;
    
            // }
           
        }
    
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
        $dadosPauta= [
            'alunos' => $alunos, 
            'anoTurmaCoord' => $anoTurmaCoord, 
            'director' => $director,
            'notas'=>$notas,
        ];
        return view('pauta.pauta-doc', $dadosPauta);
    }
  
}
