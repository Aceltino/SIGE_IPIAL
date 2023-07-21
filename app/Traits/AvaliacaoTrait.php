<?php

namespace App\Traits;
use App\Models\Trimestre;
use App\Models\Nota;
use App\Models\Disciplina;
use App\Models\Professor;
use App\Models\Professor_disciplina;
use App\Models\AnoTurmaCood;
use App\Models\AlunoTurma;
use App\Models\Ano_lectivo;
use App\Models\Horario;

trait AvaliacaoTrait
{
    public static function pegarAnoLectivo()
    {
        $ano_lectivo = Ano_lectivo::where('status_ano_lectivo', 1)->get();
        return $ano_lectivo;
    }
    public static function pegarTrimestre()
    {
        $trimestre = Trimestre::with('anoLectivo')->where('status', 1)->get();
        return $trimestre;
    }


    public static function pegarNotaAluno($disciplinas, $turma){
        $trimestre = self::pegarTrimestre();
        $ano_lectivo = self::pegarAnoLectivo();
        if(count($trimestre) < 1 || count($ano_lectivo) < 1){
            return 4;
        }
        $cont = 0;
        for ($dis = 0; $dis < count($disciplinas); $dis++) {
            if(!isset($turma[$dis])){
                goto turn;
            }
            for ($tur = 0; $tur < count($turma[$dis]); $tur++) {
                $aluno = AlunoTurma::with('aluno.candidato.pessoa', 'turmaAno.turma')->where('turmaAno_id', $turma[$dis][$tur])
                ->get();
                if(count($aluno) > 0){
                    $disc = Disciplina::find($disciplinas[$dis]);
                    for($i = 0; $i < count($aluno); $i++){
                        $mac = null;
                        $med = null;
                        $npp = null;
                        $npt = null;
                        $npg = null;
                        $recurso = null;
                        $exame_recurso = null;
                        $exame = null;
                        $exame_especial = null;

                        $nota = Nota::with(['disciplina'])->where('aluno_id', $aluno[$i]->aluno_id)
                        ->where('id_trimestre', $trimestre[0]->trimestre_id)
                        ->where('disciplina_id', $disciplinas[$dis])->get();

                        $ac = Nota::with(['disciplina'])->where('aluno_id',  $aluno[$i]->aluno_id)
                        ->where('id_trimestre', $trimestre[0]->trimestre_id)
                        ->where('tipo_prova', 'Avaliacão Contínua')
                        ->where('disciplina_id', $disciplinas[$dis])->get();
                        if(count($nota) < 1){
                            $dados[$cont][$tur][$i] = [
                                'aluno_id' => $aluno[$i]->aluno_id,
                                'nome' => $aluno[$i]->aluno->candidato->pessoa->nome_completo,
                                'numero_aluno' => $aluno[$i]->aluno->turmas[0]->numero_aluno,
                                'turma_id' => $aluno[$i]->aluno->anoturma[0]->turma->turma_id,
                                'nome_turma' => $aluno[$i]->aluno->anoturma[0]->turma->nome_turma,
                                'trimestre_id' => $trimestre[0]->trimestre_id,
                                'trimestre' => $trimestre[0]->trimestre,
                                'mac' => $mac,
                                'npp' => $npp,
                                'npt' => $npt,
                                'npg' => $npg,
                                'recurso' => $recurso,
                                'exame_recurso' => $exame_recurso,
                                'exame' => $exame,
                                'exame_especial' => $exame_especial,
                                'disciplina_id' => $disc->disciplina_id,
                                'nome_disciplina' => $disc->nome_disciplina,
                                'curso' => $aluno[$i]->aluno->anoturma[0]->turma->curso->nome_curso,
                            ];
                        } else{
                            for($j = 0; $j < count($ac); $j++){
                                $mac += $ac[$j]->nota_aluno;
                                $med++;
                            }
                            if($med > 0){
                                $mac /= $med;
                                $mac = number_format($mac, 1, ".");
                            }
                            for($j = 0; $j < count($nota); $j++){
                                if($nota[$j]->tipo_prova === "Prova Professor"){
                                    if($nota[$j]->nota_aluno){
                                        $npp = $nota[$j]->nota_aluno;
                                        $npp = number_format($npp, 1, ".");
                                    } else{
                                        $npp = $nota[$j]->nota_aluno;
                                    }
                                }
                            }
                            for($j = 0; $j < count($nota); $j++){
                                if($nota[$j]->tipo_prova === "Prova Trimestre"){
                                    if($nota[$j]->nota_aluno){
                                        $npt = $nota[$j]->nota_aluno;
                                        $npt = number_format($npt, 1, ".");
                                    } else{
                                        $npt = $nota[$j]->nota_aluno;
                                    }
                                }
                            }
                            for($j = 0; $j < count($nota); $j++){
                                if($nota[$j]->tipo_prova === "Prova Global"){
                                    if($nota[$j]->nota_aluno){
                                        $npg = $nota[$j]->nota_aluno;
                                        $npg = number_format($npg, 1, ".");
                                    } else{
                                        $npg = $nota[$j]->nota_aluno;
                                    }
                                }
                            }
                            for($j = 0; $j < count($nota); $j++){
                                if($nota[$j]->tipo_prova === "Recurso"){
                                    if($nota[$j]->nota_aluno){
                                        $exame_recurso = $nota[$j]->nota_aluno;
                                        $exame_recurso = number_format($exame_recurso, 1, ".");
                                    } else{
                                        $exame_recurso = $nota[$j]->nota_aluno;
                                    }
                                }
                            }
                            for($j = 0; $j < count($nota); $j++){
                                if($nota[$j]->tipo_prova === "Exame"){
                                    if($nota[$j]->nota_aluno){
                                        $exame = $nota[$j]->nota_aluno;
                                        $exame = number_format($exame, 1, ".");
                                    } else{
                                        $exame = $nota[$j]->nota_aluno;
                                    }
                                }
                            }
                            for($j = 0; $j < count($nota); $j++){
                                if($nota[$j]->tipo_prova === "Exame Especial"){
                                    if($nota[$j]->nota_aluno){
                                        $exame_especial= $nota[$j]->nota_aluno;
                                        $exame_especial = number_format($exame_especial, 1, ".");
                                    } else{
                                        $exame_especial = $nota[$j]->nota_aluno;
                                    }
                                }
                            }
                            $dados[$cont][$tur][$i] = [
                                'aluno_id' => $aluno[$i]->aluno->aluno_id,
                                'nome' => $aluno[$i]->aluno->candidato->pessoa->nome_completo,
                                'numero_aluno' => $aluno[$i]->aluno->turmas[0]->numero_aluno,
                                'turma_id' => $aluno[$i]->aluno->anoturma[0]->turma->turma_id,
                                'nome_turma' => $aluno[$i]->aluno->anoturma[0]->turma->nome_turma,
                                'trimestre_id' => $trimestre[0]->trimestre_id,
                                'trimestre' => $trimestre[0]->trimestre,
                                'mac' => $mac,
                                'npp' => $npp,
                                'npt' => $npt,
                                'npg' => $npg,
                                'recurso' => $recurso,
                                'exame_recurso' => $exame_recurso,
                                'exame' => $exame,
                                'exame_especial' => $exame_especial,
                                'disciplina_id' => $disc->disciplina_id,
                                'nome_disciplina' => $disc->nome_disciplina,
                                'curso' => $aluno[$i]->aluno->anoturma[0]->turma->curso->nome_curso,
                            ];
                        }
                    }
                } else{
                    return 6;
                }
            }
            $cont++;
            turn:
        }
        if(!isset($dados)){
            return 6;
        }
        return $dados;
    }

