<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor_disciplina extends Model
{
    use HasFactory;
    protected $table = 'professor_disciplina';
    protected $primaryKey = 'disc_professor_id';

    public function turma(){
        return $this->hasMany(Turma::class, 'turma_id');
    }
    public function turmaAnoCoord(){
        return $this->hasMany(Turma::class, 'turma_id');
    }
    public function disciplina(){
        return $this->belongsTo(Disciplina::class, 'disciplina_id');
    }
    public function horario(){
        return $this->hasMany(Horario::class, 'disc_professor_id');
    }

    public function turmaProf()
    {
        return $this->belongsToMany(Turma::class, 'horario', 'disc_professor_id', 'turma_id');
    }

}
