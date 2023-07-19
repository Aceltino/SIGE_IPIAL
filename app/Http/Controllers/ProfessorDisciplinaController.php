<?php

namespace App\Http\Controllers;

use App\Models\Professor_disciplina;
use Illuminate\Http\Request;

class ProfessorDisciplinaController extends Controller
{
    public static function professoresdiscs()
    {
        $professores = Professor_disciplina::with('disciplina', 'professor')
        ->get();
        return $professores;
    }
}
