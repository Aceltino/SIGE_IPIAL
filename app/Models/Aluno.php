<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';
    protected $primaryKey = 'aluno_id';
    protected $foreignKey = 'candidato_id';

    public function candidato(){
        return $this->belongsTo(Candidato::class, 'candidato_id');
    }
    public function disciplina(){
        return $this->belongsTo(Disciplina::class, 'disciplina_id');
     }
     public function notas(){
        return $this->hasMany(Nota::class, 'nota_id');
    }
    public function turmas(){
        return $this->hasMany(Aluno_turma::class, 'aluno_id');
    }
}
