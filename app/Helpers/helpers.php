<?php

/*
 * @author Augusto Kussema
 */

if (!function_exists('getIdade')) {
    function getIdade($dataNascimento) {
        return \Carbon\Carbon::parse($dataNascimento)->age;
    }
}

if (!function_exists('getGenero')) {
    function getGenero($genero, $short=true) {

        if ($short)
            return $genero == "Masculino" ? "M" : "F";
            
        return $genero == "Masculino" ? "Masculino" : "Feminino";
    }
}

if (!function_exists('getNotasDoAluno')) {
    function getNotasDoAluno() {
        return \App\Models\Nota::where('aluno_id', $alunoId)->get();
    }
}

if (!function_exists('getMAC1')) {
    function getMAC1($alunoId, $disciplina)
    {
        $notas = \App\Models\Nota::where('aluno_id', $alunoId)
                            ->where('tipo_prova', "Avaliação Contínua")
                            ->where('disciplina_id', $disciplina)
                            ->whereHas('trimestre', function ($query) {
                                $query->where('trimestre', '1º');
                            })
                            ->get();

        $sum = $notas->sum('nota_aluno');
        $count = $notas->count();
        $media = $count > 0 ? $sum / $count : 0;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';
        return $mediaFormatada;
    }
}

if (!function_exists('getNPP1')) {
    function getNPP1($alunoId, $disciplina) {
        $notas = \App\Models\Nota::where('aluno_id', $alunoId)
                        ->where('tipo_prova', "Prova Professor")
                        ->where('disciplina_id', $disciplina)
                        ->whereHas('trimestre', function ($query) {
                            $query->where('trimestre', 1);
                        })
                        ->get();

        $sum = $notas->sum('nota_aluno');
        $count = $notas->count();
        $media = $count > 0 ? $sum / $count : 0;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';
        return $mediaFormatada;
    }
}

if (!function_exists('getNPT1')) {
    function getNPT1($alunoId, $disciplina) {
        $notas = \App\Models\Nota::where('aluno_id', $alunoId)
                        ->where('tipo_prova', "Prova Trimestre")
                        ->where('disciplina_id', $disciplina)
                        ->whereHas('trimestre', function ($query) {
                            $query->where('trimestre', 1);
                        })
                        ->get();

        $sum = $notas->sum('nota_aluno');
        $count = $notas->count();
        $media = $count > 0 ? $sum / $count : 0;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';
        return $mediaFormatada;
    }
}

if (!function_exists('getMT1')) {
    function getMT1($alunoId, $disciplina) {
        $provaTrimestre = getMAC1($alunoId, $disciplina);

        $provaProfessor = getNPP1($alunoId, $disciplina);

        $avaliacaoContinua = getNPT1($alunoId, $disciplina);

        $media = ($provaTrimestre + $provaProfessor + $avaliacaoContinua) / 3;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';

        return $mediaFormatada;
    }
}

if (!function_exists('getFNJ1')) {
    function getFNJ1($alunoId, $disciplina) {
        $notas = \App\Models\Assiduidade_aluno::where('aluno_id', $alunoId)
                        ->where('status_falta', "N-JUSTIFICADA")
                        ->where('disciplina_id', $disciplina)
                        ->whereHas('trimestre', function ($query) {
                            $query->where('id_trimestre', 1);
                        })
                        ->get();

        $sum = $notas->sum('falta_aluno');
        if ($sum)
            return $sum;
        return '';
    }
}

if (!function_exists('getFJ1')) {
    function getFJ1($alunoId, $disciplina) {
        $notas = \App\Models\Assiduidade_aluno::where('aluno_id', $alunoId)
                        ->where('status_falta', "JUSTIFICADA")
                        ->where('disciplina_id', $disciplina)
                        ->whereHas('trimestre', function ($query) {
                            $query->where('id_trimestre', 1);
                        })
                        ->get();

        $sum = $notas->sum('falta_aluno');
        if ($sum)
            return $sum;
        return '';
    }
}

/* ========= Segundo Trimestre ========= */
if (!function_exists('getMAC2')) {
    function getMAC2($alunoId, $disciplina)
    {
        $notas = \App\Models\Nota::where('aluno_id', $alunoId)
                            ->where('tipo_prova', "Avaliação Contínua")
                            ->where('disciplina_id', $disciplina)
                            ->whereHas('trimestre', function ($query) {
                                $query->where('trimestre', 2);
                            })
                            ->get();

        $sum = $notas->sum('nota_aluno');
        $count = $notas->count();
        $media = $count > 0 ? $sum / $count : 0;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';
        return $mediaFormatada;
    }
}