    public static function pegarProfessor($user){

        $professor = Professor::with('pessoa')->where('pessoa_id', $user->pessoa_id)->get();
        if(count($professor) > 0){
            $ano_lectivo = self::pegarAnoLectivo();
            $prof_disc = Professor_disciplina::with('turmaProf.curso', 'disciplina')->where('professor_id', $professor[0]->professor_id)
            ->where('ano_lectivo_id', $ano_lectivo[0]->ano_lectivo_id)
            ->get();
            if(count($prof_disc) > 0){
                $ind = 0;
                for ($i = 0; $i < count($prof_disc); $i++) {
                    if (count($prof_disc[$i]->turmaProf) > 0) {
                        $cont = 0;
                        $dados[$ind] = [
                            'professor_disciplina_id' => $prof_disc[$i]->prof_disc_id,
                            'nome_disciplina' =>  $prof_disc[$i]->disciplina->nome_disciplina,
                            'disciplina_id' => $prof_disc[$i]->disciplina->disciplina_id,
                        ];
                        for ($j = 0; $j < count($prof_disc[$i]->turmaProf); $j++) {
                            $dados[$ind][$cont] = [
                                'turma_id' => $prof_disc[$i]->turmaProf[$j]->turma_id,
                                'nome_turma' => $prof_disc[$i]->turmaProf[$j]->nome_turma,
                                'curso_id' => $prof_disc[$i]->turmaProf[$j]->curso->curso_id,
                                'nome_curso' => $prof_disc[$i]->turmaProf[$j]->curso->nome_curso,
                            ];
                            $cont++;
                        }
                    }
                    $ind++;
                }
                if(!isset($dados)){
                    return 3;
                }
                return $dados;
            } else{
                return 2;
            }
        }else{
            return 1;
        }
    }

