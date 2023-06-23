<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nota;
use App\Traits\AvaliacaoTrait;
use App\Models\Trimestre;
use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;


class AvaliacaoAlunoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $professor = AvaliacaoTrait::pegarProfessor($user);

        $inc = 0;
        for ($i = 0; $i < count($professor); $i++) {
            $disciplina_id[$i] = $professor[$i]['disciplina_id'];
            $nome_disciplina[$i] = $professor[$i]['nome_disciplina'];
            for ($j = 0; $j < (count($professor[$i]) - 2); $j++) {
                $turma =  AvaliacaoTrait::pegarAnoTurmaCoord($professor[$i][$j]['turma_id']);
                $n_turma = $professor[$i][$j]['nome_turma'];
                if($j === 0){
                    $turmas[$i][$j] = $turma;
                }
                if($inc === 0){
                    $nome_turma[$j] = $n_turma;
                    $inc++;
                }
                if(!in_array($n_turma, $nome_turma)){
                    $nome_turma[$inc] = $n_turma;
                    $inc++;
                }
                if(!in_array($turma, $turmas[$i])){
                    $turmas[$i][$j] = $turma;
                }

            }
        }
        //dd($nome_turma);
        $aluno = AvaliacaoTrait::pegarNotaAluno($disciplina_id, $turmas);

        //dd($aluno);

        return view('avaliac-aluno/avaliacoes-aluno', compact(['aluno', 'nome_disciplina', 'nome_turma']));
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

    public function store(Request $request, $disciplina_id)
    {
        if(!$request->ac && !$request->npp && !$request->npt && !$request->exame && !$request->exame_recurso){
            return redirect()->back();
        }
        $trimestre = Trimestre::where('status', 1)->get();
        $nota = Nota::where('aluno_id', $request->aluno_id)
        ->where('disciplina_id', $disciplina_id)
        ->where('trimestre_id', $trimestre[0]->trimestre_id)
        ->get();

        if($request->ac){
            $dados = [
                'data_avaliacao' => date('Y-m-d'),
                'nota_aluno' => $request->ac,
                'tipo_prova' => "AvaliacaoContinua",
                'descricao_nota' => null,
                'aluno_id' => $request->aluno_id,
                'disciplina_id' => $disciplina_id,
                'trimestre_id' => $trimestre[0]->trimestre_id
            ];
            Nota::create($dados);
        }
        if($request->npp){
            $nota = Nota::where('tipo_prova', "Prova Professor")
            ->where('aluno_id', $request->aluno_id)
            ->where('trimestre_id', $trimestre[0]->trimestre_id)
            ->get();
            if(count($nota) > 0){
                return redirect()->back()->with('erro', "O aluno já tem uma NPP!");
            } else{
                $dados = [
                    'data_avaliacao' => date('Y-m-d'),
                    'nota_aluno' => $request->npp,
                    'tipo_prova' => "Prova Professor",
                    'descricao_nota' => null,
                    'aluno_id' => $request->aluno_id,
                    'disciplina_id' => $disciplina_id,
                    'trimestre_id' => $trimestre[0]->trimestre_id
                ];
                Nota::create($dados);
            }
        }
        if($request->npt){
            $nota = Nota::where('tipo_prova', "ProvaTrimestre")
            ->where('aluno_id', $request->aluno_id)
            ->where('trimestre_id', $trimestre[0]->trimestre_id)
            ->get();
            if(count($nota) > 0){
                return redirect()->back()->with('erro', "O aluno já tem uma NPT!");
            } else{
                $dados = [
                    'data_avaliacao' => date('Y-m-d'),
                    'nota_aluno' => $request->npt,
                    'tipo_prova' => "ProvaTrimestre",
                    'descricao_nota' => null,
                    'aluno_id' => $request->aluno_id,
                    'disciplina_id' => $disciplina_id,
                    'trimestre_id' => $trimestre[0]->trimestre_id
                ];
                Nota::create($dados);
            }
        }
        if($request->exame){
            $nota = Nota::where('tipo_prova', "Exame")
            ->where('aluno_id', $request->aluno_id)
            ->where('trimestre_id', $trimestre[0]->trimestre_id)
            ->get();
            if(count($nota) > 0){
                return redirect()->back()->with('erro', "O aluno já tem uma nota de Exame!");
            } else{
                $dados = [
                    'data_avaliacao' => date('Y-m-d'),
                    'nota_aluno' => $request->exame,
                    'tipo_prova' => "Exame",
                    'descricao_nota' => null,
                    'aluno_id' => $request->aluno_id,
                    'disciplina_id' => $disciplina_id,
                    'trimestre_id' => $trimestre[0]->trimestre_id
                ];
                Nota::create($dados);
            }
        }
        if($request->exame_recurso){
            $nota = Nota::where('tipo_prova', "Exame Recurso")
            ->where('aluno_id', $request->aluno_id)
            ->where('trimestre_id', $trimestre[0]->trimestre_id)
            ->get();
            if(count($nota) > 0){
                return redirect()->back()->with('erro', "O aluno já tem uma nota de Exame de Recurso!");
            } else{
                $dados = [
                    'data_avaliacao' => date('Y-m-d'),
                    'nota_aluno' => $request->exame_recurso,
                    'tipo_prova' => "Exame Recurso",
                    'descricao_nota' => null,
                    'aluno_id' => $request->aluno_id,
                    'disciplina_id' => $disciplina_id,
                    'trimestre_id' => $trimestre[0]->trimestre_id
                ];
                Nota::create($dados);
            }
        }
        return redirect()->back()->with('sucesso', "Avaliação realizada com sucesso!");

    }

    public function update($nota, Request $request)
    {
        //dd($request);
        $nota = Nota::find($nota);

        $nota->nota_aluno = $request->nota_aluno;
        $nota->save();
        //dd($nota);
        return redirect()->back()->with('sucesso', "Nota alterada com sucesso!");
    }

}