if (!function_exists('getNPP2')) {
    function getNPP2($alunoId, $disciplina) {
        $notas = \App\Models\Nota::where('aluno_id', $alunoId)
                        ->where('tipo_prova', "Prova Professor")
                        ->where('disciplina_id', $disciplina)
                        ->whereHas('trimestre', function ($query) {
                            $query->where('trimestre', 2);
                        })
                        ->get();

        $sum = $notas->sum('nota_aluno');
        $count = $notas->count();
        $media = $count > 0 ? $sum / $count : 0;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';
        return $mediaFormatada;
    }
}

if (!function_exists('getNPT2')) {
    function getNPT2($alunoId, $disciplina) {
        $notas = \App\Models\Nota::where('aluno_id', $alunoId)
                        ->where('tipo_prova', "Prova Trimestre")
                        ->where('disciplina_id', $disciplina)
                        ->whereHas('trimestre', function ($query) {
                            $query->where('trimestre', 2);
                        })
                        ->get();

        $sum = $notas->sum('nota_aluno');
        $count = $notas->count();
        $media = $count > 0 ? $sum / $count : 0;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';
        return $mediaFormatada;
    }
}

if (!function_exists('getMT2')) {
    function getMT2($alunoId, $disciplina) {
        $provaTrimestre = getMAC2($alunoId, $disciplina);

        $provaProfessor = getNPP2($alunoId, $disciplina);

        $avaliacaoContinua = getNPT2($alunoId, $disciplina);

        $media = ($provaTrimestre + $provaProfessor + $avaliacaoContinua) / 3;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';

        return $mediaFormatada;
    }
}

if (!function_exists('getFNJ2')) {
    function getFNJ2($alunoId, $disciplina) {
        $notas = \App\Models\Assiduidade_aluno::where('aluno_id', $alunoId)
                        ->where('status_falta', "N-JUSTIFICADA")
                        ->where('disciplina_id', $disciplina)
                        ->whereHas('trimestre', function ($query) {
                            $query->where('id_trimestre', 2);
                        })
                        ->get();

        $sum = $notas->sum('falta_aluno');
        if ($sum)
            return $sum;
        return '';
    }
}

if (!function_exists('getFJ2')) {
    function getFJ2($alunoId, $disciplina) {
        $notas = \App\Models\Assiduidade_aluno::where('aluno_id', $alunoId)
                        ->where('status_falta', "JUSTIFICADA")
                        ->where('disciplina_id', $disciplina)
                        ->whereHas('trimestre', function ($query) {
                            $query->where('id_trimestre', 2);
                        })
                        ->get();

        $sum = $notas->sum('falta_aluno');
        if ($sum)
            return $sum;
        return '';
    }
}

/* ========= Terceiro Trimestre ========= */
if (!function_exists('getMAC3')) {
    function getMAC3($alunoId, $disciplina)
    {
        $notas = \App\Models\Nota::where('aluno_id', $alunoId)
                            ->where('tipo_prova', "Avaliação Contínua")
                            ->where('disciplina_id', $disciplina)
                            ->whereHas('trimestre', function ($query) {
                                $query->where('trimestre', 3);
                            })
                            ->get();

        $sum = $notas->sum('nota_aluno');
        $count = $notas->count();
        $media = $count > 0 ? $sum / $count : 0;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';
        return $mediaFormatada;
    }
}

if (!function_exists('getNPP3')) {
    function getNPP3($alunoId, $disciplina) {
        $notas = \App\Models\Nota::where('aluno_id', $alunoId)
                        ->where('tipo_prova', "Prova Professor")
                        ->where('disciplina_id', $disciplina)
                        ->whereHas('trimestre', function ($query) {
                            $query->where('trimestre', 3);
                        })
                        ->get();

        $sum = $notas->sum('nota_aluno');
        $count = $notas->count();
        $media = $count > 0 ? $sum / $count : 0;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';
        return $mediaFormatada;
    }
}

if (!function_exists('getNPT3')) {
    function getNPT3($alunoId, $disciplina) {
        $notas = \App\Models\Nota::where('aluno_id', $alunoId)
                        ->where('tipo_prova', "Prova Trimestre")
                        ->where('disciplina_id', $disciplina)
                        ->whereHas('trimestre', function ($query) {
                            $query->where('trimestre', 3);
                        })
                        ->get();

        $sum = $notas->sum('nota_aluno');
        $count = $notas->count();
        $media = $count > 0 ? $sum / $count : 0;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';
        return $mediaFormatada;
    }
}

if (!function_exists('getMT3')) {
    function getMT3($alunoId, $disciplina) {
        $provaTrimestre = getMAC3($alunoId, $disciplina);

        $provaProfessor = getNPP3($alunoId, $disciplina);

        $avaliacaoContinua = getNPT3($alunoId, $disciplina);

        $media = ($provaTrimestre + $provaProfessor + $avaliacaoContinua) / 3;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';

        return $mediaFormatada;
    }
}

