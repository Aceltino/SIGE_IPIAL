<?php

namespace App\Http\Controllers;

use App\Traits\AnoLectivoTrait;
use App\Traits\EscolaTrait;
use App\Traits\PessoaTrait;
use App\Traits\CursoTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\InscricaoRequest;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;

class InscricaoController extends Controller
{
    use PessoaTrait;
    use EscolaTrait;
    use AnoLectivoTrait;
    use CursoTrait;
    public function create(){
        return view('inscricao/inscr-candidato');
    }

    public function store(InscricaoRequest $input)
    {
        $request = $input->validated(); // Inputs validadas
        $dadosPessoa = [
            'nome_completo'=>$request['nome_completo'],
            'num_bi'=>strtoupper($request['num_bi']),
            'data_nascimento'=>$request['data_nascimento'],
            'genero'=>$request['genero'],
        ];
        $idPessoa = $this->storePessoa($dadosPessoa);
        if(!$idPessoa)
        {
            $msg="Fique atento nos dados de identifcação, este candidato já está inscrito!";
            return redirect()->back()->with("ErroPessoa",$msg);
        }

        $dadosTelefone=[
            //Dados do candidato
            'num_tel'=>$request['num_tel'],
            'pessoa_id' => $idPessoa
        ];
        $telefone = TelefoneController::storeTelefone($dadosTelefone);
        if(!$telefone)
        {
            $msg="Lamentamos! Este número de telefone já existe em nossa base de dados, mas a candi";
            return redirect()->back()->with("ErroTelefone",$msg);
        }
        echo "Aceltino";
        // $dadosEscola = [
        //     'nome_escola'=>$request->nome_escola,
        //     'turno'=>$request->turno,
        //     'num_processo'=>$request->num_processo,
        //     'num_aluno'=>$request->num_aluno,
        //     'ultimo_anoLectivo'=>$request->ultimo_anoLectivo,
        //     'turma_aluno' =>$request->turma_aluno,
        //     'ling_port'   => $request->LinguaP,
        //     'matematica'  => $request->Matematic,
        //     'fisica' =>  $request->Fisic,
        //     'quimica' => $request->Quimic
        // ];
        // $idEscola = $this->storeEscola($dadosEscola);
        // if(!$idEscola)
        // {
        //     $msg="Lamentamos! Certifique de que introduziu os dados correctos ou tente mais tarde...";
        //     return redirect()->back()->with("ErroCadastro",$msg);
        // }

        // $idAnolectivo = $this->pegarAnoLectivo();
        // if(!$idAnolectivo)
        // {
        //     $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
        //     return redirect()->back()->with("ErroCadastro",$msg);
        // }

        // $dadosCandidato=[
        //     //Dados do candidato
        //     'nome_pai_cand'=>$request->nome_pai_cand,
        //     'nome_mae_cand'=>$request->nome_mae_cand,
        //     'naturalidade_cand'=>$request->naturalidade_cand,
        //     'status' => "Pendente",
        //     'pessoa_id' => $idPessoa,
        //     'ano_lectivo_id' => $idAnolectivo,
        //     'escola_proveniencia_id' => $idEscola
        // ];
        // $candidato = CandidatoController::store($dadosCandidato);
        // if(!$candidato)
        // {
        //     $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
        //     return redirect()->back()->with("ErroCadastro",$msg);
        // }

        // for($i = 1; $i <= 4; $i++)
        // {
        //     $id[$i] = $this->pegarIdCurso($request->input('curso' . $i));

        //     if(!$id[$i])
        //     {
        //         $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
        //         return redirect()->back()->with("ErroCadastro",$msg);
        //     }
        // }

        // $candCurso = [
        //     'curso_id' => $id,
        //     'candidato_id' => $candidato->candidato_id
        // ];
        // $cursos = CandidatoCursoController::store($candCurso);
        // if(!$cursos)
        // {
        //     $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
        //     return redirect()->back()->with("ErroCadastro",$msg);
        // }

        // $msg="Candidato inscrito com sucesso!";
        // return redirect()->back()->with("Sucesso",$msg);

    }
}
