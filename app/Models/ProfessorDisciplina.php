<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessorDisciplina extends Model
{
    use HasFactory;
    protected $table = 'professor_disciplina';
    protected $primaryKey = 'prof_disc_id';

    public function horario(){
        return $this->hasMany(Horario::class, 'turma_id');
    }
}
