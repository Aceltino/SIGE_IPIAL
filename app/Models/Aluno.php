<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    protected $primaryKey = 'aluno_id';
    protected $fillable = [
        'candidato_id',
        'status',
        'updated_at',
        'created_at',
        'curso_id',
    ];

    public function candidato()
    {
        return $this->belongsTo(Candidato::class, 'candidato_id');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function encarregado()
    {
        return $this->belongsToMany(Encarregado::class, 'aluno_encarregado', 'aluno_id', 'encarregado_id');
    }

    public function Anoturma()
    {
        return $this->belongsToMany(AnoTurmaCood::class, 'aluno_turma', 'aluno_id', 'turmaAno_id');
    }
}
