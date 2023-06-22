<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nota;
use App\Traits\AvaliacaoTrait;
use App\Models\Trimestre;
use App\Models\Aluno;


class AvaliacaoAlunoController extends Controller
{
    public function index()
    {
        $disciplinas = [1, 2];
        $turmas[0] = [9, 10];
        $turmas[1] = [9, 10];
        //$aluno = Aluno::with(['candidato.pessoa', 'turmas', 'anoturma.turma'])->where('status', 1)->get();
        //dd($aluno);
        //$aluno = AvaliacaoTrait::pegarProfessor();
        $aluno = AvaliacaoTrait::pegarNotaAluno($disciplinas, $turmas);

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
