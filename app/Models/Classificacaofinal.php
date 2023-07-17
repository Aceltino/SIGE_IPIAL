<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classificacaofinal extends Model
{
    use HasFactory;

    protected $table= "classificacaofinal";
    protected $primaryKey="classificaoFinal_id";
    protected $fillable=[
        'ca',
        'cfd',
        'disciplina_id',
        'ano_lectivo_id',
        'aluno_id',
        'created_at',
        'updated_at',
    ];

    public function disciplinas(){
        return $this->belongsTo(Disciplina::class,'disciplina_id');
    }
    public function ano_lectivos(){
        return $this->belongsTo(Ano_lectivo::class,'ano_lectivo_id');
    }
    public function alunos(){
        return $this->belongsTo(Aluno::class,'aluno_id');
    }

}