if (!function_exists('getFNJ3')) {
    function getFNJ3($alunoId, $disciplina) {
        $notas = \App\Models\Assiduidade_aluno::where('aluno_id', $alunoId)
                        ->where('status_falta', "N-JUSTIFICADA")
                        ->where('disciplina_id', $disciplina)
                        ->whereHas('trimestre', function ($query) {
                            $query->where('id_trimestre', 3);
                        })
                        ->get();

        $sum = $notas->sum('falta_aluno');
        if ($sum)
            return $sum;
        return '';
    }
}

if (!function_exists('getFJ1')) {
    function getFJ1($alunoId, $disciplina) {
        $notas = \App\Models\Assiduidade_aluno::where('aluno_id', $alunoId)
                        ->where('status_falta', "JUSTIFICADA")
                        ->where('disciplina_id', $disciplina)
                        ->whereHas('trimestre', function ($query) {
                            $query->where('id_trimestre', 3);
                        })
                        ->get();

        $sum = $notas->sum('falta_aluno');
        if ($sum)
            return $sum;
        return '';
    }
}

if (!function_exists('getFTotal')) {
    function getFTotal($alunoId, $disciplina) {
        $fnj1 = intval(getFNJ1($alunoId, $disciplina));
        $fj1  = intval(getFJ1($alunoId, $disciplina));

        $fnj2 = intval(getFNJ2($alunoId, $disciplina));
        $fj2  = intval(getFJ2($alunoId, $disciplina));

        $fnj3 = intval(getFNJ3($alunoId, $disciplina));

        $total1 = ($fnj1 - $fj1);
        $total2 = ($fnj2 - $fj2);
        $total3 = ($total1 + $total2 + $fnj3);

        if ($total3)
            return $total3;
        return '';
    }
}

/* ========= Considerações Finais ========= */
if (!function_exists('getExame')) {
    function getExame($alunoId, $disciplina) {
        $notas = \App\Models\Nota::where('aluno_id', $alunoId)
                        ->where('tipo_prova', "Exame")
                        ->where('disciplina_id', $disciplina)
                        ->get();

        $sum = $notas->sum('nota_aluno');
        $count = $notas->count();
        $media = $count > 0 ? $sum / $count : 0;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';
        return $mediaFormatada;
    }
}

if (!function_exists('getMFD')) {
    function getMFD($alunoId, $disciplina) {
        $mt1 = getMT1($alunoId, $disciplina);

        $mt2 = getMT2($alunoId, $disciplina);

        $mt3 = getMT3($alunoId, $disciplina);

        $media = ($mt1 + $mt2 + $mt3) / 3;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';

        return $mediaFormatada;
    }
}

if (!function_exists('getOBS')) {
    function getOBS($alunoId, $disciplina) {
        $media = getMFD($alunoId, $disciplina);
        $faltas = getFTotal($alunoId, $disciplina);

        if ($media >= 10 && $faltas <= 5)
            return 'Transita';

        return 'Não Transita';
    }
}

if (!function_exists('getProfDisciplina')) {
    function getProfDisciplina($profId)
    {
        $disciplinaID = \App\Models\Professor_disciplina::where('professor_id', $profId)
                            ->get();

        return $disciplinaID;
    }
}

if (!function_exists('getDisciplina')) {
    function getDisciplina($disciplinaID)
    {
        $nomeDisciplina = \App\Models\Disciplina::where('disciplina_id', $disciplinaID)
                            ->first();

        return $nomeDisciplina;
    }
}

if (!function_exists('sendNotas')) {
    function sendNotas($alunoId, $disciplinaID)
    {
        $trimestre1 = getMT1($alunoId, $disciplinaID);
        $trimestre2 = getMT2($alunoId, $disciplinaID);
        $trimestre3 = getMT3($alunoId, $disciplinaID);

        ($trimestre1 > 0 ? '' : $trimestre1 = 0);
        ($trimestre2 > 0 ? '' : $trimestre2 = 0);
        ($trimestre3 > 0 ? '' : $trimestre3 = 0);
        $media = new \App\Models\Media;

        $media1trim = $media->where('aluno_id', $alunoId)
                            ->whereHas('trimestres', function($query) {
                                $query->where('trimestre', 1);
                            })
                        ->first();
        $nota1trim = $media1trim->nota;
        
        
        if ($media1trim->count() > 0) {
            $find = \App\Models\Media::findOrFail($media->media_id);
            $find->nota = $trimestre1;
            $find->trimestre_id = 19;
            $find->ano_lectivo_id = 14;
            $find->aluno_id = 4;
            $find->disciplina_id = 4;
            $find->save();
        }
        
        return 1;
    }
}