    public static function pegarAnoTurmaCoord($turma_id) {
        $ano_lectivo = self::pegarAnoLectivo();
        $ano_turma = AnoTurmaCood::where('turma_id', $turma_id)
        ->where('ano_lectivo_id', $ano_lectivo[0]->ano_lectivo_id)->get();
        if(count($ano_lectivo) < 1 || count($ano_turma) < 1){
            return false;
        }
        return $ano_turma[0]->turmaAno_id;
    }

    public static function pegarAdmin(){
        $ano_lectivo = self::pegarAnoLectivo();
        $prof_disc = Professor_disciplina::with('turmaProf.curso', 'disciplina')
        ->where('ano_lectivo_id', $ano_lectivo[0]->ano_lectivo_id)
        ->get();
        if(count($ano_lectivo) < 1){
            return 4;
        }
        if(count($prof_disc) < 1){
            return 7;
        }
        $inc = 0;
        for ($i = 0; $i < count($prof_disc); $i++) {
            if(count($prof_disc[$i]->turmaProf) > 0){
                $dados[$inc] = [
                    'professor_disciplina_id' => $prof_disc[$i]->prof_disc_id,
                    'nome_disciplina' =>  $prof_disc[$i]->disciplina->nome_disciplina,
                    'disciplina_id' => $prof_disc[$i]->disciplina->disciplina_id,
                ];
                for ($j = 0; $j < count($prof_disc[$i]->turmaProf); $j++) {
                    $dados[$inc][$j] = [
                        'turma_id' => $prof_disc[$i]->turmaProf[$j]->turma_id,
                        'nome_turma' => $prof_disc[$i]->turmaProf[$j]->nome_turma,
                        'curso_id' => $prof_disc[$i]->turmaProf[$j]->curso->curso_id,
                        'nome_curso' => $prof_disc[$i]->turmaProf[$j]->curso->nome_curso,
                    ];
                }
                $inc++;
            }
        }
        if(!isset($dados)){
            return 3;
        }
        return $dados;
    }

