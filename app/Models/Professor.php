<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $table = 'professores';

    public function pessoa(){
        return $this->hasMany(Pessoa::class, 'pessoa_id', 'professor_id');
    }

    public function curso(){
        return $this->belongsTo(Curso::class, 'curso_id', 'professor_id');
    }
    protected $primaryKey = 'professor_id';
  
    protected $fillable = [
        'formacao',
        'pessoa_id',
    ];
}
