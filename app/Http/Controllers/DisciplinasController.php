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
        $disciplinas = Disciplina::has('cursos')->get();
        return view('disciplina.disciplinas', ['disciplinas'=>$disciplinas]);
    }
    public function create()
    {
        $cursos = Curso::all();
        return view('disciplina.regi-disciplina', compact('cursos'));
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
         return redirect()->route('consultar.disciplina')->with('sucess','Dados salvos com sucesso');
    }
    public function edit($disciplina_id)
    {
        $cursos = Curso::all();
        $disciplinas = Disciplina::where('disciplina_id',$disciplina_id)->first();
        if(!empty($disciplinas))
        {
            return view('disciplina.edit-disciplina', compact('disciplinas', 'cursos'));
        }
        else{
                return redirect()->route('consultar.disciplina');
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
        return redirect()->route('consultar.disciplina');
    }
    public function destroy($disciplina_id)
    {
        Disciplina::where('disciplina_id',$disciplina_id)->delete();
        return redirect()->route('consultar.disciplina');
    }
}
