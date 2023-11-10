<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor_disciplina extends Model
{
    use HasFactory;
    protected $table = 'professor_disciplina';
    protected $primaryKey = 'prof_disc_id';

    protected $fillable = [
        'disciplina_id',
        'professor_id',
        'ano_lectivo_id',
        'prioridade',
        'turno_id'
    ];

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
        return $this->hasMany(Horario::class, 'turma_id');
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class, 'professor_id');
    }

    public function turmaProf()
    {
        return $this->belongsToMany(Turma::class, 'horario', 'prof_disc_id', 'turma_id');
    }

    public function turno() {
        return $this->belongsTo(Turno::class, "turno_id");
    }

}
