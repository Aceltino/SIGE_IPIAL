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
        return $this->belongsToMany(Professor::class, 'professor_disciplina', 'disciplina_id', 'professor_id')->withPivot('turno_id', 'ano_lectivo_id', 'prof_disc_id');
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
    public function curso()
    {
        return $this->belongsTo(Curso::class,'curso_id');
    }
    //conexão disciplina e classe: muitos para muitos
    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'classe_disciplina' , 'disciplina_id' , 'classe_id');
    }

    public function Media(){
        return $this->hasMany(Media::class,'media_id');
    }

    public function classificacaofinal(){
        return $this->hasMany(Classificacaofinal::class,'classificaoFinal_id');
    }
}
 