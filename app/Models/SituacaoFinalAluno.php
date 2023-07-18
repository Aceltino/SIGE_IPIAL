<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SituacaoFinalAluno extends Model
{
    use HasFactory;
    protected $table = 'resultadofinalaluno';
    protected $primaryKey = 'resultadoFinalAluno_id';

    public function ano_lectivos(){
        return $this->belongsTo(Ano_lectivo::class,'ano_lectivo_id');
    }
    public function alunos(){
        return $this->belongsTo(Aluno::class,'aluno_id');
    }
}
