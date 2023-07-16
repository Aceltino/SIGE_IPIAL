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

    public static function calcularHoraTempos($hora_inicio, $intervalo, $hora_fim){
        $h_inicio = (int) substr($hora_inicio, 0, 2);
        $minutos_inicio = (int) substr($hora_inicio, 3, 2);
        $h_fim = (int) substr($hora_fim, 0, 2);
        $minutos_fim = (int) substr($hora_fim, 3, 2);
        $itervalo = (int) $intervalo;
        $duracao = (6 * 60) + $intervalo;
        $x = 0;
        for ($i=$h_inicio; $i < $h_fim; $i++) {
            $x++;
        }
        // $diff = new DateTime($hora_inicio);
        // $df = $diff->diff();
        // dd($df);
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

    public static function abrirTrimestre($trimestre){
        $anoLectivo = Ano_lectivo::latest()->where('status_ano_lectivo', 1)->get()->first();
        $trimestre = Trimestre::where('trimestre', $trimestre)->where('ano_lectivo_id', $anoLectivo->ano_lectivo_id)->get()->first();
        $trimestre->data_inicio = date('Y-m-d');
        $trimestre->status = 1;
        $trimestre->save();
        return true;
    }
    public static function fecharTrimestre($trimestre){
        $anoLectivo = Ano_lectivo::latest()->where('status_ano_lectivo', 1)->get()->first();
        $trimestre = Trimestre::where('trimestre', $trimestre)->where('ano_lectivo_id', $anoLectivo->ano_lectivo_id)->get()->first();
        $trimestre->data_fim = date('Y-m-d');
        $trimestre->status = 0;
        $trimestre->save();
        return true;
    }

    public static function fecharAnoLectivo($ano_lectivo_id){
        $ano_lectivo = Ano_lectivo::find($ano_lectivo_id);
        if($ano_lectivo->status_ano_lectivo === 0){
            return redirect()->back()->with('erro', 'Este ano lectivo já se encontra fechado.');
        }
        if(!empty($ano_lectivo) && $ano_lectivo->status_ano_lectivo === 1){
            $trimestre = Trimestre::where('ano_lectivo_id', $ano_lectivo_id)->where('status', 1)->get()->first();
            if($trimestre){
                return redirect()->back()->with('erro', 'Ano lectivo não pode ser fechado se existir algum trimestre em curso.');
            }
            //CandidatoController::eliminarCandidatos(); // Eliminar todos os candidatos não matriculados no ano lectivo
            AlunoController::alunosVinculados(); //Cortar o acesso de todos os alunos do sistema


            //Todas as funções devem ser colocadas acima porque depois do ano lectivo estar com o status 0 nenhuma ação é permitida.
            $ano_lectivo->status_ano_lectivo = 0;
            $ano_lectivo->data_fim_ano_lectivo = date('Y-m-d');
            $ano_lectivo->save();
            return redirect()->route('ano.lectivo')->with('sucesso', 'Ano lectivo fechado com sucesso.');
        } else{
            return redirect()->back()->with('erro', 'Ano lectivo não encontrado.');
        }
    }

}
