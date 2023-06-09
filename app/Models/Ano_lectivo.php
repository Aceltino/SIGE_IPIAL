<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ano_lectivo extends Model
{
    use HasFactory;

    protected $table = 'ano_lectivo';

    protected $fillable = [
        'ano_lectivo_id',
        'ano_lectivo',
        'status_ano_lectivo',
        'data_inicio_ano_lectivo',
        'data_fim_ano_lectivo',
        'num_aluno_na_turma',
        'num_sala_escola',
        'created_at',
        'updated_at',
        'data_inicio_inscricao',
        'data_fim_inscricao',
        'data_inicio_matricula',
        'data_fim_matricula',
        'hora_inicio_manha',
        'hora_fim_manha',
        'duracao_tempo_manha',
        'duracao_int_menor_manha',
        'duracao_int_maior_manha',
        'hora_inicio_tarde',
        'hora_fim_tarde',
        'duracao_tempo_tarde',
        'duracao_int_menor_tarde',
        'duracao_int_maior_tarde',
        'hora_inicio_noite',
        'hora_fim_noite',
        'duracao_tempo_noite',
        'duracao_int_menor_noite',
        'duracao_int_maior_noite'

    ];


    public function candidato()
    {
        return $this->hasMany(Candidato::class, 'ano_lectivo_id', 'candidato_id');
    }

    public function trimestre(){
        return $this->hasMany(Trimestre::class, 'trimestre_id', 'ano_lectivo_id');
    }
}
