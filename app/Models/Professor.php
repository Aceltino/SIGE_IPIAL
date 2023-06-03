<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pessoa;

class Professor extends Model
{
    use HasFactory;

    protected $table = 'professores';

    protected $fillable = [

    ];

    public function pessoa(){
        return $this->hasMany(Pessoa::class, 'pessoa_id', 'professor_id');
    }

    public function curso(){
        return $this->belongsTo(Curso::class, 'curso_id', 'professor_id');
    }
}
