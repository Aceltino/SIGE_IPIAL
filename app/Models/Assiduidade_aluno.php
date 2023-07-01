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
        'falta_aluno',
        'status_falta',
        'descricao_falta',
        'tipo_falta',
        'aluno_id',
        'id_trimestre',
        'created_at',
        'updated_at',
        'disciplina_id'
    ];

    public function disciplina(){
        return $this->belongsTo(Disciplina::class, 'disciplina_id');
    }
    public function aluno(){
        return $this->belongsTo(Aluno::class, 'aluno_id');
    }
    public function trimestre(){
        return $this->belongsTo(Trimestre::class, 'trimestre_id');
    }
}
