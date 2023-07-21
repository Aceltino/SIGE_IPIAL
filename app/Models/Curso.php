<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    protected $primaryKey = 'curso_id';

    protected $fillable = [
        'nome_curso',
        'sigla',
        'area_formacao_id',
        'professor_id',
        'created_at',
        'updated_at'
    ];

    public function coordenador(){
        return $this->hasOne(Professor::class, 'curso_id');
    }

    public function areaFormacao(){
        return $this->belongsTo(Area_formacao::class, 'area_formacao_id');
    }

    public function Candidato()
    {
        return $this->belongsToMany(Candidato::class, 'candidato_curso', 'curso_id', 'candidato_id');
    }

    public function turma()
    {
        return $this->hasMany(Turma::class, 'curso_id', 'turma_id');
    }

    public function aluno()
    {
        return $this->hasMany(Aluno::class, 'curso_id');
    }
    public function disciplinas()
    {
        return $this->hasMany(Disciplina::class, 'disciplina_id');
    }
    public function calendarios()
    {
        return $this->hasMany(CalendarioProva::class, 'calendario_id');
    }

    public function turmas()
    {
        return $this->hasMany(Turma::class, 'curso_id');
    }
}
