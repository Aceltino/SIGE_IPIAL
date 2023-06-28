<?php

if (!function_exists('getNotasDoAluno')) {
    function getNotasDoAluno($alunoId){
        return \App\Models\Nota::where('aluno_id', $alunoId)->get();
    }
}

function getMAC($alunoId)
{
    $notas = \App\Models\Nota::where('aluno_id', $alunoId)
                        ->where('tipo_prova', "AvaliacaoContinua")
                        ->get();

    $sum = $notas->sum('nota_aluno');
    $count = $notas->count();
    $media = $count > 0 ? $sum / $count : 0;
    $mediaArredondada = $media != 0 ? round($media) : 0;
    $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';
    return $mediaFormatada;
}
