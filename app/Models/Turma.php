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

    /*
     * @author Augusto Kussema <dev.kussema@gmail.com>
     * 
     * @before Não altere em nada
     */
    public function belongClasse()
    {
        return $this->belongsTo(Classe::class, 'classe_id', 'classe_id');
    }

    public function disciplinas()
    {
        /*
         * @author Augusto Kussema
         * 
         * Disciplina::class: O modelo alvo do relacionamento.
         * ClasseDisciplina::class: A tabela intermediária que conecta Turma e Disciplina.
         * 'classe_id': O nome da coluna em ClasseDisciplina que referencia a chave estrangeira para Classe.
         * 'id': O nome da coluna na tabela Classe que é referenciada pela coluna 'classe_id' na tabela intermediária ClasseDisciplina.
         * 'id': O nome da coluna na tabela Turma que é referenciada pela coluna 'id' em Classe.
         * 'disciplina_id': O nome da coluna em ClasseDisciplina que referencia a chave estrangeira para Disciplina.
         */
        #return $this->hasManyThrough(Disciplina::class, ClasseDisciplina::class, 'classe_id', 'classe_id', 'id', 'disciplina_id');
        return $this->hasManyThrough(Disciplina::class, ClasseDisciplina::class, 'disciplina_id', 'disciplina_id');
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

    public function anoturmaCood()
    {
        return $this->hasMany(AnoTurmaCood::class, 'turmaAno_id');
    }


}
