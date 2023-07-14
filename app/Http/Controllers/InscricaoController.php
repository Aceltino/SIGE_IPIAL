<?php

namespace App\Http\Controllers;

use App\Traits\PessoaTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\InscricaoRequest;
use App\Http\Requests\InscricaoUpdateRequest;
use App\Models\Candidato;
use App\Models\Curso;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

// use Illuminate\Support\Facades\Validator;

class InscricaoController extends Controller
{
    use PessoaTrait;

    public function index(){
        $cursos = Curso::all();
        if(!$cursos)
        {
            return view('inscricao/inscricoes');
        }
        return view('inscricao/inscricoes',compact('cursos'));
    }
    public function create()
    {
        $cursos = Curso::all();
        if(!$cursos)
        {
            return view('inscricao/inscricoes');
        }
        return view('inscricao/inscr-candidato',compact('cursos'));
    }

    public function store(InscricaoRequest $input)
    {
        // strtoupper -> Colocar esta função em todas as inputs
        $request = $input->validated(); // Inputs validadas

        $curso = CursoController::quantidadeCurso();

        for($i = 1; $i <= $curso; $i++)
        {
            $cursoValidado[$i] = $request['curso' . $i];
        }

        $validacaoCurso = CandidatoCursoController::validarCurso($cursoValidado);

        if(!$validacaoCurso)
        {
            $msg="Lamentamos! Dados não cadastrado, um candidato não pode escolher o mesmo curso mais de uma vez. ...";
            return redirect()->back()->with("ErroCurso",$msg);
        }

        $dadosPessoa = [
            'nome_completo'=> strtoupper($request['nome_completo']),
            'num_bi'=> strtoupper($request['num_bi']),
            'data_nascimento'=> $request['data_nascimento'],
            'genero'=> $request['genero'],
            'telefone' => $request['num_tel']
        ];

        $idPessoa = $this->storePessoa($dadosPessoa);
        if(!$idPessoa)
        {
            $msg="Fique atento nos dados de identifcação, este candidato já está inscrito!";
            return redirect()->back()->with("ErroPessoa",$msg);
        }

        $dadosEscola = [
            'nome_escola'=>strtoupper($request['nome_escola']),
            'turno'=>$request['turno'],
            'num_processo'=>$request['num_processo'],
            'num_aluno'=>$request['num_aluno'],
            'ultimo_anoLectivo'=>$request['ultimo_anoLectivo'],
            'turma_aluno' =>strtoupper($request['turma_aluno']),
            'ling_port'   => $request['LinguaP'],
            'matematica'  => $request['Matematic'],
            'fisica' =>  $request['Fisic'],
            'quimica' => $request['Quimic']
        ];
        $idEscola = EscolaController::storeEscola($dadosEscola);
        if(!$idEscola)
        {
            $msg="Lamentamos! Certifique de que introduziu os dados correctos ou tente mais tarde...";
            return redirect()->back()->with("ErroCadastro",$msg);
        }

        $idAnolectivo = AnoLectivoController::pegarIdAnoLectivo();
        if(!$idAnolectivo)
        {
            $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
            return redirect()->back()->with("ErroCadastro",$msg);
        }

        $dadosCandidato=[
            'nome_pai_cand'=>strtoupper($request['nome_pai_cand']),
            'nome_mae_cand'=>strtoupper($request['nome_mae_cand']),
            'naturalidade_cand'=>strtoupper($request['naturalidade_cand']),
            'pessoa_id' => $idPessoa,
            'ano_lectivo_id' => $idAnolectivo,
            'escola_proveniencia_id' => $idEscola
        ];
        $candidato = CandidatoController::store($dadosCandidato);
        if(!$candidato)
        {
            $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
            return redirect()->back()->with("ErroCadastro",$msg);
        }

        for($i = 1; $i <= $curso; $i++)
        {
            $id[$i] = CursoController::pegarIdCurso($request['curso' . $i]);
            if(!$id[$i])
            {
                $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
                return redirect()->back()->with("ErroCadastro",$msg);
            }
        }

        $candCurso = [
            'curso_id' => $id,
            'candidato_id' => $candidato->candidato_id
        ];
        $cursos = CandidatoCursoController::store($candCurso);
        if(!$cursos)
        {
            $msg="Lamentamos! Dados não cadastrado, um candidato não pode escolher o mesmo curso mais de uma vez. ...";
            return redirect()->back()->with("ErroCurso",$msg);
        }
        $msg = "Candidato inscrito com sucesso! Pegue o recibo <a href='".route('recibo', $candidato->candidato_id)."' target='_blank' >aqui</a>.";
        return redirect()->route('inscricao-store')->with("Sucesso", $msg);
          
    }

