<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MatriculaRequest;
// use App\Http\Requests\MatriculaStoreRequest;
use Illuminate\Http\Request;
use App\Models\{
    Candidato,
};

class MatriculaController extends Controller
{
    public function create($id)
    {
        $candidato = CandidatoController::pegarDadosCandidato($id);
        return view('matricula.matricular-aluno',[
            'candidato' => $candidato[0]
        ]);
    }

    public function store(MatriculaRequest $input)
    {
        $request = $input->validated(); // Inputs validadas
        dd($request);

        $dadosPessoa = [
            'nome_completo'=> $request['nome_completo'],
            'data_nascimento'=> $request['data_nascimento'],
            'genero'=> $request['genero'],
            'telefone' => $request['num_tel'],
            'id' => $request['id']
        ];

        $idPessoa = $this->updatePessoa($dadosPessoa);
        if(!$idPessoa)
        {
            $msg="Fique atento nos dados de identifcação, este candidato já está inscrito!";
            return redirect()->back()->with("ErroPessoa",$msg);
        }

        $dadosEscola = [
            'nome_escola'=>$request['nome_escola'],
            'turno'=>$request['turno'],
            'num_aluno'=>$request['num_aluno'],
            'turma_aluno' =>$request['turma_aluno'],
            'ling_port'   => $request['LinguaP'],
            'matematica'  => $request['Matematic'],
            'fisica' =>  $request['Fisic'],
            'quimica' => $request['Quimic'],
            'id' => $request['id']
        ];
        $idEscola = EscolaController::updateEscola($dadosEscola);
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
            'nome_pai_cand'=>$request['nome_pai_cand'],
            'nome_mae_cand'=>$request['nome_mae_cand'],
            'pessoa_id' => $idPessoa,
            'ano_lectivo_id' => $idAnolectivo,
            'escola_proveniencia_id' => $idEscola,
            'id' => $request['id']
        ];
        $candidato = CandidatoController::updateCandidato($dadosCandidato);
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
            'candidato_id' => $request['id']
        ];
        $cursos = CandidatoCursoController::updateCandCurso($candCurso);

        if(!$cursos)
        {
            $msg="Lamentamos! Dados não atualizados, um candidato não pode escolher o mesmo curso mais de uma vez. ...";
            return redirect()->back()->with("ErroCurso",$msg);
        }

        $msg="Candidato actualizado com sucesso!";
        return Redirect::route('inscricao-index')->with("Sucesso",$msg);
    }
}
