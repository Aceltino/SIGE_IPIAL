<?php

namespace App\Traits;

use App\Http\Controllers\AlunoController;
use App\Models\Ano_lectivo;
use App\Models\Trimestre;
use DateTime;


trait AnoLectivoTrait
{
    public static function validateDesignacao($designacao){
        $desig = Ano_lectivo::where('ano_lectivo', $designacao)->get();
        if(count($desig) > 0){
            return false;
        } else{
            return true;
        }
    }
    public static function validateInicioAnoLectivo($anoLectivo){
        $ultimoAno = Ano_lectivo::latest()->first();
        if($ultimoAno != null){
            $totime1 = strtotime($anoLectivo);
            $totime2 = strtotime($ultimoAno->data_fim_ano_lectivo);
            if($totime1 > $totime2){
                return true;
             } else{
                 return false;
             }
        } else{
            return true;
        }


    }

    public static function validateFimAnoLectivo($inicio, $fim){
        $ini = strtotime($inicio);
        $fn = strtotime($fim);
        if($fn > $ini){
            $ini = new DateTime($inicio);
            $fn = new DateTime($fim);
            $f = $ini->diff($fn);
            //dd($f);
            if(($f->m <= 11 && $f->y == 0) || ($f->y == 1 && $f->m == 0)){
                return true;
            } else{
                return 2;
            }
        } else{
            return false;
        }
    }

    public static function validateInicioInscricao($inicio, $anoLectivo){
        $ini = strtotime($inicio);
        $anoLec = strtotime($anoLectivo);
        if($ini > $anoLec){
            $ini = new DateTime($inicio);
            $anoLec = new DateTime($anoLectivo);
            $f = $anoLec->diff($ini);
            //dd($f);
            if($f->y == 0 && $f->m == 0 && $f->d > 0){
                return true;
            } else{
                return 2;
            }
        } else{
            return false;
        }

    }

    public static function validateFimInscricao($inicio, $fim){
        $ini = strtotime($inicio);
        $fn = strtotime($fim);
        if($fn > $ini){
            $ini = new DateTime($inicio);
            $fn = new DateTime($fim);
            $f = $ini->diff($fn);
            if($f->d > 0 && $f->d <= 15 && $f->y == 0){
                return true;
            } else{
                return 2;
            }
        } else{
            return false;
        }
    }

    public static function validateInicioMatricula($inicioMatricula, $fimInscricao){
        $ini = strtotime($inicioMatricula);
        $fn = strtotime($fimInscricao);
        if($ini > $fn){
            return true;
        } else{
            return false;
        }
    }

    public static function validateFimMatricula($inicio, $fim){
        $ini = strtotime($inicio);
        $fn = strtotime($fim);
        if($fn > $ini){
            $ini = new DateTime($inicio);
            $fn = new DateTime($fim);
            $f = $ini->diff($fn);
            if($f->d > 0 && $f->d <= 15 && $f->y < 1){
                return true;
            } else{
                return 2;
            }
        } else{
            return false;
        }
    }

    public static function validateInicioTrimestres($trimestre, $fimMatricula){
        $tri = strtotime($trimestre);
        $mat = strtotime($fimMatricula);
        if($tri > $mat){
            return true;
        } else{
            return false;
        }
    }

    public static function validateFimTrimestres($inicioTrimestre, $fimTrimestre){
        $iniTri = strtotime($inicioTrimestre);
        $fimTri = strtotime($fimTrimestre);
        if($fimTri > $iniTri){
            $ini = new DateTime($inicioTrimestre);
            $fn = new DateTime($fimTrimestre);
            $f = $ini->diff($fn);
            if($f->m >= 3 && $f->y == 0){
                return true;
            } else{
                return false;
            }
        } else{
            return false;
        }
    }

    public static function verifyHoraTarde($hora){
        $get = substr($hora, 0, 1) . substr($hora, 1, 1);
        switch ($get) {
            case '12':
            case '13':
            case '14':
            case '15':
            case '16':
            case '17':
                return true;
                break;

            default:
                return false;
                break;
        }
    }

