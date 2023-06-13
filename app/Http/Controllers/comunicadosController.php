<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comunicado;
use App\Models\User;
use App\Models\Ano_lectivo;
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
        $UsuarioId = Auth::with('usuario_id')->get();
        $ano_lectivo = Ano_lectivo::with('ano_lectivo_id')->get();
        $comunicados = new Comunicado();
        $comunicados->titulo_com = $request->titulo_com;
        $comunicados->conteudo_com = $request->conteudo_com;
        $comunicados->ano_lectivo_id = $ano_lectivo;
        $comunicados->usuario_id = $UsuarioId;
        $comunicados->save();
         return redirect()->route('comunicado.index',$comunicados);
    }
    public function edit($id)
    {
        $comunicados = Comunicado::where('id',$id)->first();
        if(!empty($comunicados))
        {
            return view('comunicado.editar-comunicado', ['comunicados',$comunicados]);
        }
        else{
                return redirect()->route('comunicado.index');
        }
    }
    public function update(Request $request, $id)
    {
       $dados= [
        'titulo_com' => $request->titulo_com,
        'conteudo_com' => $request->conteudo_com,
       ];
       Comunicado::where('comunicado_id',$comunicado_id)->update($dados);
        return redirect()->route('comunicado.index');
    }

}
