<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;

class Professor extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'professores';
    protected $primaryKey = 'professor_id';
    protected $fillable = [
        'formacao',
        'pessoa_id',
        'area_formacao_id',
        'curso_id',
        'cargo',
    ];

    // Criei essa nova relação > Augusto Kussema
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    public static function findByUuid($uuid)
    {
        return static::where('uuid', $uuid)->first();
    }


    public function curso(){
        return $this->belongsTo(Curso::class, 'curso_id');
    }
    
    /*protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = static::gerarUuid();
        });
    }*/

    public function disciplinas()
    {
        return $this->hasManyThrough(Disciplina::class, Professor_disciplina::class);
    }
    public function professorDisciplina()
    {
        return $this->hasMany(Professor_disciplina::class, 'professor_id');
    }

    public function disciplina(){
        return $this->belongsToMany(Disciplina::class, 'professor_disciplina', 'professor_id', 'disciplina_id');
    }
    public function turmas(){
        return $this->belongsToMany(Turma::class, 'professor_turma', 'professor_id', 'disciplina_id');
    }
    public function professor_disciplina(){
        return $this->hasMany(Disciplina::class, 'disciplina_id');
    }
}
