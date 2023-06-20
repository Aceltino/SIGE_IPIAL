<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nota;
use App\Traits\AvaliacaoTrait;
use App\Models\Trimestre;

class AvaliacaoAlunoController extends Controller
{
    public function index()
    {
        $disciplinas = [1, 2];
        $turmas = [1, 2];
        //$professor = Professor::with('disciplina')->find(1);
        $aluno = AvaliacaoTrait::pegarNotaAluno($disciplinas);
        //$professor = AvaliacaoTrait::pegarProfessor();
        //$alunos->load('candidato');
        //dd($notas[0]);
        // $dados = AvaliacaoTrait::calcularNotas($notas);
         //dd($aluno);
         //dd(count($notas));
        return view('avaliac-aluno/avaliacoes-aluno', compact('aluno'));
    }

    public function indexUpdate($id_aluno, $id_disciplina){
        $trimestre = Trimestre::where('status', 1)->get();
        $notas = Nota::with('aluno.candidato.pessoa', 'aluno.turmas')
        ->where('aluno_id', $id_aluno)
        ->where('disciplina_id', $id_disciplina)
        ->where('trimestre_id', $trimestre[0]->trimestre_id)->get();
        //dd($notas[0]);
        if(count($notas) < 1){
            return redirect()->back()->with('erro', "Nenhuma avaliação encontrada!");
        }

        return view('avaliac-aluno/edit-valiac-aluno', compact('notas'));
    }

    public function store(Request $request)
    {

    }


    public function update(Request $request, Nota $nota)
    {
        $nota->nota_aluno = $request->nota;
        $nota->save();
        return redirect()->back()->with('sucesso', "Nota alterada com sucesso!");
    }

}
