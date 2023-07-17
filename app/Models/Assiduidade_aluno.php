<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assiduidade_aluno extends Model
{
    use HasFactory;

    protected $table = 'assiduidade';
    protected $primaryKey = 'assiduidade_id';
    protected $fillable = [
        'status_falta',
        'descricao_falta',
        'tipo_falta',
        'aluno_id',
        'id_trimestre',
        'disciplina_id',
        'tempo_id'
    ];

    public function disciplina(){
        return $this->belongsTo(Disciplina::class, 'disciplina_id');
    }
    public function aluno(){
        return $this->belongsTo(Aluno::class, 'aluno_id');
    }
    public function beTrimestre()
    {
        return $this->belongsTo(Trimestre::class, 'id_trimestre');
    }
    public function trimestre(){
        return $this->belongsTo(Trimestre::class, 'id_trimestre', 'trimestre_id');
    }
    public function tempo(){
        return $this->belongsTo(Tempo::class, 'tempo_id');
    }
}
