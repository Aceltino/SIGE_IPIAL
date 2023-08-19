<?php

namespace App\Http\Controllers;

use App\Models\{
    ClasseDisciplina,
    Classificacaofinal,Media,
    ResultadoFinalAluno,
    Trimestre
};

use Illuminate\Http\Request;

class MediasController extends Controller
{   

    //Metodo que Busca Medias de todos os Trimestres Refente ao Ano, Aluno e Disciplina
    public static function getMediasDisciplina($disciplina_id,$aluno_id,$anoLectivo):mixed
    {
       return Media::where('disciplina_id',$disciplina_id)
                    ->where('aluno_id',$aluno_id)
                    ->where('ano_lectivo_id',$anoLectivo)
                    ->get();
    }

    //Metodo que Busca as Medias do 1º Trimestre Refente ao Ano, Aluno e Disciplina
    public static function getMediaOneTrimestre($disciplina_id,$aluno_id,$anoLectivo):mixed
    {
        $trimestre= Trimestre::where('ano_lectivo_id',$anoLectivo)->get();
        return Media::where('disciplina_id',$disciplina_id)
                    ->where('aluno_id',$aluno_id)
                    ->where('ano_lectivo_id',$anoLectivo)
                    ->where('trimestre_id',$trimestre[0]->trimestre_id)
                    ->get();
    }

    //Metodo que Busca as Medias do 2º Trimestre Refente ao Ano, Aluno e Disciplina
    public static function getMediaTwoTrimestre($disciplina_id,$aluno_id,$anoLectivo):mixed
    {
        $trimestre= Trimestre::where('ano_lectivo_id',$anoLectivo)->get();
        return Media::where('disciplina_id',$disciplina_id)
                    ->where('aluno_id',$aluno_id)
                    ->where('ano_lectivo_id',$anoLectivo)
                    ->where('trimestre_id',$trimestre[1]->trimestre_id)
                    ->get();                
    }

    //Metodo que Busca as Medias do 3º Trimestre Refente ao Ano, Aluno e Disciplina
    public static function getMediaThreeTrimestre($disciplina_id,$aluno_id,$anoLectivo):mixed
    {
        $trimestre= Trimestre::where('ano_lectivo_id',$anoLectivo)->get();
        return Media::where('disciplina_id',$disciplina_id)
                    ->where('aluno_id',$aluno_id)
                    ->where('ano_lectivo_id',$anoLectivo)
                    ->where('trimestre_id',$trimestre[2]->trimestre_id)
                    ->get();
    }

    //Metodo que Calcula e armazena no Banco de Dados a Classificação Anual do Aluno em uma determinada Disciplina e Ano lectivo
    public static function classificacaoAnual($disciplina_id,$aluno_id,$anoLectivo,$classe_id):bool
    {
        
        $mt1= []; // Inicializa a variável $mt1 como um array vazio
        $media_1= self::getMediaOneTrimestre($disciplina_id,$aluno_id,$anoLectivo);
        foreach ($media_1 as $value) {
            $mt1[] = !empty($value->nota) ? $value->nota : 0;
        }
        
        $mt2= []; // Inicializa a variável $mt2 como um array vazio
        $media_2 = self::getMediaTwoTrimestre($disciplina_id, $aluno_id, $anoLectivo);
        foreach ($media_2 as $value) {
            $mt2[] = !empty($value->nota) ? $value->nota : 0;
        }
        
        $mt3= []; // Inicializa a variável $mt3 como um array vazio
        $media_3 = self::getMediaThreeTrimestre($disciplina_id, $aluno_id, $anoLectivo);
        foreach ($media_3 as $value){
            $mt3[] = !empty($value->nota) ? $value->nota : 0;
        }
        $calMedia= ( array_sum($mt1) + array_sum($mt2) + array_sum($mt3) )/3 ;

    
        $tipoDisciplina= ClasseDisciplina::where("disciplina_id",$disciplina_id)->where("classe_id",$classe_id)->get()->toArray(); 
        $ca=0;
        $cfd=0;

        foreach ($tipoDisciplina as $value) {

            if ($value['tipo_disciplina']=="TERMINAL") {
                $ca=-1;
                $cfd= round($calMedia);
            }else {
                $cfd=-1;
                $ca= round($calMedia);
            }
        }
        
        $dadosClassificao=[
            'ca'=>$ca,
            'cfd'=>$cfd,
            'disciplina_id'=>$disciplina_id,
            'aluno_id'=>$aluno_id,
            'ano_lectivo_id'=>$anoLectivo,
        ];

        // Armazena a Classificação de cada Disciplina
        if(self::storeClassificao($dadosClassificao)){
            return true;
        }else {
            return false;
        }

    }