    public static function abrirTrimestreAuto(){

        $anoLectivo = Ano_lectivo::with('trimestres')->latest()->where('status_ano_lectivo', 1)->get()->first();
        $data_corrente = strtotime(date('Y-m-d'));
        for ($i = 0; $i < count($anoLectivo->trimestres); $i++) {
            $inicio_trimestre = strtotime($anoLectivo->trimestres[$i]->data_inicio);
            $fim_trimestre = strtotime($anoLectivo->trimestres[$i]->data_fim);
            if($data_corrente >= $inicio_trimestre && $data_corrente < $fim_trimestre){
                Trimestre::find($anoLectivo->trimestres[$i]->trimestre_id)->update(['status' => 1]);
            }
        }
    }

    public static function fecharTrimestreAuto(){
        $trimestre = Trimestre::where('status', 1)->get()->first();
        if($trimestre){
            $data_corrente = strtotime(date('Y-m-d'));
            $fim_trimestre = strtotime($trimestre->data_fim);
            if ($data_corrente >= $fim_trimestre) {
                Trimestre::find($trimestre->trimestre_id)->update(['status' => 0]);
            }
        }
    }

    public static function abrirTrimestre($trimestre_id){
        $trimestre = Trimestre::find($trimestre_id);
        $trimestre->data_inicio = date('Y-m-d');
        $trimestre->status = 1;
        $trimestre->save();
        return true;
    }
    public static function validarAberturaTrimestre(){
        $trimestre = Trimestre::where('data_inicio', date('Y-m-d'))->get();
        if(count($trimestre) > 0){
            return false;
        } else{
            return true;
        }
    }
    public static function validarStatusTrimestre(){
        $trimestre = Trimestre::where('status', 1)->get();
        if(count($trimestre) > 0){
            return false;
        } else{
            return true;
        }
    }
    public static function validarProcessoAberturaTrimestre($trimestre_id){
        $trimestre = Trimestre::with('anoLectivo')->find($trimestre_id);
        if($trimestre->trimestre === "1º"){
            $data_corrente = strtotime(date('Y-m-d'));
            $fim_matricula = strtotime($trimestre->anoLectivo->data_fim_matricula);
            if ($data_corrente <= $fim_matricula) {
                return false;
            } else{
                return true;
            }
        } elseif($trimestre->trimestre === "2º"){
            $tri = Trimestre::latest()->where('trimestre', "1º")->get()->first();
            if ($tri->data_fim === null) {
                return false;
            } else{
                return true;
            }
        } elseif($trimestre->trimestre === "3º"){
            $tri = Trimestre::latest()->where('trimestre', "2º")->get()->first();
            if ($tri->data_fim === null) {
                return false;
            } else{
                return true;
            }
        }
    }
    public static function fecharTrimestre($trimestre_id){
        $trimestre = Trimestre::find($trimestre_id);
        if(!$trimestre){
            return false;
        }
        AvaliacaoTrait::atribuirNotaFimTrimestre();
        $trimestre->data_fim = date('Y-m-d');
        $trimestre->status = 0;
        $trimestre->save();
        return true;
    }
    public static function validarFechamentoTrimestre(){
        $trimestre = Trimestre::where('data_fim', date('Y-m-d'))->get();
        if(count($trimestre) > 0){
            return false;
        } else{
            return true;
        }
    }

    public static function verificarStatusAnoLectivo($ano_lectivo_id){
        $ano_lectivo = Ano_lectivo::find($ano_lectivo_id);
        if($ano_lectivo->status_ano_lectivo === 0){
            return false;
        } else{
            return true;
        }
    }

    public static function verificarTrimestresAnoLectivo($ano_lectivo_id){
        $trimestre = Trimestre::where('ano_lectivo_id', $ano_lectivo_id)->where('status', 1)->get()->first();
        if($trimestre){
            return false;
        } else{
            return true;
        }
    }

    public static function validarDataFimAnoLectivo($fim_trimestre, $fim_ano_lectivo){
        $fimTri = strtotime($fim_trimestre);
        $fimAno = strtotime($fim_ano_lectivo);
        if($fimAno >= $fimTri){
            return true;
        } else{
            return false;
        }
    }

}
