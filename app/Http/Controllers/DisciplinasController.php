<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\Classe;
use App\Models\ClasseDisciplina;
use App\Http\Requests\DisciplinaStoreRequest;
use App\Http\Requests\DisciplinaUpdateRequest;


class DisciplinasController extends Controller
{
    public function index(Request $request)
    {
        $pesquisa = $request->pesquisa;
        $disciplinas = Disciplina::all();
        $disciplinas = Disciplina::where('nome_disciplina', 'like', "%$pesquisa%")->get();
        return view('disciplina.disciplinas', compact('disciplinas'));
    }
    public function create()
    {
        $classes = Classe::all();
        $cursos = Curso::all();
        return view('disciplina.regi-disciplina', compact('classes','cursos'));
    }
    public function store(DisciplinaStoreRequest $request)
    { 
       
        //$disciplinas = new Disciplina();
         $disciplinas = Disciplina::create($request->all());
        $ClasseDisiciplina = ClasseDisciplina::create([
            'carga_horaria' => $request->carga_horaria,
            'disciplina_id' =>$disciplinas->disciplina_id,
            'classe_id' => $request->classe,
        ]);  
         
        return redirect()->route('consultar.disciplina',$disciplinas)->with('sucess','Disciplina cadastrada com sucesso');
    }
    public function edit($disciplina_id)
    {
        $classes = Classe::all();
        $cursos = Curso::all();
        $disciplinas = Disciplina::where('disciplina_id',$disciplina_id)->first();
        if(!empty($disciplinas))
        {
            return view('disciplina.edit-disciplina',['disciplinas' => $disciplinas, 'cursos' => $cursos]);
        }
        else{
                return redirect()->route('consultar.disciplina');
        }
    }
    public function update(DisciplinaUpdateRequest $request, $disciplina_id)
    {
        $dado = [
            'nome_disciplina' =>$request->nome_disciplina,
            'componente' =>$request->componente,
            'tempo_prova' =>$request->tempo_prova,
            'sigla' => $request->sigla,
            'curso_id' => $request->curso,
        ];
        Disciplina::where('disciplina_id', $disciplina_id)->update($dado);
        return redirect()->route('consultar.disciplina')->with('edit','Disciplina editada com sucesso');
    }
    public function destroy($disciplina_id)
    {
        Disciplina::where('disciplina_id', $disciplina_id)->delete();
        return redirect()->route('consultar.disciplina')->with('delete','Disciplina eliminada com sucesso ');
    }
    public function getdisciplina()
    {
         Disciplina::all();
    }
 
}