    public function edit($id)
    {
        $candidato = CandidatoController::pegarDadosCandidato($id);
        return view('inscricao.edit-candidato',[
            'candidato' => $candidato[0]
        ]);
    }

    public function recibo($id)
    {
        $candidato = CandidatoController::pegarDadosCandidato($id);

        $dataAtual = Carbon::now();
        $dataNascimento = Carbon::parse($candidato[0]['Data_Nascimento']);
        $dataNascimento = $dataNascimento->format('d-m-Y');
        $dataAtual = $dataAtual->format('d-m-Y');

        $dadosFunc = 
        [
            'funcionario' =>  Auth::user()->belongPessoa->nome_completo,
            'data_Nasc' => $dataNascimento ,
            'data_actual' => $dataAtual ,

        ];

        // dd($dadosFunc, $candidato[0]);
        // dd($candidato[0]);
        return view('recibo.recibo-inscricao',[
            'candidato' => $candidato[0],
            'funcionario' => $dadosFunc,
        ]);
    }

    public function update(InscricaoUpdateRequest $input)
    {
    $request = $input->validated(); // Inputs validadas

    $candidato = Candidato::find($request['id']);
    $pessoa_id = $candidato->pessoa_id;
    $dadosPessoa = [
        'nome_completo'=> strtoupper($request['nome_completo']),
        'data_nascimento'=> $request['data_nascimento'],
        'genero'=> $request['genero'],
        'telefone' => $request['num_tel'],
        'pessoa_id' => $pessoa_id
    ];

    $idPessoa = $this->updatePessoa($dadosPessoa);
    if(!$idPessoa)
    {
        $msg="Fique atento nos dados de identifcação, este candidato já está inscrito!";
        return redirect()->back()->with("ErroPessoa",$msg);
    }

    $escola_id = $candidato->escola_proveniencia_id;
    $dadosEscola = [
        'nome_escola'=>strtoupper($request['nome_escola']),
        'turno'=>$request['turno'],
        'num_aluno'=>$request['num_aluno'],
        'ultimo_anoLectivo'=>$request['ultimo_anoLectivo'],
        'turma_aluno' =>strtoupper($request['turma_aluno']),
        'escola_proveniencia_id' => $escola_id
    ];

    $idEscola = EscolaController::updateEscola($dadosEscola);
    if(!$idEscola)
    {
        $msg="Lamentamos! Certifique de que introduziu os dados correctos ou tente mais tarde...";
        return redirect()->back()->with("ErroCadastro",$msg);
    }

    $dadosCandidato=[
        'nome_pai_cand'=>strtoupper($request['nome_pai_cand']),
        'nome_mae_cand'=>strtoupper($request['nome_mae_cand']),
        'candidato_id' => $request['id']
    ];
    $candidato = CandidatoController::updateCandidato($dadosCandidato);
    if(!$candidato)
    {
        $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
        return redirect()->back()->with("ErroCadastro",$msg);
    }

    $msg="Candidato actualizado com sucesso!";
    return Redirect::route('inscricao-index')->with("Sucesso",$msg);
    }


}
