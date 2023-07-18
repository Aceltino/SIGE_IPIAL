<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';
    protected $primaryKey = 'aluno_id';
    protected $foreignKey = 'candidato_id';
    protected $fillable = [
        'candidato_id',
        'status',
        'updated_at',
        'created_at',
        'curso_id',
    ];
    public function disciplina(){
        return $this->belongsTo(Disciplina::class, 'disciplina_id');
     }
     public function notas(){
        return $this->hasMany(Nota::class, 'nota_id');
    }
    public function turmas(){
        return $this->hasMany(Aluno_turma::class, 'aluno_id');
    }
    public function candidato()
    {
        return $this->belongsTo(Candidato::class, 'candidato_id');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function encarregado()
    {
        return $this->belongsToMany(Encarregado::class, 'aluno_encarregado', 'aluno_id', 'encarregado_id');
    }

    public function anoturma()
    {
        return $this->belongsToMany(AnoTurmaCood::class, 'aluno_turma', 'aluno_id', 'turmaAno_id')->withPivot('numero_aluno','situacao');
    }

    public function Media(){
        return $this->hasMany(Media::class,'media_id');
    }
    public function classificacaofincal(){
        return $this->hasMany(Classificacaofinal::class,'classificaoFinal_id');
    }

    public function turmaAno()
    {
        return $this->hasMany(AlunoTurma::class, 'aluno_id');
    }
    public function resultadoFinalAluno(){
        return $this->hasMany(ResultadoFinalAluno::class,'resultadoFinalAluno_id');
    }
}
