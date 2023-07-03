<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $table = 'horario';
    protected $foreignKey = 'disc_professor_id';
    protected $fillable = [
        'turma_id',
        'disc_professor_id',
        'turma_id',
        'dia_id',
        'sala_id',
        'tempo_id',
    ];


    public function turma(){
        return $this->belongsTo(Turma::class, 'turma_id');
    }

    public function professorDisc()
    {
        return $this->belongsTo(Professor_disciplina::class, 'disc_professor_id');
    }

    public function tempo(){
        return $this->belongsTo(Tempo::class, 'tempo_id');
    }
}
