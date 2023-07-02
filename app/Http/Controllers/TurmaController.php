<?php

namespace App\Http\Controllers;

use App\Models\{
    Turma, 
    Turno, 
    Curso,
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isEmpty;

class TurmaController extends Controller
{
    public function createTurma()
    {
        $vagas = AlunoTurmaController::pegarVagasTurno();

        $cursos = Curso::all();
        $turnos = Turno::all();
        //dd($vagas);
        return view('turma.cri-turma', compact('vagas','cursos','turnos'));
    }

    public function storeTurma(Request $request)
    {
        

        $regras_gerais=[
            // 'turmaRestante'=>'required|numeric|min:1|max:2',
            'curso'=>'required|min:1|max:2',
            'turno'=>'required|min:1|max:2'
        ];
    
        $msg_erro=[
            '*.required'=>'Este campo deve ser preenchido',
            '*.string'=>'Este campo deve conter letras',
            // 'turmaRestante'=>'Não é possível acrescentar mais turmas neste turno.',
            'curso'=>'Deve selecionar um curso.',
            'turno'=>'Deve selecionar um turno.',

        ];

        $filtrados=[
            // 'turmaRestante'=> $request->turmaRestante,
            'curso'=> $request->curso,
            'turno'=> $request->turno,
        ];
// dd($request);
        $validator= Validator::make($filtrados,$regras_gerais,$msg_erro);
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // $abreNome = substr($request['nome_completo'], $posicao,2);
        $curso = CursoController::pegarCurso(intval($request->curso));
        $turno = TurnoController::pegarTurno(intval($request->turno));
        dd($turno);
        $turnoSigla =  substr($turno->nome_turno, 0, 1);

         $dadosTurma = [
            'turno' => intval($request->turno),
            'curso' => intval($request->curso),
            'classe' => 1,
        ];

        $turmas = $this->pegarTurma((object) $dadosTurma); 

        if(!$turmas || isEmpty($turmas)) //Considerando que não existe uma turma com estes dados acima
        {
            // dd($dadosTurma);
            dd($turnoSigla);
            $turmaNome = $curso->sigla.'10'.'A'.$turnoSigla;
            dd($turmaNome);
            criarTurma:
            $cadTurma = [
                'nome_turma' => $turmaNome,
                'classe_id' => $dadosTurma['classe'],
                'curso_id' => $dadosTurma['curso'],
                'turno_id' => $dadosTurma['turno'],
            ];
            $turmaCadastrada = $this->store($cadTurma);
            $turmaId = $turmaCadastrada->turma_id;
            goto turmaAno;
        }
        

// dd($turmas);
// dd($turmas);
        foreach($turmas as $turma) 
        {
            $tumas[] = $turma->turma_id;
            $resTurma = AlunoTurmaController::pegarTurmaId($turma->turma_id);
            if(!$resTurma) //Considerando que a turma existe mas não atrelado este ano lectivo
            {
                $turmaId = $turma->turma_id;
                goto turmaAno;
            }
        }
        $contTurma = count($tumas);
        $turmaIndice = $contTurma - 1;

        $turmaA = $this->pegarTurmaDesc($tumas[$turmaIndice]);

        $nome_turma = $turmaA->nome_turma;
        $penultima_posicao = substr($nome_turma, -2, 1);
        $penultima_posicao++;

        $turmaNome = $curso->sigla.'10'.$penultima_posicao.$turnoSigla;
        goto criarTurma;
 
        if(!$turma)
        {
            dd('Sem turma');
        }
        // dd($turma);

        $letraInicial = 'A';

        // for ($letra = $letraInicial; $letra <= 'D'; $letra++) {
        //     $resultado = $curso->sigla.'10'.$letra.$turnoSigla;
        //     echo $resultado . "\n";
        // }
        dd('x');

        turmaAno:
        $anoLectivo = AnoLectivoController::pegarAnoLectivo(AnoLectivoController::pegarIdAnoLectivo());
        $dadosTurmaAtrelada = [
            'turma_id' => $turmaId,
            'num_vagas' => $anoLectivo->num_aluno_na_turma,
            'ano_lectivo_id' => $anoLectivo->ano_lectivo_id,
        ];

        AlunoTurmaController::store($dadosTurmaAtrelada);
        $msg="Parabéns! Turma registrada adicionada com sucesso...";
        return redirect()->back()->with("Sucesso",$msg);

    }

    public function pegarTurma($turma) //Pegar turma em ordem crescente
    {
        $Turma = Turma::orderBy('turma_id', 'asc')
        ->where('turno_id', $turma->turno)
        ->where('curso_id', $turma->curso)
        ->where('classe_id', $turma->classe)
        ->get();
        return $Turma;
    }

    public function pegarTurmaDesc($id) //Pegar turma em ordem decrescente
    {
        $Turma = Turma::find($id);
        return $Turma;
    }
    public static function store($dadosTurma)
    {
        $turmaCriada = Turma::create($dadosTurma);
        return $turmaCriada;
    }
}
