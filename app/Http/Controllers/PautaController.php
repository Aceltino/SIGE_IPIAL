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

    public static function show($id):mixed
    {
      
        $disciplina_1= "Língua Portuguesa";
        $disciplina_2= "Matematica";

    

        $anoTurmaCoord = AnoTurmaCood::where('turma_id', $id)->first();
        $turmaAluno = Aluno_turma::where('ano_coord_id', $anoTurmaCoord->turmaAno_id)->get();
        $dadosAssinantes=self::entidadesAssinantes();
        $alunos = Aluno::find($turmaAluno);

        foreach ($alunos as $aluno) {
            $notas[]= self::getNotaDisciplina($disciplina_1,$aluno->aluno_id);  
        }
        
        if (!$anoTurmaCoord || !$turmaAluno || !$alunos){
            return redirect()->back()->with('msg_sem_pauta',"Lamentamos! Esta pauta ainda não esta composta... Aguarde o lançamento das notas");
        }
        $dadosPauta= [
            'alunos' => $alunos, 
            'anoTurmaCoord' => $anoTurmaCoord, 
            'notas'=>$notas,
            'dadosAssinantes'=>$dadosAssinantes,
            'disciplinas'=>$disciplina_1,
        ];
        
        // dd($dadosPauta['notas']);


        return view('pauta.pauta-doc', $dadosPauta);
    }

    //Metodo que retorna todos os usuario que devem assinar a Pauta
    private static function entidadesAssinantes():mixed
    {
        $director = User::where('cargo_usuario', 'Director')->where('status_usuario',1)->first();
        $subdirector = User::where('cargo_usuario', 'Subdirector')->where('status_usuario',1)->first();
        $coordenadorArea= User::where('cargo_usuario', 'coordenacao')->where('status_usuario',1)->first();
  
        return[
            'director'=>$director,
            'subdirector'=>$subdirector,
            'coordenadorArea'=>$coordenadorArea,
            'directorTurma'=>"",
        ];
    } 


}
