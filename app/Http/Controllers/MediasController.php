<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediasController extends Controller
{   



    //Metodo para trazer as medias do aluno em um determinado Ano-lectivo e Trimestre
    public static function getMedias($disciplina_id,$aluno_id,$anoLectivo){

       return $media= Media::where('disciplina_id',$disciplina_id)
                            ->where('aluno_id',$aluno_id)
                            ->where('ano_lectivo_id',$anoLectivo)
                            ->get();

    }


}
