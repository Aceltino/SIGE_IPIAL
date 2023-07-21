<?php

namespace App\Http\Controllers;

use App\Models\{
    AlunoTurma,
    Turma,
    AnoTurmaCood
};
use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
    Auth
};
class BoletimNotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= Auth::user();
        // dd($user);
        $candidato= Candidato::findOrFail($user->pessoa_id);
        // dd($candidato);
        $aluno = \App\Models\Aluno::findOrFail($candidato->candidato_id);
        $alunoTurma = AlunoTurma::where('aluno_id', $aluno->aluno_id)->first();
        $anoTurmaCoord = AnoTurmaCood::where('turmaAno_id', $alunoTurma->turmaAno_id)
            ->whereHas('ano_lectivo', function ($query) {
                $query->where('status_ano_lectivo', 1);
            })
            ->first();
        $disciplinaNota = \App\Models\Nota::where('aluno_id', $aluno->aluno_id)->get();
        $discips = $disciplinaNota->pluck('disciplina_id');
        
        $disciplinas = \App\Models\Disciplina::whereIn('disciplina_id', $discips)->get();

        return view('boletim/boletim-notas',compact('user','candidato','aluno', 'anoTurmaCoord', 'disciplinas') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
