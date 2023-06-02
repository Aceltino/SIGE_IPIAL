<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    protected $fillable = [
        'nome_curso',
        'sigla',
        'area_formacao_id',
        'updated_at',
        'created_at',
        'professor_id'

    ];

    public function Candidato()
    {
        return $this->belongsToMany(Candidato::class, 'candidato_seleciona_curso', 'curso_id', 'candidato_id');
    }

    public function turma()
    {
        return $this->hasMany(Turma::class, 'curso_id', 'turma_id');
    }

}
