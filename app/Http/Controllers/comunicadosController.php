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
        $request->validate([
            'titulo_com'=> 'required',
            'conteudo_com'=> 'required',
        ]);
        return Comunicado::create($request->all());
    }
    public function edit($id)
    {
        $comunicados = Comunicado::where('id',$id)->first();
        if(!empty($comunicados))
        {
            return view('comunicado.editar-comunicado', ['comunicados'=>$comunicados]);
        }
        else{
                return redirect()->route('comunicado.index');
        }
    }
    public function update(Request $request, $id)
    {
        $dados = [
            'titulo_com' =>$request->titulo,
            'conteudo_com'=>$request->conteudo,
        ];
        Comunicado::where('id',$id)->upadate($dados);
        return redirect()->route('comunicado.index');

    }
    
}
 