    public static function pegarCoordenadorCurso($user){
        $coordenador = Professor::with('pessoa')->where('pessoa_id', $user->pessoa_id)->get();
        $ano_lectivo = self::pegarAnoLectivo();
        $prof_disc = Professor_disciplina::with('turmaProf.curso', 'disciplina')
        ->where('ano_lectivo_id', $ano_lectivo[0]->ano_lectivo_id)
        ->get();
        if (count($coordenador) < 1 || $coordenador[0]->curso_id === null) {
            return 5;
        }
        if(count($ano_lectivo) < 1){
            return 4;
        }
        if (count($prof_disc) < 1) {
            return 7;
        }
        $inc = 0;

        for ($i = 0; $i < count($prof_disc); $i++) {
            if (count($prof_disc[$i]->turmaProf) > 0) {
                for ($j = 0; $j < count($prof_disc[$i]->turmaProf); $j++) {
                    if($prof_disc[$i]->turmaProf[$j]->curso->curso_id === $coordenador[0]->curso_id){
                        $dados[$inc] = [
                            'professor_disciplina_id' => $prof_disc[$i]->prof_disc_id,
                            'nome_disciplina' =>  $prof_disc[$i]->disciplina->nome_disciplina,
                            'disciplina_id' => $prof_disc[$i]->disciplina->disciplina_id,
                        ];
                        $inc2 = 0;
                        for($k = 0; $k < count($prof_disc[$i]->turmaProf); $k++){
                            if($prof_disc[$i]->turmaProf[$k]->curso->curso_id === $coordenador[0]->curso_id){
                                $dados[$inc][$inc2] = [
                                    'turma_id' => $prof_disc[$i]->turmaProf[$k]->turma_id,
                                    'nome_turma' => $prof_disc[$i]->turmaProf[$k]->nome_turma,
                                    'curso_id' => $prof_disc[$i]->turmaProf[$k]->curso->curso_id,
                                    'nome_curso' => $prof_disc[$i]->turmaProf[$k]->curso->nome_curso,
                                ];
                                $inc2++;
                            }
                        }
                    }
                }
            $inc++;
            }
        }
        if(!isset($dados)){
            return 3;
        }
        return $dados;
    }

    public static function pegarCoordenadorArea($user){
        $coordenador = Professor::with('pessoa')->where('pessoa_id', $user->pessoa_id)->get();
        $ano_lectivo = self::pegarAnoLectivo();
        $prof_disc = Professor_disciplina::with('turmaProf.curso', 'disciplina')
        ->where('ano_lectivo_id', $ano_lectivo[0]->ano_lectivo_id)
        ->get();
        if (count($coordenador) < 1 || $coordenador[0]->area_formacao_id === null) {
            return 5;
        }
        if(count($ano_lectivo) < 1){
            return 4;
        }
        if ( count($prof_disc) < 1) {
            return 7;
        }

        $inc = 0;

        for ($i = 0; $i < count($prof_disc); $i++) {
            if (count($prof_disc[$i]->turmaProf) > 0) {
                for ($j = 0; $j < count($prof_disc[$i]->turmaProf); $j++) {
                    if($prof_disc[$i]->turmaProf[$j]->curso->area_formacao_id === $coordenador[0]->area_formacao_id){
                        $dados[$inc] = [
                            'professor_disciplina_id' => $prof_disc[$i]->prof_disc_id,
                            'nome_disciplina' =>  $prof_disc[$i]->disciplina->nome_disciplina,
                            'disciplina_id' => $prof_disc[$i]->disciplina->disciplina_id,
                        ];
                        $inc2 = 0;
                        for($k = 0; $k < count($prof_disc[$i]->turmaProf); $k++){
                            if($prof_disc[$i]->turmaProf[$k]->curso->area_formacao_id === $coordenador[0]->area_formacao_id){
                                $dados[$inc][$inc2] = [
                                    'turma_id' => $prof_disc[$i]->turmaProf[$k]->turma_id,
                                    'nome_turma' => $prof_disc[$i]->turmaProf[$k]->nome_turma,
                                    'curso_id' => $prof_disc[$i]->turmaProf[$k]->curso->curso_id,
                                    'nome_curso' => $prof_disc[$i]->turmaProf[$k]->curso->nome_curso,
                                ];
                                $inc2++;
                            }
                        }
                    }
                }
                $inc++;
            }
        }
        if(!isset($dados)){
            return 3;
        }
        return $dados;
    }

