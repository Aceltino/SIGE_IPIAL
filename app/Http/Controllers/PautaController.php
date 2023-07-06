<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\{
    Aluno_turma,Aluno,User,Nota,
    AnoTurmaCood,Ano_lectivo,Disciplina,Turma,
};

class PautaController extends Controller
{   

    //Metodo que retorna Pagina de Views da Pauta
    public function index()
    {
        $anoTurmaCoord = $this->buscarAnoTurmaCoord();
        return view('pauta.pautas', ['anoTurmaCoord' => $anoTurmaCoord]);
    }

    //Metodo que retorna todos os dados da Tabela Ano Turma Coord
    private function buscarAnoTurmaCoord()
    {
        $anoTurmaCoord = AnoTurmaCood::all()->toArray();

        foreach ($anoTurmaCoord as &$item){
            $turma = Turma::find($item['turma_id']);
            $anoLectivo = Ano_lectivo::find($item['ano_lectivo_id']);

            $item['turma'] = $turma;
            $item['anoLectivo'] = $anoLectivo;
        }
        return $anoTurmaCoord;
    }

    //Metodo que retorna Notas de um determinado aluno
    public static function getNotaAluno($alunos):mixed
    {
        return Nota::where('aluno_id',$alunos)->get();
    }

    //Metodo que retorna Nota da Disciplina de um determinado Aluno
    public static function getNotaDisciplinaAluno($nomeDisicplina,$alunos):mixed
    {
        $idDiscipliana=Disciplina::where('nome_disciplina',$nomeDisicplina)->first();
        return Nota::where('disciplina_id',$idDiscipliana->disciplina_id)
                    ->where('aluno_id',$alunos)
                    ->get();
    } 

    public static function show($id):mixed
    {
    
        $turma= Turma::find($id);
        $anoTurmaCoord = AnoTurmaCood::where('turma_id', $id)->first();
        $turmaAluno = Aluno_turma::where('ano_coord_id', $anoTurmaCoord->turmaAno_id)->get();
        $dadosAssinantes=self::entidadesAssinantes();
        $alunos = Aluno::find($turmaAluno);

        $disciplinaGerais= Disciplina::where('componente','Cientificas')
                                        ->Orwhere('componente','Socio-culturais')
                                        ->get();

        $disciplinaEspecificas= Disciplina::where('componente','Técnicas')
                                            ->where('curso_id',$turma->curso->curso_id)
                                            ->get();

        //Combinei as duas coleções de disciplinas(Tecnicas e Gerais) em uma única variável            
        $disciplinasAll= $disciplinaGerais->concat($disciplinaEspecificas)->all();
        foreach ($disciplinasAll as $key => $value) {
           $disciplinas[]=$value;
            //echo"<hr>";
        } 
      
        // dd($disciplinas);
        $disciplina_1= "Língua Portuguesa";

        foreach ($alunos as $aluno) {
            $notas[]= self::getNotaDisciplinaAluno($disciplinas,$aluno->aluno_id);  
        }
        
        if (!$anoTurmaCoord || !$turmaAluno || !$alunos){
            return redirect()->back()->with('msg_sem_pauta',"Lamentamos! Esta pauta ainda não esta composta... Aguarde o lançamento das notas");
        }
        $dadosPauta= [
            'alunos' => $alunos, 
            'anoTurmaCoord' => $anoTurmaCoord, 
            'notas'=>$notas,
            'dadosAssinantes'=>$dadosAssinantes,
            'disciplinas'=>$disciplinas,
            'turma'=>$turma,
            'colspanDisciplina'=>(count($disciplinas)*6),

        ];
       
        switch ($turma->classe_id){
            case 1:
                return view('pauta.pauta-10-doc', $dadosPauta);
            case 2:
                return view('pauta.pauta-11-doc', $dadosPauta);
            case 3:
                return view('pauta.pauta-12-doc', $dadosPauta);
            case 4:
                return view('pauta.pauta-13-doc', $dadosPauta);
            default:
                return redirect()->back()->with('erro_anormal',"Lamentamos, Detectamos um comportamento anormal e grave no sistema...");
        }

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
            'directorTurma'=>" ",
        ];
    } 

    //Metodo que Busca as disciplinas da Turma

}
