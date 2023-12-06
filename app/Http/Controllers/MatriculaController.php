<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Http\Requests\MatriculaRequest;
use App\Http\Requests\MatriculaupdateRequest;
use App\Http\Requests\RegistrarRequest;
use Carbon\Carbon;
// use App\Http\Requests\MatriculaStoreRequest;
use App\Models\{
    Candidato,
    User,
    Curso,
    Turma,
    Classe,
};
use App\Traits\PessoaTrait;
use Illuminate\Support\Facades\Redirect;

class MatriculaController extends Controller
{
    use PessoaTrait;

    public function index(){
        $cursos = Curso::all();
        $turmas = Turma::all();
        return view('matricula/matriculas', compact('cursos', 'turmas'));
    }

    public function create($id)
    {
        $anoLectivo = AnoLectivoController::pegarAnoLectivo(AnoLectivoController::pegarIdAnoLectivo());
        $dataInicioMAtricula = Carbon::parse($anoLectivo->data_inicio_matricula);
        $dataFimMatricula = Carbon::parse($anoLectivo->data_fim_matricula);
        $dataAtual = Carbon::now();

        if( $dataAtual < $dataInicioMAtricula || $dataAtual > $dataFimMatricula )
        {
            return redirect()->back()->with('Erro', 'Não está na epoca de matricula.');
        }

        $candidato = CandidatoController::pegarDadosCandidato($id);
        return view('matricula.matricular-aluno',[
            'candidato' => $candidato[0]
        ]);
    }

    public function store(MatriculaRequest $input)
    {
        $request = $input->validated(); // Inputs validadas
        // dd($request);
        $encarregado = [];
        for($i = 1; $i <= 3; $i++)
        {
            $dadosEnc = [
                'nome_completo'=> $request['nome_enc' . $i],
                'num_bi'=> strtoupper($request['num_bi_enc' . $i]),
                'data_nascimento'=> $request['data_nascimento_enc' . $i],
                'genero'=> $request['genero'. $i],
                'telefone' => $request['telefone' . $i]
            ];

            $consultEncarregado = $this->checkPessoa($dadosEnc);
            if(!empty($consultEncarregado))
            {
                $encarregado[$i] = $consultEncarregado->pessoa_id;
                continue;
            }
            // $checkBI = $this->checkPessoaBI($dadosPessoa['num_bi']);
            // dd($checkBI);

            if($this->checkPessoaBI($dadosEnc['num_bi']))
            {
                $msg="O número de identificação do ". $i ."º encarregado já está sendo utilizado, confirme todos os dados de identificação dele.";
                return redirect()->back()->with("ErroEncarregado",$msg);
            }
        }

        // Atualizando candidato(Pessoas) pela confirmação de dados no formMatricula--
        $candidato = Candidato::find($request['id']);
        $pessoa_id = $candidato->pessoa_id;
        $dadosPessoa = [
            'nome_completo'=> $request['nome_completo'],
            'num_bi'=> $request['num_bi'],
            'genero'=> $request['genero'],
            'pessoa_id' => $pessoa_id
        ];
        $Pessoa = $this->updatePessoa($dadosPessoa);

        if(!$Pessoa)
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
            'num_processo' => $request['num_processo'],
            'turma_aluno' =>$request['turma_aluno'],
            'ultimo_anoLectivo' =>$request['ultimo_anoLectivo'],
            'escola_proveniencia_id' => $escola_id
        ];
        $Escola = EscolaController::updateEscola($dadosEscola);

        if(!$Escola)
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
        if(!$candidato)
        {
            $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
            return redirect()->back()->with("ErroCadastro",$msg);
        }

        $curso_id = CursoController::pegarIdCurso($request['curso_escolhido']);
        //dd($curso_id);
        $dadosAluno=[
            'curso_id'=>$curso_id,
            'status'=> 0,
            'candidato_id'=>intval($request['id'])
        ];
        $alunoId = AlunoController::store($dadosAluno);

        if(!$alunoId)
        {
            $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
            return redirect()->back()->with("ErroCadastro",$msg);
        }

