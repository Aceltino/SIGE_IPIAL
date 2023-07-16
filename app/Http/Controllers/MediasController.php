<?php

namespace App\Http\Controllers;

use App\Models\Ano_lectivo;
use App\Models\Media;
use App\Models\Trimestre;
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


    //Metodo retorna a Classificação Anual do Aluno em uma determinada Disciplina e Ano lectivo
    public static function classificacaoAnual($disciplina_id,$aluno_id,$anoLectivo)
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
        foreach ($media_3 as $value) {
            $mt3[] = !empty($value->nota) ? $value->nota : 0;
        }
        
        return $mediaTotal = ( array_sum($mt1) + array_sum($mt2) + array_sum($mt3) )/3 ;
        // echo round($mediaTotal);
        
    }

} //Fim da classe "MediasController"
