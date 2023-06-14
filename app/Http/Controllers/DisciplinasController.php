<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Disciplina;

class DisciplinasController extends Controller
{
    public function index()
    {
       $disciplinas = Disciplina::all();
        return view('disciplina.disciplinas', ['disciplinas'=>$disciplinas]);
    }
    public function create()
    {
        return view('disciplina.regi-disciplina');
    }
    public function store(Request $request)
    {
         Disciplina::create($request->all());
         return redirect()->route('disciplina.index');
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
        // $data = [
        //     ''
        //     ''
        //     ''
        //     ''
        // ];
        // return redirect()->route('disciplina.index');

    }

}