        for($i = 1; $i <= 3; $i++)
        {
            // $encarregado[$i] = null;
            
                if(!empty($encarregado[$i]))
                {
                    $idPessoa = $encarregado[$i];
                    goto cadEncarregado;
                }
                if($this->checkPessoaBI($request['num_bi_enc' . $i]))
                {
                    $msg="O número de identificação do ". $i ."º encarregado já está sendo utilizado, confirme todos os dados de identificação dele.";
                    return redirect()->back()->with("ErroEncarregado",$msg);
                }
                $dadosPessoa = [
                    'nome_completo'=> $request['nome_enc' . $i],
                    'num_bi'=> strtoupper($request['num_bi_enc' . $i]),
                    'data_nascimento'=> $request['data_nascimento_enc' . $i],
                    'genero'=> $request['genero'. $i],
                    'telefone' => $request['telefone' . $i]
                ];    
                $idPessoa = $this->storePessoa($dadosPessoa);  
                cadEncarregado:

            $dadosEncarregado = [
                'grau_parentensco_enc'=> $request['grau' . $i],
                'pessoa_id'=> $idPessoa
            ];
            
            $idEncarregado = EncarregadoController::storeEncarregado($dadosEncarregado);
            $id[$i] = $idEncarregado;
        }

        $alunoEncarregado = [
            'encarregado' => $id,
            'aluno_id' => $alunoId
        ];
        $alunoEncs = AlunoEncarregadoController::store($alunoEncarregado);
        if(!$alunoEncs)
        {
            $msg="Fique atento nos dados de identifcação, este candidato já está inscrito!";
            return redirect()->back()->with("ErroPessoa",$msg);
        }

        $posicao = 0; // posição do caractere desejado(Onde começa a contagem do caracter)
        $abreNome = substr($request['nome_completo'], $posicao,2);
        $abreSobreNome = substr($request['nome_enc1'], $posicao,2);

        $dataFimMatricula = AnoLectivoController::pegarAnoLectivo(AnoLectivoController::pegarIdAnoLectivo());
        $dataMatriculaCarboon = Carbon::parse($dataFimMatricula->data_fim_matricula);
        $dataMatriculaCarboon->addDay(2);
        $dataAcesso = $dataMatriculaCarboon->format('d-m-Y');
        $hexAleatorio = Str::random(8);
        $dadosUser=
        [
            'nome_usuario'=>$abreNome.count(User::all()).$abreSobreNome,
            'email'=>$request['email'],
            'password'=>bcrypt($hexAleatorio),
            'cargo_usuario'=>'Aluno',
            'status_usuario'=>0,
            'pessoa_id'=>$pessoa_id,
        ];
        $user = UserController::store($dadosUser);

        $sendEmail = AuthController::envioCredenciasEmail($user, $hexAleatorio, $dataAcesso);
        if(!$sendEmail)
        {
            $msg="Fique atento nos dados de identifcação, este candidato já está inscrito!";
            return redirect()->back()->with("ErroPessoa",$msg);
        }

        if(!$user)
        {
            $msg="Fique atento nos dados de identifcação, este candidato já está inscrito!";
            return redirect()->back()->with("ErroPessoa",$msg);
        }

        CandidatoController::atualizarMatriculado($request);
        $msg="Candidato matriculado com sucesso!";
        return Redirect::route('inscricao-index')->with("Sucesso",$msg);
    }

    public function edit($id)
    {
        $aluno = AlunoController::pegarDadosMatriculado($id);

        return view('matricula.edit-matricula',[
            'aluno' => $aluno[0]
        ]);
    }

    public function update(MatriculaupdateRequest $input)
    {
        $request = $input->validated(); // Inputs validadas

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
            $msg="Fique atento nos dados de identifcação deste aluno, este número de identificação já está sendo utilizado!";
            return redirect()->back()->with("ErroPessoa",$msg);
        }

        $dadosCandidato=[
            'nome_pai_cand'=>$request['nome_pai_cand'],
            'nome_mae_cand'=>$request['nome_mae_cand'],
            'naturalidade_cand'=>$request['naturalidade_cand'],

            'candidato_id' => $request['id']
        ];
        $candidato = CandidatoController::updateCandidato($dadosCandidato);
        if(!$candidato)
        {
            $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
            return redirect()->back()->with("ErroCadastro",$msg);
        }

        $encarregados = AlunoController::pegarEncarregados($request['aluno_id']);
        for($i = 0; $i < 3 ; $i++)
        {
            $dadosPessoa = [
                'telefone' => $request['telefone' . $i],
                'pessoa_id' => $encarregados[$i]['pessoa_id']
            ];
        $this->updatePessoa($dadosPessoa);
        }
        $msg="Aluno actualizado com sucesso!";
        return Redirect::route('Matriculas')->with("Sucesso",$msg);
 
    }

