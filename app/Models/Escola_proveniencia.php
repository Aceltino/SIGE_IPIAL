<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola_proveniencia extends Model
{
    use HasFactory;
    protected $table = 'escola_proveniencia';
    protected $fillable = [
        'nome_escola',
        'turno',
        'num_processo',
        'num_aluno',
        'ultimo_anoLectivo',
        'media',
        'Ling_port',
        'Matematica',
        'Fisica',
        'Quimica',
        'updated_at',
        'created_at',
        'turma_aluno'
    ];


    public function candidato(){
        $this->hasOne(Candidato::class,'candidato_id','escola_proveniencia_id');
    }
}