    public static function erros($erro){
        //dd($erro);
        switch ($erro) {
            case 1:
                return "Este usuário não está cadastrado como professor!";
            case 2:
                return "Horário indisponível!";
            case 3:
                return "Nenhuma turma disponível!";
            case 4:
                return "Impossível acessar sem que o ano lectivo e/ou algum trimestre comece!";
            case 5:
                return "Por favor, verifique se este usuário possui as credenciais correctas!";
            case 6:
                return "Turma(as) sem aluno(os)!";
            case 7:
                return "Verifique se o horário está devidamente criado para este ano lectivo!";
            case 8:
                return "As faltas devem ser marcadas nos dias úteis!";
            case 9:
                return "As faltas só podem ser marcadas em dias e tempos em que o professor lecciona a mesma turma!";
            case 10:
                return "Limite de hora para a marcação da falta excedido!";


            default:
                return true;
                break;
        }
    }

    public static function atribuirNotaFimTrimestre(){
        $ano_lectivo = self::pegarAnoLectivo();
        $trimestre = self::pegarTrimestre();
        $turmas = AnoTurmaCood::with('turma.belongClasse', 'alunoAno')->where('ano_lectivo_id',  $ano_lectivo[0]->ano_lectivo_id)->get();
        for ($i = 0; $i < count($turmas); $i++) {
            $horario = Horario::with('professorDisc.disciplina')->where('turma_id', $turmas[$i]->turma->turma_id)->get();
            if ($turmas[$i]->turma->belongClasse->classe !== "12ª" && $turmas[$i]->turma->belongClasse->classe !== "13ª") {
                for ($j = 0; $j  < count($turmas[$i]->alunoAno); $j ++) {
                    for ($k= 0; $k < count($horario); $k++) {
                        $nota = Nota::where('aluno_id', $turmas[$i]->alunoAno[$j]->aluno_id)
                        ->where('disciplina_id', $horario[$k]->professorDisc->disciplina_id)
                        ->where('tipo_prova', "Avaliação Contínua")
                        ->where('id_trimestre', $trimestre[0]->trimestre_id)
                        ->get();
                        if (count($nota) < 1) {
                            Nota::create(['nota_aluno' => 0, 'tipo_prova' => "Avaliação Contínua", 'descricao_nota' => null,
                            'aluno_id' => $turmas[$i]->alunoAno[$j]->aluno_id, 'disciplina_id' => $horario[$k]->professorDisc->disciplina_id,
                            'id_trimestre' => $trimestre[0]->trimestre_id]);
                        }
                        $nota = Nota::where('aluno_id', $turmas[$i]->alunoAno[$j]->aluno_id)
                        ->where('disciplina_id', $horario[$k]->professorDisc->disciplina_id)
                        ->where('tipo_prova', "Prova Professor")
                        ->where('id_trimestre', $trimestre[0]->trimestre_id)
                        ->get();
                        if (count($nota) < 1) {
                            Nota::create(['nota_aluno' => 0, 'tipo_prova' => "Prova Professor", 'descricao_nota' => null,
                            'aluno_id' => $turmas[$i]->alunoAno[$j]->aluno_id, 'disciplina_id' => $horario[$k]->professorDisc->disciplina_id,
                            'id_trimestre' => $trimestre[0]->trimestre_id]);
                        }
                        $nota = Nota::where('aluno_id', $turmas[$i]->alunoAno[$j]->aluno_id)
                        ->where('disciplina_id', $horario[$k]->professorDisc->disciplina_id)
                        ->where('tipo_prova', "Prova Trimestre")
                        ->where('id_trimestre', $trimestre[0]->trimestre_id)
                        ->get();
                        if (count($nota) < 1) {
                            Nota::create(['nota_aluno' => 0, 'tipo_prova' => "Prova Trimestre", 'descricao_nota' => null,
                            'aluno_id' => $turmas[$i]->alunoAno[$j]->aluno_id, 'disciplina_id' => $horario[$k]->professorDisc->disciplina_id,
                            'id_trimestre' => $trimestre[0]->trimestre_id]);
                        }
                    }
                }
            } elseif($turmas[$i]->turma->belongClasse->classe === "12ª" && $turmas[$i]->turma->belongClasse->classe === "13ª") {
                for ($j = 0; $j  < count($turmas[$i]->alunoAno); $j ++) {
                    for ($k= 0; $k < count($horario); $k++) {
                        $nota = Nota::where('aluno_id', $turmas[$i]->alunoAno[$j]->aluno_id)
                        ->where('disciplina_id', $horario[$k]->professorDisc->disciplina_id)
                        ->where('tipo_prova', "Avaliação Contínua")
                        ->where('id_trimestre', $trimestre[0]->trimestre_id)
                        ->get();
                        if (count($nota) < 1) {
                            Nota::create(['nota_aluno' => 0, 'tipo_prova' => "Avaliação Contínua", 'descricao_nota' => null,
                            'aluno_id' => $turmas[$i]->alunoAno[$j]->aluno_id, 'disciplina_id' => $horario[$k]->professorDisc->disciplina_id,
                            'id_trimestre' => $trimestre[0]->trimestre_id]);
                        }
                        $nota = Nota::where('aluno_id', $turmas[$i]->alunoAno[$j]->aluno_id)
                        ->where('disciplina_id', $horario[$k]->professorDisc->disciplina_id)
                        ->where('tipo_prova', "Prova Professor")
                        ->where('id_trimestre', $trimestre[0]->trimestre_id)
                        ->get();
                        if (count($nota) < 1) {
                            Nota::create(['nota_aluno' => 0, 'tipo_prova' => "Prova Professor", 'descricao_nota' => null,
                            'aluno_id' => $turmas[$i]->alunoAno[$j]->aluno_id, 'disciplina_id' => $horario[$k]->professorDisc->disciplina_id,
                            'id_trimestre' => $trimestre[0]->trimestre_id]);
                        }
                        if($trimestre[0]->trimestre === "3º" && $horario[0]->professorDisc->disciplina->sigla === "PT"){
                            $nota = Nota::where('aluno_id', $turmas[$i]->alunoAno[$j]->aluno_id)
                            ->where('disciplina_id', $horario[$k]->professorDisc->disciplina_id)
                            ->where('tipo_prova', "Exame")
                            ->where('id_trimestre', $trimestre[0]->trimestre_id)
                            ->get();
                            if (count($nota) < 1) {
                                Nota::create(['nota_aluno' => 0, 'tipo_prova' => "Exame", 'descricao_nota' => null,
                                'aluno_id' => $turmas[$i]->alunoAno[$j]->aluno_id, 'disciplina_id' => $horario[$k]->professorDisc->disciplina_id,
                                'id_trimestre' => $trimestre[0]->trimestre_id]);
                            }
                        } else{
                            $nota = Nota::where('aluno_id', $turmas[$i]->alunoAno[$j]->aluno_id)
                            ->where('disciplina_id', $horario[$k]->professorDisc->disciplina_id)
                            ->where('tipo_prova', "Prova Trimestre")
                            ->where('id_trimestre', $trimestre[0]->trimestre_id)
                            ->get();
                            if (count($nota) < 1) {
                                Nota::create(['nota_aluno' => 0, 'tipo_prova' => "Prova Trimestre", 'descricao_nota' => null,
                                'aluno_id' => $turmas[$i]->alunoAno[$j]->aluno_id, 'disciplina_id' => $horario[$k]->professorDisc->disciplina_id,
                                'id_trimestre' => $trimestre[0]->trimestre_id]);
                            }
                        }
                    }
                }
            }
        }
    }

