<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{

    public static function salasNormalHorario()
    {
        $sala = Sala::with('horario.turma')
        ->where('tipo_sala', 'Normal')
        ->whereHas('horario', function ($query) {
            $query->select('sala_id')
                ->from('horario');
        })
        ->get();

        foreach($sala as $salaTurno)
        {
            
            foreach($salaTurno->horario as $turma)
            {
                $salasTurno[] =
                [
                    'turno_id' => $turma->turma->turno_id,
                    'turma_id' => $turma->turma->turma_id,
                    'sala_id' => $salaTurno->sala_id
                ];                 
            }
        }

        return $salasTurno;
    }

    public static function salasNormal()
    {
        $salas = Sala::where('tipo_sala', 'Normal')
        ->get();

        foreach($salas as $sala)
        {
                $salasTurno[] =
                [
                    'sala_id' => $sala->sala_id,
                    'sala' =>$sala->sala
                ];                 
            
        }

        return $salasTurno;
    }

}
