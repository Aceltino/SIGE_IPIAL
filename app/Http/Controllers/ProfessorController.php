<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cursos;
use App\Models\Pessoa;
use App\Models\Endereco;
use App\Models\Professor;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('professor.consultar-prof');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursos = Cursos::all(['nome_curso', 'sigla']);
        return view('professor.cadastrar-prof', ['cursos' => $cursos]);
    }


}
