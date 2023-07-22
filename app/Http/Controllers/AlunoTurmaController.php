<?php

    namespace App\Http\Controllers;

    use Carbon\Carbon;
    use App\Http\Controllers\AlunoController;
    use App\Http\Controllers\UserController;
    use App\Models\Aluno;
    use App\Models\AlunoTurma;
    use App\Models\AnoTurmaCood;

    class AlunoTurmaController extends Controller
    {
        public static function store($dadosTurma)
        {
            $turmaAtrelada = AnoTurmaCood::create($dadosTurma);
            return $turmaAtrelada;
        }
        public static function SelecionarTurma() //10ª Classe, função a ser chamada na atribuição de alunos, matriculados.
        {
            $anoLectivo = AnoLectivoController::pegarAnoLectivo(AnoLectivoController::pegarIdAnoLectivo());
            $dataFimIncricao = Carbon::parse($anoLectivo->data_fim_matricula);
            $dataFimIncricao->addDay();
            $dataFimIncricao = $dataFimIncricao->format('d-m-Y');
            $dataAtual = Carbon::now();
            $dataFormated = $dataAtual->format('d-m-Y');

            if( $dataFormated != $dataFimIncricao )
            {
                return 'O processo de atribuição de turma é feito apenas um dia após o fim da matricula: '. $dataFimIncricao;
            }
        $alunos = AlunoController::alunosSemturma();
    // dd($alunos);
        if(!$alunos)
        {
            return "Todos os alunos matriculados atualmente estão nas suas devidas turmas.";
        }
        $alunoTurma = [];

        usort($alunos, function ($a, $b)
                {
                    $data_nascA = $a['data_nasc'];
                    $data_nascB = $b['data_nasc'];

                    if ($data_nascA == $data_nascB)
                    {
                        return 0;
                    }

                    return ($data_nascA > $data_nascB) ? -1 : 1;
                });

            for($i = 0; $i < count($alunos); $i++)
            {
                $classe = intval(ClasseController::pegarIdClasse('10ª'));
                // $turmas = AlunoTurmaController::pegarTurmasCurso($alunos[$i]['idCurso'], $classed );

                $turmas = AlunoTurmaController::pegarTurmasCurso($alunos[$i]['idCurso'], $classe);

                usort($turmas, function ($a, $b)
                {
                    $identificadorA = substr($a['turma'], -1);
                    $identificadorB = substr($b['turma'], -1);
                    $turnos = ['M' => 3, 'T' => 2, 'N' => 1];

                    if ($identificadorA != $identificadorB)
                    {
                        return $turnos[$identificadorB] - $turnos[$identificadorA];
                    }

                    return strcmp($identificadorA, $identificadorB);
                });

                foreach ($turmas as $turma)
                {
                    if($turma['num_vaga'] > 0)
                    {
                        $alunoTurma[] = [
                            'turma' => $turma['TurmaAno_id'],
                            'aluno' => $alunos[$i]['aluno_id'],
                            'nome' => $alunos[$i]['nome']
                        ];

                        $vaga = $turma['num_vaga'] - 1;
                        $vagaUpdate = [
                        'id' => $turma['TurmaAno_id'],
                        'vaga' => $vaga
                        ];
                        AlunoController::updateStatusTrue($alunos[$i]['aluno_id']);
                        AlunoTurmaController::atualizarVaga($vagaUpdate);
                        break;
                    }
                }
            }

            usort($alunoTurma, function($a, $b) {
                return strcmp($a['nome'], $b['nome']);
            });

            $alunosOrdemTurma = [];
            foreach($alunoTurma as $aluno)
            {
                if( !in_array($aluno['aluno'], $alunosOrdemTurma) )
                {

                $qtdAlunos = AlunoTurmaController::quantidadeTurma($aluno['turma']);
                $alunoA = Aluno::find($aluno['aluno']);
                $alunoA->Anoturma()->attach($aluno['turma'],[
                    'numero_aluno' => $qtdAlunos + 1
                ]);

                $userId = AlunoController::pegarIdUser($aluno['aluno']);
                $dadosUser=[
                    'usuario_id'=> $userId,
                    'status_usuario'=>1,
                ];
                $user = UserController::updateAluno($dadosUser);
                if(!$user)
                {
                    return "Algum problema com o aluno ".$aluno['nome'].", tente mais tarde.";
                }
                $alunoTurma = [];

                $alunosOrdemTurma[] = $aluno['aluno'];
                }

            }
            return true;
        }

        public static function pegarTurmasCurso($curso, $classe) //Pegar turmas paraordenar os alunos
        {
            $turmas = AnoTurmaCood::with('turma','ano_lectivo')
            ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
            ->whereHas('turma', function ($query)  use ($curso, $classe) {
                $query->where('curso_id', $curso);
                $query->where('classe_id', $classe);
            })
            ->get();
    // dd($turmas);
            $Turmas = [];

            foreach ($turmas as $turmaA)
            {
                if($turmaA->num_vagas > 0)
                {
                    $Turmas[] =
                    [
                        'turma' => $turmaA->turma->nome_turma,
                        'TurmaAno_id' => $turmaA->turmaAno_id,
                        'num_vaga' => $turmaA->num_vagas
                    ];
                }
            }
            return $Turmas;
        }

        public static function pegarTurma($curso, $classe, $turno) //Pegar turma para integrar aluno transferido
        {
            $turma = AnoTurmaCood::with('turma','ano_lectivo')
            ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
            ->whereHas('turma', function ($query) use($curso, $classe, $turno ) {
                $query->where('curso_id', $curso);
                $query->where('classe_id', $classe);
                $query->where('turno_id', $turno);
            })
            ->where('num_vagas', '>', 0)
            ->first();

        if ($turma === null) {
            return false;
        } else {
        $turmaEncontrada = [
            'TurmaAno_id' => $turma->turmaAno_id,
            'num_vaga' => $turma->num_vagas
        ];
        return $turmaEncontrada;
        }

        }

        public static function pegarTurmaId($turmaId) //Pegar turma para integrar aluno transferido
        {
            $turma = AnoTurmaCood::where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
            ->where('turma_id', $turmaId)
            ->first();

            if(!$turma)
            {
                return false;
            }
            return true;
        }

        public static function quantidadeTurma($turma) //Pegar turmas 10ª Classe deste ano lectivo
        {
            $turmas = AlunoTurma::all()
            ->where('turmaAno_id', $turma);
            return count($turmas);
        }

        public static function atualizarVaga($turmaAno)
        {
            $turma = AnoTurmaCood::find($turmaAno['id']);
            $turma->num_vagas = $turmaAno['vaga'];
            $turma->save();

            return $turma;
        }

        // FIM 10ª CLASSE

        // TODAS AS CLASSES "FIM ANO LECTIVO, COMPORTAMENTO"

        public static function situacaoAluno() // Função a ser chamada na reabertura do ano lectivo 11ª >
        {
            $alunosAdmitidos = [];
            $alunos = AlunoController::alunosTurma();

            if(!$alunos)
            {
                return false;
            }

            foreach( $alunos as $aluno )
            {
                if($aluno['situacao'] === "Transita" && $aluno['classeId'] < 4)
                {
                    $alunosAdmitidos[] = $aluno;
                    continue;
                }
                if($aluno['situacao'] === "Recurso" && $aluno['classeId'] < 3)
                {
                    $alunosAdmitidos[] = $aluno;
                    continue;
                }
                // $alunosNAdmitidos[] = $aluno;
            }

            if(!$alunosAdmitidos) //Comentar este if após terminar, alunos...
            {
                return false;
            }
            AlunoTurmaController::alunoAdmtido($alunosAdmitidos);
            return true;
        }

        public static function alunoAdmtido($alunos) // Passagem de ano lectivo APROVADOS
        {
            $alunoTurma = [];
            // dd($alunos);

            usort($alunos, function ($a, $b)
                {
                    $data_nascA = $a['data_nasc'];
                    $data_nascB = $b['data_nasc'];

                    if ($data_nascA == $data_nascB)
                    {
                        return 0;
                    }

                    return ($data_nascA > $data_nascB) ? -1 : 1;
                });

            for($i = 0; $i < count($alunos); $i++)
            {
                if ($alunos[$i]['classeId'] === 4)
                {
                    continue;
                }
                $classe = intval($alunos[$i]['classeId']);
                $classed = $classe + 1;
// dd($alunos);
                $turmas = AlunoTurmaController::pegarTurmasCurso($alunos[$i]['cursoId'], $classed);
                if($alunos[$i]['turnoId'] === 3)
                {
                    usort($turmas, function ($a, $b)
                {
                    $identificadorA = substr($a['turma'], -1);
                    $identificadorB = substr($b['turma'], -1);
                    $turnos = ['N' => 1];

                    if ($identificadorA != $identificadorB)
                    {
                        return $turnos[$identificadorB] - $turnos[$identificadorA];
                    }

                    return strcmp($identificadorA, $identificadorB);
                });
                }
                usort($turmas, function ($a, $b)
                {
                    $identificadorA = substr($a['turma'], -1);
                    $identificadorB = substr($b['turma'], -1);
                    $turnos = ['M' => 2, 'T' => 1];

                    if ($identificadorA != $identificadorB)
                    {
                        return $turnos[$identificadorB] - $turnos[$identificadorA];
                    }

                    return strcmp($identificadorA, $identificadorB);
                });

                foreach ($turmas as $turma)
                {
                    if($turma['num_vaga'] > 0)
                    {
                        $alunoTurma[] = [
                        'turma' => $turma['TurmaAno_id'],
                        'aluno' => $alunos[$i]['aluno_id'],
                        'nome' => $alunos[$i]['nome']
                        ];

                        $vaga = $turma['num_vaga'] - 1;
                        $vagaUpdate = [
                        'id' => $turma['TurmaAno_id'],
                        'vaga' => $vaga
                        ];
                        AlunoController::updateStatusTrue($alunos[$i]['aluno_id']);
                        AlunoTurmaController::atualizarVaga($vagaUpdate);
                        break;
                    }
                }
            }

            usort($alunoTurma, function($a, $b) {
                return strcmp($a['nome'], $b['nome']);
            });

            $alunosOrdemTurma = [];
            foreach($alunoTurma as $aluno)
            {
                if( !in_array($aluno['aluno'], $alunosOrdemTurma) )
                {
                $qtdAlunos = AlunoTurmaController::quantidadeTurma($aluno['turma']);
                $alunoA = Aluno::find($aluno['aluno']);
                $alunoA->Anoturma()->attach($aluno['turma'],[
                    'numero_aluno' => $qtdAlunos + 1
                ]);

                $userId = AlunoController::pegarIdUser($aluno['aluno']);
                $dadosUser=[
                    'usuario_id'=> $userId,
                    'status_usuario'=>1,
                ];
                $user = UserController::updateAluno($dadosUser);
                if(!$user)
                {
                    return "Algum problema com o aluno ".$aluno['nome'].", tente mais tarde.";
                }
                $alunosOrdemTurma[] = $aluno['aluno'];
                }

            }
            return true;
        }

        public static function alunoNAdmtido($aluno) // Função a ser readmissão de um aluno >
        {
                $classe = intval($aluno['classeId']);
                $turmas = AlunoTurmaController::pegarTurmasCurso($aluno['idCurso'], $classe );
                if(!$turmas)
                {
                    return "Não há nenhuma vaga para disponível para tua classe e o teu curso.";
                }

                usort($turmas, function ($a, $b)
                {
                    $identificadorA = substr($a['turma'], -1);
                    $identificadorB = substr($b['turma'], -1);
                    $turnos = ['M' => 3, 'T' => 2, 'N' => 1];

                    if ($identificadorA != $identificadorB)
                    {
                        return $turnos[$identificadorB] - $turnos[$identificadorA];
                    }

                    return strcmp($identificadorA, $identificadorB);
                });

                $alunoTurma = [];
                foreach ($turmas as $turma)
                {
                    if($turma['num_vaga'] > 0)
                    {
                        $alunoTurma[] = [
                        'turma' => $turma['TurmaAno_id'],
                        'aluno' => $aluno['aluno_id'],
                        'nome' => $aluno['nome']
                        ];

                        $vaga = $turma['num_vaga'] - 1;
                        $vagaUpdate = [
                        'id' => $turma['TurmaAno_id'],
                        'vaga' => $vaga
                        ];
                        AlunoController::updateStatusTrue($alunoTurma[0]['aluno']);
                        AlunoTurmaController::atualizarVaga($vagaUpdate);
                        break;
                    }
                }

                $qtdAlunos = AlunoTurmaController::quantidadeTurma($alunoTurma[0]['turma']);
                $alunoA = Aluno::find($alunoTurma[0]['aluno']);
                $alunoA->Anoturma()->attach($alunoTurma[0]['turma'],[
                    'numero_aluno' => $qtdAlunos + 1,
                ]);

                $userId = AlunoController::pegarIdUser($alunoTurma[0]['aluno']);
                $dadosUser=[
                    'usuario_id'=> $userId,
                    'status_usuario'=>1,
                ];
                $user = UserController::updateAluno($dadosUser);
                if(!$user)
                {
                    return "Algum problema com o aluno ".$alunoTurma['nome'].", tente mais tarde.";
                }
                return true;
        }

        public static function pegarVagas() // Com base a classe, curso e turno...
        {
            $turmas = AnoTurmaCood::with('turma', 'ano_lectivo')
                ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
                ->get();

                if (!$turmas) {
                    return 0;
                }
                if ($turmas->isEmpty()) {
                    return 0;
                }

            $vagas = [];

            foreach ($turmas as $turmaA)
            {
                $curso = $turmaA->turma->curso->nome_curso;
                $sigla = $turmaA->turma->curso->sigla;
                $cursoId = $turmaA->turma->curso->curso_id;
                $classe = $turmaA->turma->classe->classe;
                $classeId = $turmaA->turma->classe->classe_id;
                $turno = $turmaA->turma->turno->nome_turno;
                $numVagas = $turmaA->num_vagas;
                $anoLectivo = $turmaA->ano_lectivo->ano_lectivo;
                $anoId = $turmaA->ano_lectivo->ano_lectivo_id;
                $turnoId = $turmaA->turma->turno->turno_id;

                $chave = $curso . '-' . $classe . '-' . $turno . '-' . $anoLectivo;

                if (!isset($vagas[$chave]))
                {
                    $vagas[$chave] = [
                        'curso' => $curso,
                        'sigla' => $sigla,
                        'cursoId' => $cursoId,
                        'classe' => $classe,
                        'classeId' => $classeId,
                        'turno' => $turno,
                        'turnoId' => $turnoId,
                        'anoLectivo' => $anoLectivo,
                        'anoId' => $anoId,
                        'totalVagas' => 0
                    ];
                }

                $vagas[$chave]['totalVagas'] += $numVagas;
            }
            return array_values($vagas);
        }

        public static function pegarVagasTurno() // Com base turno...
        {
            $turmas = AnoTurmaCood::with('turma', 'ano_lectivo')
            ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
            ->get();

            $vagas = [];

            foreach ($turmas as $turmaA)
            {
                $turno = $turmaA->turma->turno->nome_turno;
                $turnoId = $turmaA->turma->turno->turno_id;
                $anoLectivo = $turmaA->ano_lectivo->ano_lectivo;
                $anoId = $turmaA->ano_lectivo->ano_lectivo_id;
                $ano_numSala = $turmaA->ano_lectivo->num_sala_escola;

                $chave = $turno . '-' . $anoLectivo;

                if (!isset($vagas[$chave]))
                {
                    $vagas[$chave] = [
                        'turno' => $turno,
                        'turnoId' => $turnoId,
                        'anoLectivo' => $anoLectivo,
                        'anoId' => $anoId,
                        'turmasRestantes' => $ano_numSala
                    ];
                }

                $vagas[$chave]['turmasRestantes']--;
            }
            return array_values($vagas);
        }

        public static function AnulouMatricula($Aluno) // Função de anular a matricula
        {
            $aluno = Aluno::find($Aluno['aluno']);
            $aluno->Anoturma()->updateExistingPivot($Aluno['turma'],
            [
                'situacao' => 'Anulou a Matricula',
                'numero_aluno' => 0,
            ]);
            return $aluno;
        }
        public static function alunoTransferido($Aluno) // Função a ser chamada na reabertura do ano lectivo 11ª >
        {
                $turma = AlunoTurmaController::pegarTurma($Aluno['curso_id'], $Aluno['classe_id'],$Aluno['turno_id']);

                $vaga = $turma['num_vaga'] - 1;
                $vagaUpdate = [
                'id' => $turma['TurmaAno_id'],
                'vaga' => $vaga
                ];
                AlunoTurmaController::atualizarVaga($vagaUpdate);
                $qtdAlunos = AlunoTurmaController::quantidadeTurma($turma['TurmaAno_id']);

                $alunoA = Aluno::find($Aluno['aluno_id']);
                $alunoA->Anoturma()->attach($turma['TurmaAno_id'],[
                    'numero_aluno' => $qtdAlunos + 1,
                    'situacao' => 'Transferido'
                ]);

                return $alunoA;
        }

        public static function alunoAnolectivo() //Função para inicio do ano lectivo:: CRIAR TURMA AUTOMATICAMENTE
        {
            $alunosAdmitidos = [];
            $alunos = AlunoController::alunosTurma();

            if(!$alunos)
            {
                return false;
            }

            foreach( $alunos as $aluno )
            {
                if($aluno['situacao'] === "Transita" && $aluno['classeId'] < 4)
                {
                    $alunosAdmitidos[] = $aluno;
                    continue;
                }
                if($aluno['situacao'] === "Recurso" && $aluno['classeId'] < 3)
                {
                    $alunosAdmitidos[] = $aluno;
                    continue;
                }
            }
            if(!$alunosAdmitidos)
            {
                return false;
            }

            foreach($alunosAdmitidos as $aluno)
            {
                $alunoss[] = [
                            'aluno' => $aluno['aluno_id'],
                            'turma' => $aluno['nomeTurma'],
                            'classeId' => $aluno['classeId'],
                            'turnoId' => $aluno['turnoId'],
                            'cursoNome'=> $aluno['curso'],
                            'Nome'=> $aluno['nome'],
                            'ano'=> $aluno['anoLectivo'],

                        ];

            $chave = $aluno['cursoId'] . '-' .$aluno['classeId'] . '-' . $aluno['turnoId'];

            if (!isset($vagas[$chave]))
            {
                $vagas[$chave] = [
                    'cursoId' =>  intval($aluno['cursoId']),
                    'classeId' => intval($aluno['classeId']),
                    'turnoId' =>  intval($aluno['turnoId']),
                    'num_alunos' => 0
                ];
            }
            $vagas[$chave]['num_alunos']++;
            }

        $turmas = array_values($vagas);
        usort($turmas, function($a, $b) {
        return $b['classeId'] - $a['classeId'];
        });


    $anoLectivo = AnoLectivoController::pegarAnoLectivo(AnoLectivoController::pegarIdAnoLectivo());
    $numMaxTurmaT = $anoLectivo->num_sala_escola;

    foreach ($turmas as &$turma) {
        if ($turma['turnoId'] === 3)
        {
            while ($turma['num_alunos'] > 0)
            {
                repite:
                $turmaVagas = AlunoTurmaController::pegarTurma(intval($turma['cursoId']), intval($turma['classeId']) + 1, intval($turma['turnoId']));

                if (!$turmaVagas)
                {
                    TurmaController::storeTurmas(intval($turma['classeId']) + 1, intval($turma['cursoId']), intval($turma['turnoId']));
                    goto repite;
                }

                $turma['num_alunos'] -= $turmaVagas['num_vaga'];
                $turma['num_alunos'] = max(0, $turma['num_alunos']);
            }
        }
        elseif ($turma['turnoId'] === 2 || $turma['turnoId'] === 1)
        {
            while ($turma['num_alunos'] > 0)
            {
                $turnoId = $numMaxTurmaT > 0 ? 2 : 1;
                back:
                $turmaVagas = AlunoTurmaController::pegarTurma(intval($turma['cursoId']), intval($turma['classeId']) + 1, $turnoId);

                if (!$turmaVagas)
                {
                    TurmaController::storeTurmas(intval($turma['classeId']) + 1, intval($turma['cursoId']), $turnoId);

                    if ($numMaxTurmaT > 0) {
                        --$numMaxTurmaT;
                    }

                    goto back;
                }

                $turma['num_alunos'] -= $turmaVagas['num_vaga'];
                $turma['num_alunos'] = max(0, $turma['num_alunos']);
            }
        }
    }

    // dd($alunoss, $vagas, $turmas);
    }

    public static function pegarTurmas() // http://127.0.0.1:8000/api/turmas
        {
            $turmas = AnoTurmaCood::with('turma', 'ano_lectivo')
            ->orderBy('ano_lectivo_id', 'desc')
            ->get();

            $dadosTurma = [];
            foreach ($turmas as $turmaA)
            {
                $dadosTurma[] = [
                    'IdTurma' => $turmaA->turma->turma_id,
                    'nomeTurma' => $turmaA->turma->nome_turma,
                    'classeTurma' => $turmaA->turma->classe->classe,
                    'turnoTurma' => $turmaA->turma->turno->nome_turno,
                    'vagasTurma' => $turmaA->num_vagas,
                    'cursoTurma' => $turmaA->turma->curso->nome_curso,
                    'anolectivoTurma' => $turmaA->ano_lectivo->ano_lectivo
                ];
            }
            return $dadosTurma;
        }

        public static function turmas()
        {
            $turmas = AnoTurmaCood::with('turma')
            ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
            ->get();

            if (!$turmas) {
                return 0;
            }
            if ($turmas->isEmpty()) {
                return 0;
            }

            $dadosTurma = [];
            foreach ($turmas as $turmaA)
            {
            $curso = $turmaA->turma->curso->curso_id;
            $sigla = $turmaA->turma->curso->sigla;

            $chave = $curso;
            if (!isset($turm[$chave]))
            {
                $turm[$chave] = [
                        'sigla' => $sigla,
                        'turmas' => 0
                ];
            }

            $turm[$chave]['turmas']++;
            }

            return array_values($turm);
        }

        public static function turmasCursoTurno()
        {
            $turmas = AnoTurmaCood::with('turma')
            ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
            ->get();

            if (!$turmas) {
                return 0;
            }
            if ($turmas->isEmpty()) {
                return 0;
            }

            $dadosTurma = [];
            foreach ($turmas as $turmaA)
            {
            $curso = $turmaA->turma->curso->curso_id;
            $cursoNome = $turmaA->turma->curso->nome_curso;
            $turno = $turmaA->turma->turno->turno_id;
            $turnoNome = $turmaA->turma->turno->nome_turno;

            $chave = $curso . $turno;

            if (!isset($turm[$chave]))
            {
                $turm[$chave] = [
                        'curso' => $cursoNome,
                        'turno'=> $turnoNome,
                        'turmas' => 0
                ];
            }

            $turm[$chave]['turmas']++;
            }

            return array_values($turm);
        }

        public static function vagas() // Com base o curso...
        {
            $turmas = AnoTurmaCood::with('turma', 'ano_lectivo')
                ->where('ano_lectivo_id', AnoLectivoController::pegarIdAnoLectivo())
                ->get();
                if (!$turmas) {
                    return 0;
                }
                if ($turmas->isEmpty()) {
                    return 0;
                }

            $vagas = [];

            foreach ($turmas as $turmaA)
            {
                $curso = $turmaA->turma->curso->curso_id;
                $cursoSigla = $turmaA->turma->curso->sigla;
                $numVagas = $turmaA->num_vagas;


                $chave = $curso;

                if (!isset($vagas[$chave]))
                {
                    $vagas[$chave] = [
                        'cursoId' => $cursoSigla,
                        'totalVagas' => 0
                    ];
                }
                $vagas[$chave]['totalVagas'] += $numVagas;
            }

            return array_values($vagas);
        }
}
