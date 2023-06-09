<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comunicado;

class comunicadosController extends Controller
{
    //
    public function index()
    {
        $comunicados = Comunicado::all();
        return view('comunicado.comunicado', ['comunicados'=>$comunicados]);
    }
    public function create()
    {
        return view('comunicado.criar-comunicado');
    }
    public function store(Request $request)
    {
        return Comunicado::create($request->all());
    }
    public function edit($comunicado_id)
    {
        $comunicados = Comunicado::where('comunicado_id',$comunicado_id)->first();
        if(!empty($comunicados))
        {
            return view('comunicado.editar-comunicado', ['comunicados'=>$comunicados]);
        }
        else{
                return redirect()->route('comunicado.index');
        }
    }
    public function update(Request $request, $comunicado_id)
    {
        $comunicados = Comunicado::findOrFail($comunicado_id);
        $comunicados->update($request->all());
        return redirect()->route('comunicado.index');

    }

}
