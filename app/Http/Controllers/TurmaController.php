<?php

namespace App\Http\Controllers;

use App\Models\{
    ClasseDisciplina,
    Turma,
    Turno,
    Curso,
};
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isEmpty;

class TurmaController extends Controller
{

    public function turmas(){
        return view('turma.turmas');
    }
    public function createTurma()
    {
        $anoLectivo = AnoLectivoController::pegarAnoLectivo(AnoLectivoController::pegarIdAnoLectivo());
        $dataFimIncricao = Carbon::parse($anoLectivo->data_fim_inscricao);
        $dataFimIncricao = $dataFimIncricao->format('d-m-Y');
        $dataAtual = Carbon::now();
        $dataFormated = $dataAtual->format('d-m-Y');

        // dd($dataFormated, $dataFimIncricao);
        if( $dataFimIncricao < $dataFormated )
        {
            return redirect()->back()->with('Erro', 'Não pode criar turmas após o ultimo dia das inscrições.');
        }

        $vagas = AlunoTurmaController::pegarVagasTurno();

        $cursos = Curso::all();

        if(!$cursos)
        {
            return redirect()->back()->with('Erro', 'Cadastre algum curso antes de criar alguma turma.');
        }
        $turnos = Turno::all();
        //dd($vagas);
        return view('turma.cri-turma', compact('vagas','cursos','turnos'));
    }

    public function storeTurma(Request $request)  //Cadastrar turma 10ª classe --
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

        $curso = CursoController::pegarCurso(intval($request->curso));
        $turno = TurnoController::pegarTurno(intval($request->turno));
        $turnoSigla =  substr($turno->nome_turno, 0, 1);

        $dadosTurma = [
            'turno' => intval($request->turno),
            'curso' => intval($request->curso),
            'classe' => 1,
        ];
        $turmas = $this->pegarTurma((object) $dadosTurma);

        if($turmas)
        {
            $contTurma = count($turmas);
            $turmaIndice = $contTurma - 1;
            if($turmaIndice < 0 )
            {
                goto criarTurma0;
            }
            $nome_turma = $turmas[$turmaIndice];

            $penultima_posicao = substr($nome_turma->nome_turma, -2, 1);
            $penultima_posicao++;

            $turmaNome = $curso->sigla.'10'.$penultima_posicao.$turnoSigla;
            goto criarTurma;
        }

        criarTurma0:
        $turmaNome = $curso->sigla.'10'.'A'.$turnoSigla; //Considerando que não existe uma turma com estes dados acima
        goto criarTurma;


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

        criarTurma:
            $cadTurma = [
                'nome_turma' => $turmaNome,
                'classe_id' => $dadosTurma['classe'],
                'curso_id' => $dadosTurma['curso'],
                'turno_id' => $dadosTurma['turno'],
            ];
            $turmaCadastrada = $this->store($cadTurma);
            $turmaId = $turmaCadastrada->turma_id;

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