    public static function AtribuirNotaAdministrativa($turma_id, $disciplina_id, $tipo_prova, $nota_aluno){
        $ano_lectivo = self::pegarAnoLectivo();
        $trimestre = self::pegarTrimestre();
        $turmas = AnoTurmaCood::with('turma.belongClasse', 'alunoAno')
        ->where('turma_id', $turma_id)
        ->where('ano_lectivo_id',  $ano_lectivo[0]->ano_lectivo_id)->get();
        for ($i = 0; $i  < count($turmas[0]->alunoAno); $i ++) {
            $nota = Nota::where('aluno_id', $turmas[0]->alunoAno[$i]->aluno_id)
            ->where('disciplina_id', $disciplina_id)
            ->where('tipo_prova', $tipo_prova)
            ->where('id_trimestre', $trimestre[0]->trimestre_id)
            ->get();
            if (count($nota) < 1) {
                Nota::create(['nota_aluno' => $nota_aluno, 'tipo_prova' => "Avaliação Contínua", 'descricao_nota' => null,
                'aluno_id' => $turmas[0]->alunoAno[$i]->aluno_id, 'disciplina_id' => $disciplina_id,
                'id_trimestre' => $trimestre[0]->trimestre_id]);
            }
        }
    }

    public static function AtribuirNotaAdministrativaTransferidos($aluno_id, $turma_id){
        $ano_lectivo = self::pegarAnoLectivo();
        $trimestre = self::pegarTrimestre();
        if ($trimestre[0]->trimestre === "1º") {
            $cont = 1;
        }
        if ($trimestre[0]->trimestre === "2º") {
            $cont = 2;
        }
        $horario = Horario::with('professorDisc.disciplina')->where('turma_id', $turma_id)->get();
        $x = 0;
        $disciplina_id[$x] = $horario[$x]->professorDisc->disciplina_id;
        for ($i = 0; $i < count($horario); $i++) {
            if(!in_array($horario[$i]->professorDisc->disciplina_id, $disciplina_id)){
                $disciplina_id[$x] = $horario[$i]->professorDisc->disciplina_id;
                $x++;
            }
        }
        for ($i = 0; $i < $cont; $i++) {
            $tri = Trimestre::where('trimestre', $i+1 . "º")->get();
            if(count($tri) > 0){
                for ($j = 0; $j < count($disciplina_id); $j++) {
                    $nota = Nota::where('disciplina_id', $disciplina_id[$j])
                    ->where('id_trimestre', $tri[0]->trimestre_id)
                    ->where('tipo_prova', "Avaliação Contínua")->get();
                    if(count($nota) > 0){
                        Nota::create(['nota_aluno' => 10, 'tipo_prova' => "Avaliação Contínua", 'descricao_nota' => "Nota administrativa.",
                        'aluno_id' => $aluno_id, 'disciplina_id' => $disciplina_id[$j],
                        'id_trimestre' => $tri[0]->trimestre_id]);
                    }
                    $nota = Nota::where('disciplina_id', $disciplina_id[$j])
                    ->where('id_trimestre', $tri[0]->trimestre_id)
                    ->where('tipo_prova', "Prova Professor")->get();
                    if(count($nota) > 0){
                        Nota::create(['nota_aluno' => 10, 'tipo_prova' => "Prova Professor", 'descricao_nota' => "Nota administrativa.",
                        'aluno_id' => $aluno_id, 'disciplina_id' => $disciplina_id[$j],
                        'id_trimestre' => $tri[0]->trimestre_id]);
                    }
                    $nota = Nota::where('disciplina_id', $disciplina_id[$j])
                    ->where('id_trimestre', $tri[0]->trimestre_id)
                    ->where('tipo_prova', "Prova Trimestre")->get();
                    if(count($nota) > 0){
                        Nota::create(['nota_aluno' => 10, 'tipo_prova' => "Prova Trimestre", 'descricao_nota' => "Nota administrativa.",
                        'aluno_id' => $aluno_id, 'disciplina_id' => $disciplina_id[$j],
                        'id_trimestre' => $tri[0]->trimestre_id]);
                    }
                }
            }
        }
    }

    public static function pegarDadosRecurso($aluno_id){
        $nota = Nota::where('aluno_id', 1)->get();

    }

}

