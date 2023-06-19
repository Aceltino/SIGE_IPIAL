<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ Comunicado, User, Ano_lectivo};
use Illuminate\Support\Facades\Auth;

class comunicadosController extends Controller
{
    public function index()
    {
        $comunicados = Comunicado::all();
        return view('comunicado.comunicado', compact('comunicados'));
    }
    public function create()
    {
        return view('comunicado.criar-comunicado');
    }
    public function store(Request $request)
    {
        $ano_lectivo = Ano_lectivo::where('status_ano_lectivo', 1)->first();
        $comunicados = new Comunicado();
        $comunicados->titulo_com = $request->titulo;
        $comunicados->conteudo_com = $request->conteudo;
        $comunicados->ano_lectivo_id = $ano_lectivo->ano_lectivo_id;
        $comunicados->usuario_id =Auth::user()->usuario_id;
        $comunicados->save();

        return redirect()->route('comunicado.index',$comunicados);
    }
    public function edit($comunicado_id)
    {
        $comunicados = Comunicado::where('comunicado_id', $comunicado_id)->first();
        if(!empty($comunicados)) 
        {
            return view('comunicado.editar-comunicado', ['comunicados' => $comunicados]);
        }
        else{
            return redirect()->route('comunicado.index');
        }
    }
    public function update(Request $request, $comunicado_id)
    {
        
        $dados = [
            'titulo_com' => $request->titulo_com,
            'conteudo_com' => $request->conteudo_com,
        ];
        Comunicado::where('comunicado_id', $comunicado_id)->update($dados);
        return redirect()->route('comunicado.index');
    }
    public function destroy($comunicado_id)
    {
        Comunicado::where('comunicado_id', $comunicado_id)->delete();
        return redirect()->route('comunicado.index');
    }

}
