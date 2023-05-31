<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ano_lectivo extends Model
{
    use HasFactory;

    protected $table = 'ano_lectivo';

    protected $fillable = [
        'ano_lectivo',
        'status_ano_lectivo',
        'data_inicio_ano_lectivo',
        'data_fim_ano_ano_lectivo',
        'num_aluno_na_turma',
        'num_sala_escola',
        'created_at',
        'updated_at',
        'data_inicio_inscricao',
        'data_fim_inscricao',
        'data_inicio_matricula',
        'data_fim_matricula'
    ];


    public function candidato()
    {
        return $this->hasMany(Candidato::class, 'ano_lectivo_id', 'candidato_id');
    }
}
