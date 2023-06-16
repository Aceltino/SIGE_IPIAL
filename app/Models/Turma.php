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

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'turma_id', 'classe_id');
    }

    public function alunos(){
        return $this->belongsToMany(Aluno::class, 'aluno_turma', 'aluno_id');
    }
    public function nota(){
        return $this->hasMany(Nota::class, 'trimestre_id', 'nota_id');
    }


    public function turno()
    {
        return $this->belongsTo(Turno::class, 'turno_id');
    }

}
