<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisciplinaCurso extends Model
{
    use HasFactory;

    protected $table = 'disciplinas_cursos';
    protected $primaryKey = 'curso_id';

    public function disciplinas()
    {
        return $this->belongsTo(Disciplina::class, 'disciplina_id');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function professorDisciplina()
    {
        return $this->belongsTo(Professor_disciplina::class, 'disciplina_id');
    }
}
