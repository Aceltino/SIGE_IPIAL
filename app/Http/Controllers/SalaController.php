<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;

class SalaController extends Controller
{
    public function index(Request $request)
    {
        $pesquisa = $request->pesquisa;
        if($pequisa)
        {
            $salas = Sala::where([
                ['titulo_com', 'like',  "%$pesquisa%"]
            ])->get();  
        }
        else
        {
            $salas = Sala::all();
        }
        return view('sala.sala',['salas',$salas ,'pesquisa',$pesquisa ]; 
    }
    public function create()
    {
        return view('sala.cadastrar-sala');
    }
    public function store(Request $request)
    {
        $sala = new Sala;
        $sala->sala = $request->nome_sala,
        $sala->tipo_sala = $requet->tipo_sala,
        $sala->save();
        return view('sala.cadastrar-sala')->with('sucesso','Sala cadastrada com sucesso');
    }
    public function edit($sala_id)
    {
        $salas = Sala::where('sala_id',$sala_id)->fist();
        if(!empty($sala))
        {
            return view('sala.edit-sala',compact('salas'));
        }
        else
        {
            return view('sala.sala')  
        }

    }
    public function update(Request $request, $sala_id)
    {
        $dados = [
            'sala'=>$request->nome_sala,
            'tipo_sala'=>$request->tipo_sala,
        ];
        Sala::where('sala_id',$sala_id)->update($dados);
        return redirect()->route('sala.edit-sala')->->with('edit','Sala editado com sucesso');
    } 
    public function destroy()
    {
        Sala::where('sala_id',$sala_id)->delete();
        return redirect()->route('sala.sala')->->with('delete','Sala editado com sucesso');
    }
}
