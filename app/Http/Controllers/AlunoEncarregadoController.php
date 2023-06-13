<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoEncarregadoController extends Controller
{
    private static int $inserido = 0;
    public static function store($alunoEncs)
    {
        $encarregados = [];
        foreach ($alunoEncs['encarregado'] as $i => $encarregadoId)
        {
            if (in_array($encarregadoId, $encarregados))
            {
                return false;
            }

            $aluno = Aluno::find($alunoEncs['aluno_id']);
            $aluno->encarregado()->attach($encarregadoId);

            $encarregados[] = $encarregadoId;
            self::$inserido++;
        }

        return self::$inserido == 3;
    }
}
