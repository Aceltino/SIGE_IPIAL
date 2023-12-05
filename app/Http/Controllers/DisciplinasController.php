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
    public function index()
    {
        $disciplinas = Disciplina ::has('curso')->with(['classes' => function ($query) {
            $query->withPivot('carga_horaria','tipo_disciplina');
        }])->get();   
        
        
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
        $disciplinas = new Disciplina();
        $disciplinas->nome_disciplina = $request->nome_disciplina;
        $disciplinas->componente = $request->componente;
        $disciplinas->tempo_prova = $request-> tempo_prova;
        $disciplinas->sigla = $request->sigla;
        $disciplinas->curso_id = $request->curso;
        $disciplinas->save();
        $ClasseDisiciplina = ClasseDisciplina::create([
            'carga_horaria' => $request->carga_horaria,
            'disciplina_id' =>$disciplinas->disciplina_id,
            'classe_id' => $request->classe,
            'tipo_disciplina' => $request->tipo_disciplina,
        ]);  
         
        return redirect()->route('consultar.disciplina',$disciplinas)->with('sucess','Disciplina cadastrada com sucesso');
    }
    public function edit($disciplina_id)
    {
        $cursos = Curso::all();
        $classes = Classe::all();
        $disciplinas = Disciplina::where('disciplina_id',$disciplina_id)->first();
        if(!empty($disciplinas))
        {
            return view('disciplina.edit-disciplina',['disciplinas' => $disciplinas, 'cursos' => $cursos , 'classes' => $classes ]);
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
        $Classe =[
            'carga_horaria' => $request->carga_horaria,
            'classe_id' => $request->classe,
            'tipo_disciplina' => $request->Tipo_disciplina,
        ];
        Disciplina::where('disciplina_id', $disciplina_id)->update($dado);
        ClasseDisciplina::where('disciplina_id', $disciplina_id)->update($Classe);
        return redirect()->route('consultar.disciplina')->with('edit','Disciplina editada com sucesso');
    }
    public function destroy($disciplina_id)
    {
        Disciplina::where('disciplina_id', $disciplina_id)->delete();
        return redirect()->route('consultar.disciplina')->with('delete','Disciplina eliminada com sucesso ');
    }
 
}