    //Metodo que Armazena a Classificação Final da Disciplina no Banco de Dados(Metodo Sensivel)
    private static function storeClassificao($dadosClassificao):bool
    {   
        $buscaClassificacao=Classificacaofinal::where('disciplina_id',$dadosClassificao['disciplina_id'])
                                                ->where('ano_lectivo_id',$dadosClassificao['ano_lectivo_id'])
                                                ->where('aluno_id',$dadosClassificao['aluno_id'])
                                                ->first();
                                              
        if($buscaClassificacao==null){
            if(Classificacaofinal::create($dadosClassificao)){
                return true; 
            }
            return false;
        }
        return false;
    }   
    
    //Metodo apresenta todos as classificações Finais da Disciplina  
    public static function showClassificaoFinal($disciplina_id,$aluno_id,$anoLectivo):mixed
    {
        return Classificacaofinal::where('disciplina_id',$disciplina_id)
                                    ->where('ano_lectivo_id',$anoLectivo)
                                    ->where('aluno_id',$aluno_id)
                                    ->get();
                                    // ->toArray();
    }

    public static function showResultadoAnualAluno($aluno_id,$anoLectivo){

        return ResultadoFinalAluno::where('ano_lectivo_id',$anoLectivo)
                                    ->where('aluno_id',$aluno_id)
                                    ->first();
    }

    //Metodo que apresenta o resultado final do aluno duante o ano lectivo
    public static function setResultadoAnualAluno($aluno_id,$anoLectivo,$disciplina_id,$classe_id)
    {

        /* 
            CONDIÇÕES DO RESULTADO FINAL DO ALUNO 
            10ª-11ª-12ª-13ª classe
 
        ->  # Triplo de números de Faltas não justificadas em relação a carga horaria = Reprova 
        ->  # +3 negativas(7 a 9)->Disciplina Continua(CA) = Reprova
        ->  # 1 negativa( < 7 )->Disciplina Continua(CA) = Reprova
        ->  # 1 negativa( < 9 )->Disciplina Terminal(CFD) = Recurso
            # O contrario de toda condição sitada acima o aluno= Aprova
        */

        $faltas= AssiduidadeAlunoController::assiduidadeAnual_2($aluno_id, $anoLectivo);
        
        $cargaHoraria= ClasseDisciplina::where('disciplina_id',$disciplina_id)
                                        ->where('classe_id',$classe_id)
                                        ->first();      

        $cadContinua= Classificacaofinal::where('ano_lectivo_id',$anoLectivo)
                                        ->where('aluno_id',$aluno_id)
                                        ->where('cfd',-1)
                                        ->get();
        
        $cadTerminal= Classificacaofinal::where('ano_lectivo_id',$anoLectivo)
                                        ->where('aluno_id',$aluno_id)
                                        ->where('ca',-1)
                                        ->get();

        
        // #Triplo de números de Faltas em relação a carga horaria = Reprova 

        // foreach ($cargaHoraria as $value) {
        //     $limFalta= $value->carga_horaria*3;
        // }
        
        // dd($cargaHoraria->carga_horaria*3);

        try {
            $limFalta=$cargaHoraria->carga_horaria*3;
        } catch (\Throwable $th) {
            $limFalta=0;
        }
         
        $allFaltas=[];
        foreach ($faltas as $value){
            foreach ($value as $valuee){
                $allFaltas[]=$valuee;
            }
        }  

        $numFaltasNJustificadas= (count($allFaltas));
 

        if($numFaltasNJustificadas >= $limFalta){
            
            // Verifica se já existe um registro para esse aluno e ano letivo
            $resultadoFinalAluno = ResultadoFinalAluno::where('ano_lectivo_id', $anoLectivo)
                                                        ->where('aluno_id', $aluno_id)
                                                        ->first();

            if($resultadoFinalAluno) {
                goto conti;
            }else {
                // Cria o resultado do aluno com a situação 'Ñ/Transita' e todas as disciplinas deficientes
                ResultadoFinalAluno::create([
                    'situacao' => 'Ñ/Transita',
                    'ano_lectivo_id' => $anoLectivo,
                    'aluno_id' => $aluno_id,
                ]);
            }
        }
        
        conti:
        
       
        // $totalDisciplina=count($cadContinua)+count($cadTerminal);
        // $mediaCadContinua= $cadContinua->sum('ca');
        // $mediaCadTerminal= $cadTerminal->sum('cfd');
        // $mediaAnual= round( ($mediaCadTerminal+$mediaCadTerminal)/$totalDisciplina );

        // Array para armazenar as disciplinas com notas menores que 7
        $disciplinaDef=[];
        $notasAprovadas=0; //Contador de numero de cadeiras com deficiencias 

        foreach($cadContinua as $value){

            if ($value->ca < 7) {
                // Adiciona a disciplina ao array de disciplinas deficientes
                $disciplinaDef[]=$value->disciplina_id;
                self::setResultadoAnualAlunoDB_Reprovado ($anoLectivo, $aluno_id, $disciplinaDef);
                return true;
            }
        
            if($value->ca >= 7 && $value->ca <= 9){
                // Adiciona a disciplina ao array de disciplinas deficientes
                $disciplinaDef[]=$value->disciplina_id;
                // Conta quantas notas ca >= 7 e <= 9
                $notasAprovadas++; //Incrementa o numero de disciplinas com notas ( >= 7 && <= 9 )
            }
            
        }
      
        if($notasAprovadas > 2) {
            self::setResultadoAnualAlunoDB_Reprovado ($anoLectivo, $aluno_id, $disciplinaDef);
            return true;
        }
        
        // # 1 or +1 negativa( < 9 )->Disciplina Terminal(CFD) = Recurso
        foreach ($cadTerminal as $value) {
            if($value->cfd < 9){
                $disciplinaDef[]=$value->disciplina_id."<br>";
                self::setResultadoAnualAlunoDB_Exame($anoLectivo, $aluno_id, $disciplinaDef);
                return true;
            }
        }

         # O contrario de toda condição sitada acima o aluno= Aprova
        self::setResultadoAnualAlunoDB_Transita($anoLectivo, $aluno_id);
        return true;
    } 

