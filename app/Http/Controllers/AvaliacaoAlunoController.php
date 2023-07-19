<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nota;
use App\Traits\AvaliacaoTrait;
use App\Models\Trimestre;
use Illuminate\Support\Facades\Auth;
use App\Models\Professor;
use App\Models\ResultadoFinalAluno;
use App\Models\Disciplina;

class AvaliacaoAlunoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if($user->cargo_usuario === "Administrador" || $user->cargo_usuario === "Subdirector"){
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
        }
    }
}
        // if(isset($request->npt)){
        //     $nota = Nota::where('tipo_prova', "Prova Trimestre")
        //     ->where('aluno_id', $valor)
        //     ->where('disciplina_id', $request->disciplina_id[0])
        //     ->where('id_trimestre', $trimestre[0]->trimestre_id)
        //     ->get();
        //     if(count($nota) > 0){
        //         $falha++;
        //     } else{
        //         $dados = [
        //             'nota_aluno' => $nota[$chave],
        //             'tipo_prova' => "Prova Trimestre",
        //             'descricao_nota' => null,
        //             'aluno_id' => $valor,
        //             'disciplina_id' => $request->disciplina_id[0],
        //             'id_trimestre' => $trimestre[0]->trimestre_id
        //         ];
        //         Nota::create($dados);
        //     }
        // }
        // if(isset($request->exame)){
        //     $nota = Nota::where('tipo_prova', "Exame")
        //     ->where('aluno_id', $valor)
        //     ->where('disciplina_id', $request->disciplina_id[0])
        //     ->where('id_trimestre', $trimestre[0]->trimestre_id)
        //     ->get();
        //     if(count($nota) > 0){
        //         $falha++;
        //     } else{
        //         $dados = [
        //             'nota_aluno' => $nota[$chave],
        //             'tipo_prova' => "Exame",
        //             'descricao_nota' => null,
        //             'aluno_id' => $valor,
        //             'disciplina_id' => $request->disciplina_id[0],
        //             'id_trimestre' => $trimestre[0]->trimestre_id
        //         ];
        //         Nota::create($dados);
        //     }
        // }
        // if(isset($request->recurso)){
        //     $nota = Nota::where('tipo_prova', "Recurso")
        //     ->where('aluno_id', $valor)
        //     ->where('disciplina_id', $request->disciplina_id[0])
        //     ->where('id_trimestre', $trimestre[0]->trimestre_id)
        //     ->get();
        //     if(count($nota) > 0){
        //         $falha;
        //     } else{
        //         $dados = [
        //             'nota_aluno' => $nota[$chave],
        //             'tipo_prova' => "Recurso",
        //             'descricao_nota' => null,
        //             'aluno_id' => $valor,
        //             'disciplina_id' => $request->disciplina_id[0],
        //             'id_trimestre' => $trimestre[0]->trimestre_id
        //         ];
        //         Nota::create($dados);
        //     }
        // }
        // if(isset($request->exame_especial)){
        //     $nota = Nota::where('tipo_prova', "Exame Especial")
        //     ->where('aluno_id', $valor)
        //     ->where('disciplina_id', $request->disciplina_id[0])
        //     ->where('id_trimestre', $trimestre[0]->trimestre_id)
        //     ->get();
        //     if(count($nota) > 0){
        //         $falha++;
        //     } else{
        //         $dados = [
        //             'nota_aluno' => $nota[$chave],
        //             'tipo_prova' => "Exame Especial",
        //             'descricao_nota' => null,
        //             'aluno_id' => $valor,
        //             'disciplina_id' => $request->disciplina_id[0],
        //             'id_trimestre' => $trimestre[0]->trimestre_id
        //         ];
        //         Nota::create($dados);
        //     }
        // }
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

    public function indexRecurso(){
        $busca = (int) request('busca');
        if ($busca) {
            $ano_lectivo = AvaliacaoTrait::pegarAnoLectivo();
            $dados = ResultadoFinalAluno::with('alunos.candidato.pessoa', 'alunos.anoTurma.turma.curso', 'ano_lectivos')
            ->where('aluno_id', $busca)
            ->where('ano_lectivo_id', $ano_lectivo[0]->ano_lectivo_id)
            ->where('situacao', "Exame")
            ->get();
            if(count($dados) < 1){
                return redirect()->back()->with('erro', "Nenhum registro encontrado!");
            }
            $id_cadeiras = json_decode($dados[0]->id_cadeiras_def, true);
            foreach ($id_cadeiras as $chave => $valor) {
                $disciplinas[$chave - 1] = Disciplina::find($id_cadeiras[$chave]);
            }
            return view('avaliac-aluno/recurso', compact(['dados', 'disciplinas']));
        }
        $dados = array();
        $disciplinas = array();
        return view('avaliac-aluno/recurso', compact('dados', 'disciplinas'));
    }

    public function indexUpdateRecurso($aluno_id){
        $trimestre = Trimestre::where('status', 1)->get();
        $dados = Nota::with('aluno.candidato.pessoa', 'aluno.turmaAno', 'disciplina')
        ->where('aluno_id', $aluno_id)
        ->where('id_trimestre', $trimestre[0]->trimestre_id)
        ->where('tipo_prova', "Recurso")
        ->get();
        if(count($dados) < 1){
            return redirect()->back()->with('erro', "Nenhum registro de recurso encontrado!");
        }
        return view('avaliac-aluno/edit-recurso', compact('dados'));
    }

    public function indexExameEspecial(){
        $busca = (int) request('busca');
        if ($busca) {
            $ano_lectivo = AvaliacaoTrait::pegarAnoLectivo();
            $dados = ResultadoFinalAluno::with('alunos.candidato.pessoa', 'alunos.anoTurma.turma.curso', 'ano_lectivos')
            ->where('aluno_id', $busca)
            ->where('ano_lectivo_id', $ano_lectivo[0]->ano_lectivo_id)
            ->where('situacao', "Ñ/Transita")
            ->get();
            if(count($dados) < 1){
                return redirect()->back()->with('erro', "Nenhum registro encontrado!");
            }
            $id_cadeiras = json_decode($dados[0]->id_cadeiras_def, true);
            foreach ($id_cadeiras as $chave => $valor) {
                $disciplinas[$chave - 1] = Disciplina::find($id_cadeiras[$chave]);
            }
            return view('avaliac-aluno/exame', compact(['dados', 'disciplinas']));
        }
        $dados = array();
        $disciplinas = array();
        return view('avaliac-aluno/exame', compact('dados', 'disciplinas'));
    }

    public function indexUpdateExameEspecial($aluno_id){
        $trimestre = Trimestre::where('status', 1)->get();
        $dados = Nota::with('aluno.candidato.pessoa', 'aluno.turmaAno', 'disciplina')
        ->where('aluno_id', $aluno_id)
        ->where('id_trimestre', $trimestre[0]->trimestre_id)
        ->where('tipo_prova', "Exame Especial")
        ->get();
        if(count($dados) < 1){
            return redirect()->back()->with('erro', "Nenhum registro de exame especial encontrado!");
        }
        return view('avaliac-aluno/edit-exame', compact('dados'));
    }
}
