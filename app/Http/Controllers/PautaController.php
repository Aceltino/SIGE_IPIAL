<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\{
    Aluno_turma,Aluno,User,Nota,
    AnoTurmaCood,Ano_lectivo,Disciplina,Turma,
};
use Symfony\Component\VarDumper\VarDumper;

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

    public static function show($id,$anoLectivo):mixed
    {
    
        $turma= Turma::find($id); //Busca na turma

        $anoTurmaCoord = AnoTurmaCood::where('turma_id', $turma->turma_id)->first();
        $turmaAluno = Aluno_turma::where('turmaAno_id', $anoTurmaCoord->turmaAno_id)->get();

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

        //Busca todas as diciplinas que existem em uma determinada turma
        foreach($disciplinasAll as $value){

            $disciplinas[]=$value;//As Disciplinas

            //As medias com base ao numero de alunos
            foreach($alunos as $aluno){
             
                $medias[]= MediasController::getMedias($value->disciplina_id,$aluno->aluno_id, $anoLectivo); 
            } 

        }   
        // die;

         //Condição para Pauta ser Gerada
         if ( (count($turmaAluno) <= 0) && (empty($notas)) ){
            return redirect()->back()->with('msg_sem_pauta',"Lamentamos! Esta pauta ainda não esta composta... Aguarde o lançamento das notas");
        }

<<<<<<< HEAD
=======
        foreach ($medias as $valueMedias) { 
           $mediasNotas[]=$valueMedias;
        }
       
        //Este Siclo entrega as todas as notas do aluno com base a disciplina
        foreach ($alunos as $aluno) {
            $notas[]= self::getNotaDisciplinaAluno($disciplinas[0]["nome_disciplina"],$aluno->aluno_id);  
        }

        
>>>>>>> parent of 88b7b46a (Merge pull request #215 from Carlos-Marques50/main)
        //Dados completos que vão para compor a pauta. 
        $dadosPauta= [
            'alunos' => $alunos, 
            'anoTurmaCoord' => $anoTurmaCoord, 
<<<<<<< HEAD
            // 'notas'=>$notas,
            'dadosAssinantes'=>$dadosAssinantes,
            'disciplinas'=>$disciplinas,
            'turma'=>$turma,    
            // 'medias'=>$mediasNotas,
=======
            'notas'=>$notas,
            'dadosAssinantes'=>$dadosAssinantes,
            'disciplinas'=>$disciplinas,
            'turma'=>$turma,    
            'medias'=>$mediasNotas,
>>>>>>> parent of 88b7b46a (Merge pull request #215 from Carlos-Marques50/main)
            'colspanDisciplina'=>(count($disciplinas)*6),

        ];  


        foreach ($medias as $key => $value) {
            echo $value->aluno->candidato->pessoa->nome_completo;
            echo "<hr>";
        }
        

        die;
        //Condições da apresentação da Pauta com base a class
        switch ($turma->classe_id){
            case 1:
                return view('pauta.pauta-10-doc',compact('dadosPauta') );
            case 2:
                return view('pauta.pauta-11-doc', compact('dadosPauta'));
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
