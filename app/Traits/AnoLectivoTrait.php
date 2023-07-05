<?php

namespace App\Traits;

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CandidatoController;
use App\Models\Ano_lectivo;
use App\Models\Candidato;
use App\Models\Trimestre;
use DateTime;
use carbon\Carbon;
use Illuminate\Support\Fluent;

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
            //dd($f);
            if($f->m == 3 && $f->y == 0){
                return true;
            } else{
                return 2;
            }
        } else{
            return false;
        }
    }

    public static function verifyHoraManha($hora){
        $get = substr($hora, 0, 1) . substr($hora, 1, 1);
        switch ($get) {
            case '07':
            case '08':
            case '09':
            case '10':
            case '11':
            case '12':
                return true;
                break;

            default:
                return false;
                break;
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

    public static function verifyHoraNoite($hora){
        $get = substr($hora, 0, 1) . substr($hora, 1, 1);
        switch ($get) {
            case '17':
            case '18':
            case '19':
            case '20':
            case '21':
            case '22':
                return true;
                break;

            default:
                return false;
                break;
        }
    }

    public static function horaInicioAula($inicio, $fim){
        $ini = strtotime($inicio);
        $fn = strtotime($fim);
        if($ini > $fn){
            return true;
        } else{
            return false;
        }
    }

    public static function horaFimAula($inicio, $fim){
        $ini = strtotime($inicio);
        $fn = strtotime($fim);
        if($fn > $ini){
            return true;
        } else{
            return false;
        }
    }

    public static function fecharAnoLectivo(){
        //CandidatoController::eliminarCandidatos(); // Eliminar todos os candidatos não matriculados no ano lectivo
        AlunoController::alunosVinculados(); //Cortar o acesso de todos os alunos do sistema


//Todas as funções devem ser colocadas acima porque depois do ano lectivo estar com o status 0 nenhuma ação é permitida.
        $anoLec = ['status_ano_lectivo' => 0];
        $trimestre = ['status' => 0];
        Ano_lectivo::where('status_ano_lectivo', 1)->update($anoLec);
        Trimestre::where('status', 1)->update($trimestre);
        return true;
    }

}
