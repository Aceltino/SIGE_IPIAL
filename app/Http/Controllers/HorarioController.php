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
// dd();
        if (count($horario) > 0) 
        {
            return count($horario);  
        }
        return $horario = 0;
        // return count($horario);
    }

    public function pegarDadosHorario()
    {
        $dias = DiaController::dias();
        // $salas = SalaController::salas(); 
        $dadosHorario = TurmaController::turmasViews();
        // $profsDiscs = ProfessorDisciplinaController::professoresdiscs+();

        $horario = Horario::with('professorDisc')
        ->get();
        dd($horario);

        // $horario = Horario::with('turma', 'professorDisc', 'tempo', 'sala', 'dia')
        // ->get();
        // dd($horario);

    }
}
