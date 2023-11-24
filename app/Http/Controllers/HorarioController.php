<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Horario;
use App\Models\Turma;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Object_;

class HorarioController extends Controller
{
    public function create()
    {
        return view('horario/criar-horario');
    }

    public static function professorTempos($profDisc_id)
    {
        $horario = Horario::where('prof_disc_id', $profDisc_id)
        ->get();
// dd(count($horario), $profDisc_id);
        if (count($horario) > 0) 
        {
            return count($horario);  
        }
        return $horario = 0;
        // return count($horario);
    }

    public static function professorTemposOcupados()
    {
        $horarios = Horario::all();

        if ($horarios->isEmpty() || !$horarios) {
            return null;
        }

        foreach ($horarios as $horario) 
        {
            $restriProfs[] = [
                'professorDisciplina_id' => $horario->prof_disc_id,
                'tempo_id' => $horario->tempo_id,
                'turno_id' => TurmaController::pegarTurno($horario->turma_id)
            ];
        }

        return $restriProfs;
    }

    public function pegarDadosHorario() // http://127.0.0.1:8000/api/dados-horario
    {
        $diasM = [];
        $dias = DiaController::dias();

        $dadosHorario = TurmaController::turmasViews();
        if(!$dadosHorario)
        {
            return 'Todas as turmas criadas já têm horário.';
        }

        $restriProfs = HorarioController::professorTemposOcupados();

        $labsOcupados = SalaController::salasLabOcupadas();
        if(!$labsOcupados)
        {
            $labsOcupados = 'Nenhum laboratório ainda foi ocupado.';
        }
        $laboratorios = SalaController::laboratorios();
        if(!$laboratorios)
        {
            $laboratorios = 'Sem laboratórios cadastrados';
        }

        foreach($dias as $dia)
        {
            $diasM[] =
            [
                'dia_id' => $dia->dia_id, 
                'dia_semana' => $dia->nome_dia 
            ];
        }

        // dd($dias);
        $horario =
        [
            'horarioInfo' => $dadosHorario,
            'diasSemana' => $diasM,
            'restricoesLabs' => $labsOcupados,
            'laboratorios' => $laboratorios,
            'restricoesProfs' => $restriProfs
        ];
        return $horario;
    }

}
