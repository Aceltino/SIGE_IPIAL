<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola_proveniencia extends Model
{
    use HasFactory;
    protected $table = 'escola_proveniencia';
    protected $primaryKey = 'escola_proveniencia_id';

    protected $fillable = [
        'nome_escola',
        'turno',
        'num_processo',
        'num_aluno',
        'ultimo_anoLectivo',
        'ling_port',
        'matematica',
        'fisica',
        'quimica',
        'updated_at',
        'created_at',
        'turma_aluno'
    ];


    public function candidato(){
        $this->hasOne(Candidato::class, 'escola_proveniencia_id');
    }
}
