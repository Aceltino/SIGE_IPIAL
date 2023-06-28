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
                            ->where('tipo_prova', "AvaliacaoContinua")
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
                        ->where('tipo_prova', "ProvaTrimestre")
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

/* ========= Segundo Trimestre ========= */
if (!function_exists('getMAC2')) {
    function getMAC2($alunoId, $disciplina)
    {
        $notas = \App\Models\Nota::where('aluno_id', $alunoId)
                            ->where('tipo_prova', "AvaliacaoContinua")
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
                        ->where('tipo_prova', "ProvaTrimestre")
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

/* ========= Terceiro Trimestre ========= */
if (!function_exists('getMAC3')) {
    function getMAC3($alunoId, $disciplina)
    {
        $notas = \App\Models\Nota::where('aluno_id', $alunoId)
                            ->where('tipo_prova', "AvaliacaoContinua")
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
                        ->where('tipo_prova', "ProvaTrimestre")
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