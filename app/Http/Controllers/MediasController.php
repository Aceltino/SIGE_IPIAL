<?php

namespace App\Http\Controllers;

use App\Models\{
    ClasseDisciplina,
    Classificacaofinal,Media,
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

        foreach ($tipoDisciplina as $value) {
            $tipoDisciplina[]=$value['tipo_disciplina'];
        }
        
        if ($tipoDisciplina=="TERMINAL") {
            $ca=0;
            $cfd= round($calMedia);
        }else {
            $cfd=0;
            $ca= round($calMedia);
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

        // dd($dadosClassificao);
        // $buscaClassificacao=Classificacaofinal::where('disciplina_id',$dadosClassificao['disciplina_id'])
        //                         ->where('ano_lectivo_id',$dadosClassificao['ano_lectivo_id'])
        //                         ->where('aluno_id',$dadosClassificao['aluno_id'])->get();

        // foreach($buscaClassificacao as $value){

        //     if ($value!=null) {
                
        //     }
        //      echo $value;
        //      echo "<hr>";
        // }                        
        // die;

        // Classificacaofinal::create($dadosClassificao);
        if(1==1){
            return true; 
        }
        return false;
    }   
    
    public static function showClassificaoFinal($disciplina_id,$aluno_id,$anoLectivo)
    {
        return Classificacaofinal::where('disciplina_id',$disciplina_id)
                                    ->where('ano_lectivo_id',$anoLectivo)
                                    ->where('aluno_id',$aluno_id)
                                    ->get();
                                    // ->toArray();
    }
    
} //Fim da classe "MediasController"
