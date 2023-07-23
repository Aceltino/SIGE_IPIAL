<?php

namespace App\Http\Controllers;

use App\Models\{
    AlunoTurma,
    Turma,
    AnoTurmaCood
};
use App\Models\{
    Candidato,
    Disciplina,
};
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
        // dd($user->pessoa_id);
        $candidato= Candidato::find($user->pessoa_id);
        // dd($candidato);


        $aluno = \App\Models\Aluno::find($candidato->candidato_id);

        $alunoTurma = AlunoTurma::where('aluno_id', $aluno->aluno_id)->first();
        $anoTurmaCoord = AnoTurmaCood::where('turmaAno_id', $alunoTurma->turmaAno_id)
            ->whereHas('ano_lectivo', function ($query) {
                $query->where('status_ano_lectivo', 1);
            })
            ->first();
        $disciplinaNota = \App\Models\Nota::where('aluno_id', $aluno->aluno_id)->get();
        $discips = $disciplinaNota->pluck('disciplina_id');
        
         // //Buscar as Disciplinas de uma Turma pelos seu Curso
         $disciplinaGerais= Disciplina::with('classes')
         ->where('componente','Componente Científica')
         ->Orwhere('componente','Componente Socio-Cultural')
         ->get();

        $disciplinaEspecificas= Disciplina::where('componente','Componente Técnica, Tecnológica e Prática')
                    ->where('curso_id',$anoTurmaCoord->turma->curso->curso_id)
                    ->get();

        //Combinei as duas coleções de disciplinas(Tecnicas e Gerais) em uma única variável            
        $disciplinasAll= $disciplinaGerais->concat($disciplinaEspecificas)->all();
        #$disciplinas = \App\Models\Disciplina::whereIn('disciplina_id', $discips)->get();
        $disciplinar = [];

        foreach ($disciplinasAll as $disciplina) {
            $professor = Disciplina::where('disciplina_id', $disciplina->disciplina_id)->first();
            if ($professor) {
                $disciplinar[] = [
                    'disciplina' => $disciplina,
                    'professor' => $professor
                ];
            }
        }

        return view('boletim/boletim-notas',compact('user','candidato','aluno', 'anoTurmaCoord', 'disciplinar') );
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
