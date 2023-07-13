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

} //Fim da classe "MediasController"
