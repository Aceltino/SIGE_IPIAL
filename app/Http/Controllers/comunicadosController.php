<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comunicado;
use Illuminate\Support\Facades\Auth;

class comunicadosController extends Controller
{
    //
    public function index()
    {
        $comunicados = Comunicado::all();
        return view('comunicado.comunicado')->with('comunicados',$comunicados);
    }
    public function create()
    {
        return view('comunicado.criar-comunicado');
    }
    public function store(Request $request)
    {
        $pessoaId = Auth::pesssoa_id();
        $comunicados = new Comunicado();
        $comunicados->pessoaId = $pessoaId;
        $comunicados->titulo_com = $request->titulo_com;
        $comunicados->conteudo_com = $request->conteudo_com;
        $comunicados->save();
         return redirect()->route('comunicado.index',$comunicados->pessoa_id);
    }
    public function edit($comunicado_id)
    {
        $comunicados = Comunicado::where('comunicado_id',$comunicado_id)->first();
        if(!empty($comunicados))
        {
            return view('comunicado.editar-comunicado')->with('comunicados',$comunicados);
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
