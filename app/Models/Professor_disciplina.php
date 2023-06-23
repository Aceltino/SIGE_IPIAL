<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor_disciplina extends Model
{
    use HasFactory;
    protected $table = 'professor_disciplina';
    protected $primaryKey = 'professor_disciplina_id';

    protected $fillable = [
        'disciplina_id',
        'professor_id',
        'ano_lectivo_id',
        'prioridade'
    ];

    public function turma(){
        return $this->hasMany(Turma::class, 'turma_id');
    }
    public function turmaAnoCoord(){
        return $this->hasMany(Turma::class, 'turma_id');
    }
}
