<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MatriculaRequest;
// use App\Http\Requests\MatriculaStoreRequest;
use Illuminate\Http\Request;
use App\Models\{
    Candidato,
};
use App\Traits\PessoaTrait;

class MatriculaController extends Controller
{
    use PessoaTrait;
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
        //  dd($request);

        // Atualizando candidato(Pessoas) pela confirmação de dados no formMatricula--
        $candidato = Candidato::find($request['id']);
        $pessoa_id = $candidato->pessoa_id;
        $dadosPessoa = [
            'nome_completo'=> $request['nome_completo'],
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

        // Atualizando candidato(Escola) pela confirmação de dados no formMatricula--
        $escola_id = $candidato->escola_proveniencia_id;
        $dadosEscola = [
            'nome_escola'=>$request['nome_escola'],
            'turno'=>$request['turno'],
            'num_aluno'=>$request['num_aluno'],
            'turma_aluno' =>$request['turma_aluno'],
            'ultimo_anoLectivo' =>$request['ultimo_anoLectivo'],
            'escola_proveniencia_id' => $escola_id
        ];
        $idEscola = EscolaController::updateEscola($dadosEscola);

        if(!$idEscola)
        {
            $msg="Lamentamos! Certifique de que introduziu os dados correctos ou tente mais tarde...";
            return redirect()->back()->with("ErroCadastro",$msg);
        }

        $dadosCandidato=[
            'nome_pai_cand'=>$request['nome_pai_cand'],
            'nome_mae_cand'=>$request['nome_mae_cand'],
            'candidato_id' => $request['id']
        ];
        $candidato = CandidatoController::updateCandidato($dadosCandidato);
        dd($candidato); 

        if(!$candidato)
        {
            $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
            return redirect()->back()->with("ErroCadastro",$msg);
        }


        $msg="Candidato actualizado com sucesso!";
        return Redirect::route('inscricao-index')->with("Sucesso",$msg);
    }
}
