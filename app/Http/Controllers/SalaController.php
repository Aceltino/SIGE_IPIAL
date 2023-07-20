<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;

class SalaController extends Controller
{
    public function index()
    {
        $salas = Sala::all();
        return view('sala.sala', ['salas' => $salas]);
    }
    public function create()
    {
        return view('sala.cadastrar-sala');
    }
    public function store(Request $request)
    {
        $salas = new Sala;
        $salas->sala = $request->sala;
        $salas->tipo_sala = $request->tipo_sala;
        $salas->save();
        return redirect()->route('criar.sala')->with('sucesso','Sala cadatrada com sucesso');
    }
    public function edit($sala_id)
    {
        $salas = Sala::where('sala_id',$sala_id)->first();
       if(!empty($salas))
       {
            return view('sala.edit-sala', ['salas' => $salas]);
       }
       else
       {
        return redirect()->route('consultar.sala');
       }
    }
    public function update(Request $request, $sala_id)
    {
        $dados = [
        'sala' => $request->sala,
        'tipo_sala' => $request->tipo_sala,
        ];
        Sala::where('sala_id',$sala_id)->update($dados);
        return redirect()->route('consultar.sala')->with('edit','Sala Atualizada com sucesso');
    }
    public function destroy($sala_id)
    {
        Sala::where('sala_id',$sala_id)->delete();
        return redirect()->route('consultar.sala')->with('delete','Sala deletada com sucesso');
    }
    public static function salasNormalHorario()
    {
        $sala = Sala::with('horario.turma')
        ->where('tipo_sala', 'Normal')
        ->whereHas('horario', function ($query) {
            $query->select('sala_id')
                ->from('horario');
        })
        ->get();

        if ($sala->isEmpty()) {
            return false;
        }

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

        if ($salas->isEmpty()) {
            return false;
        }

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

    public static function salasLabOcupadas()
    {
        $salas = Sala::with('horario')
        ->where('tipo_sala', 'Laboratório')
        ->whereHas('horario', function ($query) {
            $query->select('sala_id')
                ->from('horario');
        })
        ->get();

        if ($salas->isEmpty()) {
            return false;
        }


        foreach($salas as $sala)
        {
            foreach($sala->horario as $horario)
            {
                $salasTurno[] =
                [
                    'sala_id' => $sala->sala_id,
                    'sala' => $sala->tipo_sala.' '.$sala->sala,
                    'diaSemana' =>$horario->dia_id,
                    'tempo_id'=> $horario->tempo_id,
                    'turno_id'=> $horario->turma->turno_id,
                ];                 
            }
        }

        return $salasTurno;
    }

    public static function laboratorios()
    {
        $salas = Sala::where('tipo_sala', 'Laboratorio')
        ->get();

        if ($salas->isEmpty()) {
            return false;
        }

        foreach($salas as $sala)
        {
                $salaM[] =
                [
                    'sala_id' => $sala->sala_id,
                    'sala' => $sala->tipo_sala.' '.$sala->sala,
                ];                 
            
        }
        return $salaM;
    }
}
