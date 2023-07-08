<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{ Comunicado, User, Ano_lectivo};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ComunicadoStoreRequest;

class comunicadosController extends Controller
{
    public function index(Request $request)
    {
        $pesquisa = $request->pesquisa;
        $comunicados = Comunicado::all();
        $comunicados = Comunicado::where('titulo_com', 'like',  "%$pesquisa%")->get();
        return view('comunicado.comunicado', compact('comunicados'));
    }
    public function create()
    {
        return view('comunicado.criar-comunicado');
    }
    public function store(ComunicadoStoreRequest $request)
    {
        $ano_lectivo = Ano_lectivo::where('status_ano_lectivo', 1)->first();
        $comunicados = new Comunicado();
        $comunicados->titulo_com = $request->titulo_com;
        $comunicados->conteudo_com = $request->conteudo_com;
        $comunicados->ano_lectivo_id = $ano_lectivo->ano_lectivo_id;
        $comunicados->usuario_id =Auth::user()->usuario_id;
        $comunicados->save();
        return redirect()->route('comunicado.index' )->with('sucess','Comunicado criado com sucesso');
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
    public function update(ComunicadoStoreRequest $request, $comunicado_id)
    {
        
        $dados = [
            'titulo_com' => $request->titulo_com,
            'conteudo_com' => $request->conteudo_com,
        ];
        Comunicado::where('comunicado_id', $comunicado_id)->update($dados);
        return redirect()->route('comunicado.index')->with('edit','Comunicado editado com sucesso');
    }
    public function destroy($comunicado_id)
    {
        Comunicado::where('comunicado_id', $comunicado_id)->delete();
        return redirect()->route('comunicado.index')->with('delete','Comunicado eliminada com sucesso ');
    }
    public function getComunicado()
    {
        Comunicado::all();
    }

}
