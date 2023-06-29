<?php

namespace App\Helpers;

use App\Models\Nota;

class NotaHelper
{
    public static function getNotasDoAluno($alunoId)
    {
        return Nota::where('aluno_id', $alunoId)->get();
    }

    public static function getMAC($alunoId)
    {
        $notas = Nota::where('aluno_id', $alunoId)
                        ->where('tipo_prova', "AvaliacaoContinua")
                        ->get();

        $sum = $notas->sum('nota_aluno');
        $count = $notas->count();
        $media = $count > 0 ? $sum / $count : 0;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';
        return $mediaFormatada;
    }

    public static function getNPP($alunoId)
    {
        $notas = Nota::where('aluno_id', $alunoId)
                        ->where('tipo_prova', "Prova Professor")
                        ->get();

        $sum = $notas->sum('nota_aluno');
        $count = $notas->count();
        $media = $count > 0 ? $sum / $count : 0;
        $mediaArredondada = $media != 0 ? round($media) : 0;
        $mediaFormatada = $mediaArredondada != 0 ? number_format($mediaArredondada, 1) : '0';
        return $mediaFormatada;
    }
}
