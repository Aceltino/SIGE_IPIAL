<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Turma extends Model
{
    use HasFactory;

    protected $table = 'turmas';
    protected $primaryKey = 'turma_id';
    protected $fillable = [
        'nome_turma',
        'classe_id',
        'curso_id',
        'turno_id',
        'created_at',
        'updated_at',
    ];

    public function horario()
    {
        return $this->hasMany(Horario::class, 'turma_id');
    }
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function dia()
    {
        return $this->belongsTo(Dia::class, 'dia_id');
    } 
    
    public function tempo()
    {
        return $this->belongsTo(Tempo::class, 'tempo_id');
    }
    
    public function beDiscp()
    {
        return $this->belongsTo(DisciplinaCurso::class, 'curso_id');
    }

    public function turmaCurso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classe_id');
    }

    public function belongerCurso()
    {
        return $this->belongsTo(Curso::class, 'curso_id', 'curso_id');
    }

    public function turmaProf()
    {
        return $this->belongsToMany(Professor_disciplina::class, 'horario', 'turma_id', 'professor_disciplina_id');
    }

    public function belongClasse()
    {
        return $this->belongsTo(Classe::class, 'classe_id', 'classe_id');
    }

    public function disciplinas()
    {
        return $this->belongsTo(ClasseDisciplina::class, 'classe_id');
    }

    public function alunos(){
        return $this->belongsToMany(Aluno::class, 'aluno_turma', 'aluno_id');
    }

    public function beAluno()
    {
        return $this->belongsToMany(Aluno::class, 'aluno_turma', 'turmaAno_id', 'aluno_id');
    }

    public function nota(){
        return $this->hasMany(Nota::class, 'trimestre_id', 'nota_id');
    }

    public function turno()
    {
        return $this->belongsTo(Turno::class, 'turno_id');
    }

    public function profdisciplina()
    {
        return $this->belongsTo(Professor_disciplina::class, 'prof_disc_id');
    }

    public function anoturmaCood()
    {
        return $this->hasMany(AnoTurmaCood::class, 'turmaAno_id');
    }

    /*
     * @author Augusto Kussema <email@email.com>
     */
    public function anoTurmaCoord()
    {
        return $this->belongsTo(AnoTurmaCood::class, 'turmaAno_id');
    }
}
