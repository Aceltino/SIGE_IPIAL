<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasseDisciplina extends Model
{
    use HasFactory;

    protected $table = 'classe_disciplina';
    protected $primaryKey = 'classe_disciplina_id';

    public function cDisciplina()
    {
        return $this->morphTo();
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classe_id', 'classe_id');
    }

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class, 'disciplina_id', 'disciplina_id');
    }
}