    // Metoddo para Cadastro por reprovação por Nota -> # 1 negativa( < 7 )->Disciplina Continua(CA) = Reprova
    private static function setResultadoAnualAlunoDB_Reprovado ($anoLectivo, $aluno_id, $disciplinaDef){

        // Verifica se já existe um registro para esse aluno e ano letivo
        $resultadoFinalAluno= ResultadoFinalAluno::where('ano_lectivo_id', $anoLectivo)
                                                  ->where('aluno_id', $aluno_id)
                                                  ->first();
        if ($resultadoFinalAluno) {
            return false;
        }
    
        // Cria o resultado do aluno com a situação 'Ñ/Transita' e todas as disciplinas deficientes
        ResultadoFinalAluno::create([
            'situacao' => 'Ñ/Transita',
            'ano_lectivo_id' => $anoLectivo,
            'aluno_id' => $aluno_id,
            'id_cadeiras_def' => json_encode($disciplinaDef),
        ]);
    }   

    // Metodo para Cadastro por Recurso Exame por Nota -> # 1 negativa( < 9 )->Disciplina Terminal(CFD) = Recurso
    private static function setResultadoAnualAlunoDB_Exame($anoLectivo, $aluno_id, $disciplinaDef){

        // Verifica se já existe um registro para esse aluno e ano letivo
        $resultadoFinalAluno= ResultadoFinalAluno::where('ano_lectivo_id', $anoLectivo)
                                                  ->where('aluno_id', $aluno_id)
                                                  ->first();
        if($resultadoFinalAluno){
            return false;
        }
        // Cria o resultado do aluno com a situação 'Ñ/Transita' e todas as disciplinas deficientes
        ResultadoFinalAluno::create([
            'situacao' => 'Exame',
            'ano_lectivo_id' => $anoLectivo,
            'aluno_id' => $aluno_id,
            'id_cadeiras_def' => json_encode($disciplinaDef),
        ]);
        return true;
    } 
    
    // Metodo que cadastr Transita pela nota e ano lectivo do aluno
    private static function setResultadoAnualAlunoDB_Transita($anoLectivo, $aluno_id):bool
    {
        // Verifica se já existe um registro para esse aluno e ano letivo
        $resultadoFinalAluno= ResultadoFinalAluno::where('ano_lectivo_id', $anoLectivo)
                                                  ->where('aluno_id', $aluno_id)
                                                  ->first();
        if ($resultadoFinalAluno) {
            return false;
        }
        // Cria o resultado do aluno com a situação 'Ñ/Transita' e todas as disciplinas deficientes
        ResultadoFinalAluno::create([
            'situacao' => 'Transita',
            'ano_lectivo_id' => $anoLectivo,
            'aluno_id' => $aluno_id,
        ]);
        return true;
    }   
    

}//Fim da classe "MediasController"