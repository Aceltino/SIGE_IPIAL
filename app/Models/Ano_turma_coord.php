<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ano_turma_coord extends Model
{
    use HasFactory;
    protected $table = 'ano_turma_coord';
    protected $primaryKey = 'turmaAno_id';

    public function turma(){
        return $this->belongsTo(Turma::class, 'turma_id');
    }
}
