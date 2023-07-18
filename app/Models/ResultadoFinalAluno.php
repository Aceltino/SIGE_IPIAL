<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultadoFinalAluno extends Model
{
    use HasFactory;

    protected $table= "resultadoFinalAluno";
    protected $primaryKey= "resultadoFinalAluno_id";

    protected $fillable=[
        'situacao',
        'ano_lectivo_id',
        'aluno_id',
        'id_cadeiras_def',//Estou a armazenar o ID mas não esta relacionado com Disciplina
    ];

    public function ano_lectivo(){
        $this->belongsTo(Ano_lectivo::class,'ano_lectivo_id');
    }
    public function aluno(){
        $this->belongsTo(Aluno::class,'aluno_id');
    }
    public function alunos(){
        return $this->belongsTo(Aluno::class,'aluno_id');
    }
    public function ano_lectivos(){
        return $this->belongsTo(Ano_lectivo::class,'ano_lectivo_id');
    }
}
