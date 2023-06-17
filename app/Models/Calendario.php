<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;
    protected $table = 'calendarios_provas';

    protected $fillable =
    [
        'inicio_prova',
        'fim_prova',
        'tipo_prova',
        'classe_id',
        'curso_id ',
        'turno_id ',
        'id_trimestre',
        'created_at',
        'updated_at',
        'correcao_prova'
    ];

}
