<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assiduidade_aluno extends Model
{
    use HasFactory;

    protected $table = 'assiduidade';
    protected $fillable = [
        'falta_aluno',
        'statuc_falta',
        'tipo_falta',
        'aluno_id',
        'id_trimestre',
        'disciplina_id'
    ];

    public function trimestre(){
        return $this->belongsTo(Trimestre::class, 'id_trimestre');
    }
}
