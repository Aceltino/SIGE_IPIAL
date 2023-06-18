<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno_turma extends Model
{
    use HasFactory;
    protected $table = 'aluno_turma';
    protected $primaryKey = 'aluno_id';

    public function aluno(){
        return $this->hasMany(Aluno::class, 'aluno_id');
    }
    public function anoCoord(){
        return $this->belongsTo(Ano_turma_coord::class, 'turmaAno_id');
    }
}
