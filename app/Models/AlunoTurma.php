<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoTurma extends Model
{
    protected $table = 'aluno_turma';
    protected $fillable = [
        'aluno_id',
        'turmaAno_id',
        'numero_aluno',
        'updated_at',
        'created_at',
    ];

    public function turmaAno()
    {
        return $this->belongsTo(AnoTurmaCood::class, 'turmaAno_id');
    }

    public function anoTurmaCood()
    {
        return $this->belongsTo(AnoTurmaCood::class, 'turmaAno_id');
    }

    public function aluno(){
        return $this->belongsTo(Aluno::class, 'aluno_id');
    }
}
