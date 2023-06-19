<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $table = 'notas';
    protected $primaryKey = 'nota_id';

    public function aluno(){
        return $this->belongsTo(Aluno::class, 'aluno_id');
    }
    public function disciplina(){
        return $this->belongsTo(Disciplina::class, 'disciplina_id');
    }
    public function trimestre(){
        return $this->belongsTo(Trimestre::class, 'id_trimestre');
    }
}
