<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ano_lectivo extends Model
{
    use HasFactory;

    protected $table = 'ano_lectivo';
    protected $primaryKey = 'ano_lectivo_id';

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
    ];


    public function candidato()
    {
        return $this->hasMany(Candidato::class, 'ano_lectivo_id');
    }

    public function trimestres(){
        return $this->hasMany(Trimestre::class, 'ano_lectivo_id');
    }
    public function comunicados()
    {
        return $this->hasMany(Comunicado::class);
    }
    public function classificacaofincal(){
        return $this->hasMany(Classificacaofinal::class,'classificaoFinal_id');
    }

    public function resultadoFinalAluno(){
        return $this->hasMany(ResultadoFinalAluno::class,'resultadoFinalAluno_id');
    }
}
