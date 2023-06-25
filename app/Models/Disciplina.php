<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;
    
    protected $table = 'disciplinas';
    protected $primaryKey = 'disciplina_id';

    protected $fillable = [
        'nome_disciplina',
        'componente',
        'tempo_prova',
        'sigla',        
     ];
 
    public function professor(){
        return $this->belongsToMany(Professor::class, 'professor_disciplina', 'disciplina_id', 'professor_id');
    }

    public function aluno(){
        return $this->hasMany(Aluno::class, 'disciplina_id', 'aluno_id');
    }
     
    public function nota(){
        return $this->hasMany(Nota::class, 'disciplina_id', 'nota_id');
    }

    public function turmas()
    {
        return $this->belongsToMany(Turma::class, 'classe_disciplina', 'disciplina_id', 'classe_id');
    }
    // conexão de disciplina e curso
    public function cursos()
    {
        return $this->belonToMany(Curso::class, 'diciplina_curso', 'curso_id', 'disciplina_id');
    }
}
