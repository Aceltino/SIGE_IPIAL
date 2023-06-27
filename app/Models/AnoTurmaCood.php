<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnoTurmaCood extends Model
{
    protected $table = 'ano_turma_coord';
    protected $primaryKey = 'turmaAno_id';
    protected $fillable = [
        'turma_id',
        'num_vagas',
        'professor_id',
        'ano_lectivo_id',
        'updated_at',
        'created_at',
    ];

    public function turma()
    {
        return $this->belongsTo(Turma::class, 'turma_id');
    }
    public function ano_lectivo()
    {
        return $this->belongsTo(Ano_lectivo::class, 'ano_lectivo_id');
    }
    public function aluno()
    {
        return $this->belongsToMany(Aluno::class, 'aluno_turma', 'turmaAno_id', 'aluno_id')->withPivot('numero_aluno','situacao');
    }

    public function alunoAno()
    {
        return $this->belongsToMany(Aluno::class, 'aluno_turma', 'turmaAno_id', 'aluno_id');
    }
}
