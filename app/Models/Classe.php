<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $table = 'classes';
    protected $primaryKey = 'classe_id';

    protected $fillable = [
        'classe',
        'updated_at',
        'created_at',
    ];
 
    /*
     *  Disciplina - nota
     *  Nota - aluno
     *  Aluno - ano_turma_coord
    */
    public function turmas()
    {
        return $this->hasMany(Turma::class, 'classe_id', 'turma_id');
    }
    public function calendarios() 
    {
        return $this->hasMany(CalendarioProva::class, 'calendario_id');
    }

   public function classe_disciplina()
    {
        return $this->belongsToMany(Disciplina::class, 'classe_disciplina' ,'disciplina_id','classe')->withPivot('tipo_disciplina','carga_horaria');;
    }
 
    public function disciplina() 
    {
        return $this->belongsToMany(Disciplina::class, 'classe_disciplina' ,'disciplina_id','classe_id')->withPivot('tipo_disciplina','carga_horaria');;

        // return $this->hasMany(Calendario::class, 'calendario_id');
    }
}