    public static function storeTurmas($classe, $curso, $turno)  //Cadastrar turmas automaticamente da  11ª classe em diante --
    {
        $turnoA = TurnoController::pegarTurno(intval($turno));
        $turnoSigla =  substr($turnoA->nome_turno, 0, 1);
        $classeA = ClasseController::pegarClasse(intval($classe));
        $numClasse = substr($classeA->classe, 0, 2);
        $cursoA = CursoController::pegarCurso($curso);


        $dadosTurma = [
            'turno' => intval($turno),
            'curso' => intval($curso),
            'classe' => intval($classe),
        ];

        $turmas = TurmaController::pegarTurma((object) $dadosTurma);

        if($turmas)
        {
            $contTurma = count($turmas);
            $turmaIndice = $contTurma - 1;
            if($turmaIndice < 0 )
            {
                goto criarTurma0;
            }
            $nome_turma = $turmas[$turmaIndice];

            $penultima_posicao = substr($nome_turma->nome_turma, -2, 1);
            $penultima_posicao++;

            $turmaNome = $cursoA->sigla.$numClasse.$penultima_posicao.$turnoSigla;
            goto criarTurma;
        }

        criarTurma0:
        $turmaNome = $cursoA->sigla.$numClasse.'A'.$turnoSigla; //Considerando que não existe uma turma com estes dados acima
        goto criarTurma;


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

        $turmaA = TurmaController::pegarTurmaDesc($tumas[$turmaIndice]);

        $nome_turma = $turmaA->nome_turma;
        $penultima_posicao = substr($nome_turma, -2, 1);
        $penultima_posicao++;

        $turmaNome = $curso->sigla.$numClasse.$penultima_posicao.$turnoSigla;

        criarTurma:
            $cadTurma = [
                'nome_turma' => $turmaNome,
                'classe_id' => $dadosTurma['classe'],
                'curso_id' => $dadosTurma['curso'],
                'turno_id' => $dadosTurma['turno'],
            ];
            $turmaCadastrada = TurmaController::store($cadTurma);
            $turmaId = $turmaCadastrada->turma_id;

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

    public static function pegarTurma($turma) //Pegar turma em ordem crescente
    {
        $Turma = Turma::orderBy('turma_id', 'asc')
        ->where('turno_id', $turma->turno)
        ->where('curso_id', $turma->curso)
        ->where('classe_id', $turma->classe)
        ->get();
        return $Turma;
    }

    public static function pegarTurmaDesc($id) //Pegar turma em ordem decrescente
    {
        $Turma = Turma::find($id);
        return $Turma;
    }
    public static function store($dadosTurma)
    {
        $turmaCriada = Turma::create($dadosTurma);
        return $turmaCriada;
    }

    public function adcoordTurma(){
        return view('turma/ad-coord-turma.blade');
    }

    public static function turmasViews()
    {
        $salaNormalOcupada = SalaController::salasNormalHorario();
        if(!$salaNormalOcupada)
        {
            $salaNormalOcupada[] = null;
        }

        $salasNormal = SalaController::salasNormal();
        if(!$salasNormal)
        {
            $salasNormal[] = null;
        }

        $turmas = Turma::with('classe', 'turno.hora', 'horario')
        ->whereDoesntHave('horario', function ($query) {
            $query->select('turma_id')
                ->from('horario');
        })
        ->get();

        if ($turmas->isEmpty()) {
            return false;
        }

        $dadosTurmas = [];
        $salaSelecionada = [];

        $anoLectivo = AnoLectivoController::pegarIdAnoLectivo();

        $classesIds = $turmas->pluck('classe_id')->unique();

        $disciplinas = ClasseDisciplina::whereIn('classe_id', $classesIds)->get();

        foreach ($turmas as $turma)
        {
            $dadosTurma = [
                'nome' => $turma->nome_turma,
            ];

            foreach ($salasNormal as $sala)
            {

                if($salaNormalOcupada[0] != null)
                {
                    foreach ($salaNormalOcupada as $salaOcupada)
                    {

                        if( $turma->turno_id != $salaOcupada['turno_id'] || $sala['sala_id'] != $salaOcupada['sala_id']  )
                        {
                            $dadosTurma['sala'] =
                            [
                                'sala' => $sala['sala'],
                                'sala_id' => $sala['sala_id'],
                            ];

                            $dadosSala[] =
                            [
                                $sala['sala_id'],
                                $turma->turno_id
                            ];

                            if (!in_array($dadosSala, $salaSelecionada)) {
                                $salaSelecionada[] =  $dadosSala;
                            }

                            goto fim;
                        }
                        // break 1;
                    }
                }
            }

            fim:
            // dd($dadosTurma);
            foreach ($disciplinas as $disciplina)
            {
                if ($disciplina->classe_id == $turma->classe_id && ($disciplina->disciplina->curso_id == $turma->curso_id || $disciplina->disciplina->curso_id == null ) )
                {
                $dadosTurma['disciplinas'][] = [
                    'nomeDisciplina' => $disciplina->disciplina->nome_disciplina,
                    'disciplina_id' => $disciplina->disciplina_id,
                    'tipo_disciplina' => $disciplina->tipo_disciplina,
                    'carga_horaria' => $disciplina->carga_horaria,
                    'classe' => $turma->classe->classe,
                    'classe_id' => $turma->classe->classe_id
                ];

                // dd($disciplina->disciplina->professor->pivot->prof_disc_id);

                    foreach($disciplina->disciplina->professor as $professor)
                    {
                        $professorTempo =  HorarioController::professorTempos($professor->pivot->prof_disc_id);

                        if( $professor->pivot->disciplina_id == $disciplina->disciplina_id && $professor->pivot->turno_id == $turma->turno_id && $professor->pivot->ano_lectivo_id == $anoLectivo && $professorTempo < 24)
                        $professorTempo = 24 - $professorTempo;
                        {
                            $dadosTurma['professores'][] =
                            [
                                'nomeProfessor' => $professor->pessoa->nome_completo,
                                'professor_id' => $professor->professor_id,
                                'professor_tempos' => $professorTempo,
                                'disciplina_id' => $professor->pivot->disciplina_id,
                                'professorDisciplina_id' => $professor->pivot->prof_disc_id,
                                'nomeDisciplina' => $disciplina->disciplina->nome_disciplina,
                            ];
                        }
                    }
                }
            }

            foreach ($turma->turno->hora as $hora)
            {
                $dadosTurma['tempo'][] = [
                    'tempo' => $hora->tempo->tempo,
                    'hora' => $hora->hora,
                    'hora_id' => $hora->hora_id
                ];
            }
            $dadosTurmas[] = $dadosTurma;
        }
// dd($dadosTurma);
        return $dadosTurmas;

    }

    public static function pegarTurno($turma) //Pegar turno
    {
        $Turma = Turma::where('turma_id', $turma)
        ->get();
        return $Turma[0]->turno_id;
    }

}
