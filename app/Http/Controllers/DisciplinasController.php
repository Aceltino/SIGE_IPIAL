<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Disciplina;


class DisciplinasController extends Controller
{
    public function index()
    {
       $disciplinas = Disciplina::all();
       $cursos = Curso::puck('nome_curso','curso_id' );

        return view('disciplina.disciplinas', compact('disciplinas','cursos'));
    }
    public function create()
    {
        return view('disciplina.regi-disciplina');
    }
    public function store(Request $request)
    {
        $disciplinas = new Disciplina();
        $disciplinas->nome_disciplina = $request->nome_disciplina;
        $disciplinas->componente = $request->componente;
        $disciplinas->tempo_prova = $request-> tempo_prova;
        $disciplinas->sigla = $request->sigla;
        $disciplinas->curso_id = $request->curso;
        $disciplinas->save();
         return redirect()->route('disciplina.index')->with('sucess','Dados salvos com sucesso');
    }
    public function edit($disciplina_id)
    {
        $disciplinas = Disciplina::where('disciplina_id',$disciplina_id)->first();
        if(!empty($disciplinas))
        {
            return view('disciplina.edit-disciplina', ['disciplinas'=>$disciplinas]);
        }
        else{
                return redirect()->route('disciplina.index');
        }
    }
    public function update(Request $request, $disciplina_id)
    {
        $dado = [
            'nome_disciplina' =>$request->nome_disciplina,
            'componente' =>$request->componente,
            'tempo_prova' =>$request->tempo_prova,
            'sigla' => $request->sigla,
            'curso_id' => $request->curso,
        ];
        Disciplina::where('disciplina_id',$disciplina_id)->update($dado);
        return redirect()->route('disciplina.index');
    }



}