// BOTÃO ATRIBUIR TURMA
    public function atribuirTurma()
    {
         $alunos = AlunoTurmaController::SelecionarTurma(); // Atribuir turmas aos recém matriculado da 10ª classe.

        if($alunos !== true)
        {
            return redirect()->back()->with("ErroMatricula", $alunos);
        }
        CandidatoController::eliminarAdmitidos();

        $msg = "Os alunos foram/estão atribuidos nas suas devidas turmas!";
        return Redirect::route('Matriculas')->with("Sucesso", $msg);
    }

    public function readmitirEdit($id)
    {
        $aluno = AlunoController::pegarReprovado($id);
        $alunoTurma = AlunoTurmaController::alunoNAdmtido($aluno);
        
        if($alunoTurma !== true)
        {
            return redirect()->back()->with("ErroMatricula", $alunoTurma);
        }
        $msg = "O aluno foi readmitido com sucesso, consulte por ele!";
        return Redirect::route('Matriculas')->with("Sucesso", $msg);
    }


    public function anularMatricula($id)
    {
        // dd($id);
        $turma = AlunoController::alunoTurma(intval($id));
        $aluno = [
            'aluno' => $id,
            'turma' => $turma,
        ];

        AlunoTurmaController::AnulouMatricula($aluno);
        $userId = AlunoController::pegarIdUser($id);
        $dadosUser=[
            'usuario_id'=> $userId,
            'status_usuario'=>0,
        ];
        UserController::updateAluno($dadosUser);

        return redirect()->route('Matriculas')->with('success', 'Matricula anulada com sucesso.');
    }

    public function eliminarMatricula($id)
    {
        // dd($id);
        $cand = AlunoController::alunoCandId(intval($id));
        // dd($cand);
        $pessoa = $this->deletePessoa($cand);

        if(!$pessoa)
        {
            return redirect()->back()->with("ErroMatricula", "Este aluno já não existe em nosso banco de dados");
        }

        return redirect()->route('Matriculas')->with('success', 'Aluno eliminado com sucesso.');
    }

    public function registrarView()
    {
        $vagas = AlunoTurmaController::pegarVagas();
        $classe = Classe::all();
        $cursos = Curso::all();
        return view('matricula.registrar-aluno', compact('cursos','vagas', 'classe'));
    }

    public function registrarStore(RegistrarRequest $input)
    {
        $request = $input->validated(); // Inputs validadas
        // dd($request);
        $encarregado = [];
        for($i = 1; $i <= 3; $i++)
        {
            $dadosEnc = [
                'nome_completo'=> $request['nome_enc' . $i],
                'num_bi'=> strtoupper($request['num_bi_enc' . $i]),
                'data_nascimento'=> $request['data_nascimento_enc' . $i],
                'genero'=> $request['genero'. $i],
                'telefone' => $request['telefone' . $i]
            ];

            $consultEncarregado = $this->checkPessoa($dadosEnc);
            if(!empty($consultEncarregado))
            {
                $encarregado[$i] = $consultEncarregado->pessoa_id;
                continue;
            }
            // $checkBI = $this->checkPessoaBI($dadosPessoa['num_bi']);
            // dd($checkBI);

            if($this->checkPessoaBI($dadosEnc['num_bi']))
            {
                $msg="O número de identificação do ". $i ."º encarregado já está sendo utilizado, confirme todos os dados de identificação dele.";
                return redirect()->back()->with("ErroEncarregado",$msg);
            }
        }

        $dadosPessoa = [
            'nome_completo'=> $request['nome_completo'],
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
            'nome_escola'=>$request['nome_escola'],
            'turno'=>$request['turno'],
            'num_processo'=>$request['num_processo'],
            'num_aluno'=>$request['num_aluno'],
            'ultimo_anoLectivo'=>$request['ultimo_anoLectivo'],
            'turma_aluno' =>$request['turma_aluno'],
        ];
        $idEscola = EscolaController::storeEscola($dadosEscola);
        if(!$idEscola)
        {
            $msg="Lamentamos! Certifique de que introduziu os dados correctos ou tente mais tarde...";
            return redirect()->back()->with("ErroEncarregado",$msg);
        }

        $idAnolectivo = AnoLectivoController::pegarIdAnoLectivo();
        if(!$idAnolectivo)
        {
            $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
            return redirect()->back()->with("ErroEncarregado",$msg);
        }

        $nomeCurso = CursoController::pegarNome(intval($request['curso_escolhido'])); 
        $dadosCandidato=[
            'nome_pai_cand'=>$request['nome_pai_cand'],
            'nome_mae_cand'=>$request['nome_mae_cand'],
            'naturalidade_cand'=>$request['naturalidade_cand'],
            'status' => 'Matriculado',
            'cursoAdmitido' => $nomeCurso,
            'pessoa_id' => $idPessoa,
            'ano_lectivo_id' => $idAnolectivo,
            'escola_proveniencia_id' => $idEscola
        ];
        $candidato = CandidatoController::store($dadosCandidato);
        if(!$candidato)
        {
            $msg="Lamentamos! Dados não cadastrado, tente este processo mais tarde...";
            return redirect()->back()->with("ErroEncarregado",$msg);
        }
        $pessoa_id =$candidato->pessoa_id;

        $curso_id = intval($request['curso_escolhido']);
        //dd($curso_id);
        $dadosAluno=[
            'curso_id'=>$curso_id,
            'status'=> 1,
            'candidato_id'=>$candidato->candidato_id
        ];
        $alunoId = AlunoController::store($dadosAluno);

        if(!$alunoId)
        {
            $msg="Lamentamos! Aluno não registrado, tente este processo mais tarde...";
            return redirect()->back()->with("ErroEncarregado",$msg);
        }

        for($i = 1; $i <= 3; $i++)
        {
            // $encarregado[$i] = null;
            
                if(!empty($encarregado[$i]))
                {
                    $idPessoa = $encarregado[$i];
                    goto cadEncarregado;
                }
                if($this->checkPessoaBI($request['num_bi_enc' . $i]))
            {
                $msg="O número de identificação do ". $i ."º encarregado já está sendo utilizado, confirme todos os dados de identificação dele.";
                return redirect()->back()->with("ErroEncarregado",$msg);
            }
                $dadosPessoa = [
                    'nome_completo'=> $request['nome_enc' . $i],
                    'num_bi'=> strtoupper($request['num_bi_enc' . $i]),
                    'data_nascimento'=> $request['data_nascimento_enc' . $i],
                    'genero'=> $request['genero'. $i],
                    'telefone' => $request['telefone' . $i]
                ];    
                $idPessoa = $this->storePessoa($dadosPessoa);  
                cadEncarregado:

            $dadosEncarregado = [
                'grau_parentensco_enc'=> $request['grau' . $i],
                'pessoa_id'=> $idPessoa
            ];
            
            $idEncarregado = EncarregadoController::storeEncarregado($dadosEncarregado);
            $id[$i] = $idEncarregado;
        }

        $alunoEncarregado = [
            'encarregado' => $id,
            'aluno_id' => $alunoId
        ];
        $alunoEncs = AlunoEncarregadoController::store($alunoEncarregado);
        if(!$alunoEncs)
        {
            $msg="Lamentamos! Aluno não registrado, tente este processo mais tarde...";
            return redirect()->back()->with("ErroPessoa",$msg);
        }

        $posicao = 0; // posição do caractere desejado(Onde começa a contagem do caracter)
        $abreNome = substr($request['nome_completo'], $posicao,2);
        $abreSobreNome = substr($request['nome_enc1'], $posicao,2);

        $dataFimMatricula = AnoLectivoController::pegarAnoLectivo(AnoLectivoController::pegarIdAnoLectivo());
        $dataMatriculaCarboon = Carbon::parse($dataFimMatricula->data_fim_matricula);
        $dataMatriculaCarboon->addDay();
        $dataAcesso = $dataMatriculaCarboon->format('d-m-Y');
        $hexAleatorio = Str::random(8);
        $dadosUser=
        [
            'nome_usuario'=>$abreNome.count(User::all()).$abreSobreNome,
            'email'=>$request['email'],
            'password'=>bcrypt($hexAleatorio),
            'cargo_usuario'=>'Aluno',
            'status_usuario'=>1,
            'pessoa_id'=>$pessoa_id,
        ];
        $user = UserController::store($dadosUser);

        $sendEmail = AuthController::envioCredenciasEmail($user, $hexAleatorio, $dataAcesso);
        if(!$sendEmail)
        {
            $msg="Fique atento nos dados de identifcação, este candidato já está inscrito!";
            return redirect()->back()->with("ErroPessoa",$msg);
        }

        if(!$user)
        {
            $msg="Lamentamos! Aluno não registrado, tente este processo mais tarde...";
            return redirect()->back()->with("ErroPessoa",$msg);
        }

        $dadosAlunoTurma =
        [
            'aluno_id'=> $alunoId,
            'classe_id'=> intval($request['classe_escolhido']),
            'turno_id'=> TurnoController::pegarIdTurno($request['turno_escolhido']),
            'curso_id'=>$curso_id
        ];

        AlunoTurmaController::alunoTransferido($dadosAlunoTurma);
        $msg = "Aluno cadastrado com sucesso!";
        return Redirect::route('registrar-view')->with("Sucesso", $msg);
    }

}
