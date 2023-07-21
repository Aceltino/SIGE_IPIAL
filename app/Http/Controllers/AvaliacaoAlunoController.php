<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nota;
use App\Traits\AvaliacaoTrait;
use App\Models\Trimestre;
use Illuminate\Support\Facades\Auth;
use App\Models\Professor;

class AvaliacaoAlunoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if($user->cargo_usuario === "Subdirector"){
            $professor = AvaliacaoTrait::pegarAdmin();
            $erro = AvaliacaoTrait::erros($professor);
            if($erro !== true){
                return redirect()->route('erroavaliar')->with('erro', $erro);
            }
        }
        if($user->cargo_usuario === "Coordenacao"){
            $coord = Professor::where('pessoa_id', $user->pessoa_id)->get();
            if(count($coord) < 1){
                return redirect()->route('erroavaliar')->with('erro', "Nenhuma avaliação encontrada!");
            }
            if($coord[0]->cargo === "Coordenador Curso"){
                $professor = AvaliacaoTrait::pegarCoordenadorCurso($user);
                $erro = AvaliacaoTrait::erros($professor);
                if($erro !== true){
                    return redirect()->route('erroavaliar')->with('erro', $erro);
                }
            }
            if($coord[0]->cargo === "Coordenador Area"){
                $professor = AvaliacaoTrait::pegarCoordenadorArea($user);
                $erro = AvaliacaoTrait::erros($professor);
                if($erro !== true){
                    return redirect()->route('erroavaliar')->with('erro', $erro);
                }
            }
        }
        if($user->cargo_usuario === "Professor"){
            $professor = AvaliacaoTrait::pegarProfessor($user);
            $erro = AvaliacaoTrait::erros($professor);
            if($erro !== true){
                return redirect()->route('erroavaliar')->with('erro', $erro);
            }
        }
        $inc = 0;
        if (!isset($professor)) {
            return redirect()->route('inicio');
        }
        for ($i = 0; $i < count($professor); $i++) {
            $disciplina_id[$i] = $professor[$i]['disciplina_id'];
            $nome_disciplina[$i] = $professor[$i]['nome_disciplina'];
            for ($j = 0; $j < (count($professor[$i]) - 3); $j++) {
                $turma =  AvaliacaoTrait::pegarAnoTurmaCoord($professor[$i][$j]['turma_id']);
                if($turma === false){
                    return view('avaliac-aluno/erroaval')->with('erro', "Turma(as) sem aluno(os)!");
                }
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
        $incremento = 0;
        for ($i = 0; $i < count($professor); $i++) {
            for ($j = 0; $j < (count($professor[$i]) - 3); $j++) {
                if ($incremento === 0) {
                    $cursos[$incremento] = $professor[$i][$j]['nome_curso'];
                    $incremento++;
                }
                if (!in_array($professor[$i][$j]['nome_curso'], $cursos)) {
                    $cursos[$incremento] = $professor[$i][$j]['nome_curso'];
                    $incremento++;
                }
            }
        }
        $trimestre = AvaliacaoTrait::pegarTrimestre();
        $aluno = AvaliacaoTrait::pegarNotaAluno($disciplina_id, $turmas);
        $erro = AvaliacaoTrait::erros($aluno);
        if($erro === true){
            return view('avaliac-aluno/avaliacoes-aluno', compact(['aluno', 'nome_disciplina', 'nome_turma', 'cursos']));
        } else{
            return redirect()->route('erroavaliar')->with('erro', $erro);
        }
    }

    public function indexUpdate($id_aluno, $id_disciplina){
        $trimestre = Trimestre::where('status', 1)->get();
        $notas = Nota::with('aluno.candidato.pessoa', 'aluno.turmas')
        ->where('aluno_id', $id_aluno)
        ->where('disciplina_id', $id_disciplina)
        ->where('id_trimestre', $trimestre[0]->trimestre_id)->get();
        if(count($notas) < 1){
            return redirect()->back()->with('erro', "Nenhuma avaliação encontrada!");
        }

        return view('avaliac-aluno/edit-valiac-aluno', compact('notas'));
    }

    public function store(Request $request)
    {
        $n = 0;
        $inc = 0;
        $falha = 0;
        $sucesso = 0;
        for ($i = 0; $i < count($request->nota_aluno); $i++) {
            if($request->nota_aluno[$i] === null){
                $n++;
            } else{
                $aluno[$inc] = (int) $request->aluno_id[$i];
                $notas[$inc] = (int) $request->nota_aluno[$i];
                $inc++;
            }
        }
        //dd($nota);
        if($n === count($request->nota_aluno)){
            return redirect()->back()->with('erro', "Nenhuma nota foi inserida!");
        }
        $trimestre = Trimestre::where('status', 1)->get();

        if($request->tipo_prova === "ac"){
            foreach ($aluno as $chave => $valor) {
            $dados = [
                'nota_aluno' => $notas[$chave],
                'tipo_prova' => "Avaliação Contínua",
                'descricao_nota' => null,
                'aluno_id' => $valor,
                'disciplina_id' => $request->disciplina_id[0],
                'id_trimestre' => $trimestre[0]->trimestre_id
            ];
            Nota::create($dados);
            $sucesso++;
        }
    } else{
            for ($i = 0; $i <count($notas); $i++) {
            $nota = Nota::where('tipo_prova', $request->tipo_prova)
            ->where('aluno_id', $aluno[$i])
            ->where('disciplina_id', $request->disciplina_id[0])
            ->where('id_trimestre', $trimestre[0]->trimestre_id)
            ->get();
            //dd($nota);
            if(count($nota) > 0){
                $falha++;
            } else{
                $dados = [
                    'nota_aluno' => $notas[$i],
                    'tipo_prova' => $request->tipo_prova,
                    'descricao_nota' => null,
                    'aluno_id' => $aluno[$i],
                    'disciplina_id' => $request->disciplina_id[0],
                    'id_trimestre' => $trimestre[0]->trimestre_id
                ];
                Nota::create($dados);
            }
        }
    }

    if($request->tipo_prova === "nota_administrativa"){
        for ($i = 0; $i <count($notas); $i++) {
            $nota = Nota::where('tipo_prova', $request->tipo_prova)
            ->where('aluno_id', $aluno[$i])
            ->where('disciplina_id', $request->disciplina_id[0])
            ->where('id_trimestre', $trimestre[0]->trimestre_id)
            ->get();
            //dd($nota);
            if(count($nota) > 0){
                $falha++;
            } else{
                $dados = [
                    'nota_aluno' => $notas[$i],
                    'tipo_prova' => $request->tipo_prova,
                    'descricao_nota' => null,
                    'aluno_id' => $aluno[$i],
                    'disciplina_id' => $request->disciplina_id[0],
                    'id_trimestre' => $trimestre[0]->trimestre_id
                ];
                Nota::create($dados);
                $sucesso++;
            }
        }
    }
    if ($sucesso > 0 && $falha > 0) {
        return redirect()->back()->with('sucesso', "Avaliação realizada com sucesso, mas há " . $falha . " aluno(s) que já possuía(m) uma nota!");
    } elseif($sucesso > 0 && $falha === 0){
        return redirect()->back()->with('sucesso', "Avaliação realizada com sucesso!");
    } elseif ($sucesso === 0 && $falha > 0) {
        return redirect()->back()->with('erro', "Não foi possível realizar a avaliação porque o(s) aluno(s) já possuem uma nota!");
    }
    return redirect()->back()->with('sucesso', "Avaliação realizada com sucesso!");

    }


    public function update($nota, Request $request)
    {
        if($request->nota_aluno == null){
            return redirect()->back()->with('erro', "O campo para a inserção da nota não pode estar vazio!");
        }
        $nota = Nota::find($nota);

        $nota->nota_aluno = $request->nota_aluno;
        $nota->descricao_nota = $request->conteudo;
        $nota->save();
        return redirect()->back()->with('sucesso', "Nota alterada com sucesso!");
    }

    }
