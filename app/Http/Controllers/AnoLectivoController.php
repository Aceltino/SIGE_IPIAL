<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ano_lectivo;
use Illuminate\Http\Request;
use App\Traits\AnoLectivoTrait;
use App\Http\Requests\AnoLectivoRequest;


class AnoLectivoController extends Controller
{
    public static function pegarAnoLectivo()
    {
        $ultimoAno = Ano_lectivo::latest()->first();
        return $ultimoAno->ano_lectivo_id;
    }

    public function indexCadastroAnoLectivo(){
        return view('ano-lectivo/criar-ano-lect');
    }

    public function store(AnoLectivoRequest $req){
        $request = $req->validated();
        $anoLectivo = Ano_lectivo::all();
        //dd($request);
        $anoLectivo = [
            'ano_lectivo_id' => 6,
            'ano_lectivo' => $request['ano_lectivo'],
            'status_ano_lectivo' => 1,
            'data_inicio_ano_lectivo' => $request['data_inicio_ano_lectivo'],
            'data_fim_ano_lectivo' => $request['data_fim_ano_lectivo'],
            'num_aluno_na_turma' => $request['num_aluno_na_turma'],
            'num_sala_escola' => $request['num_sala_escola'],
            'data_inicio_inscricao' => $request['data_inicio_inscricao'],
            'data_fim_inscricao' => $request['data_fim_inscricao'],
            'data_inicio_matricula' => $request['data_inicio_matricula'],
            'data_fim_matricula' => $request['data_fim_matricula']
        ];
        Ano_Lectivo::create($anoLectivo);
        return redirect()->back()->with('sucesso', "Ano lectivo criado com sucesso.");
    }

    public function index(){
        return view('ano-lectivo/ano-lect');
    }
}
