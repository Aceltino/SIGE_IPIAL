<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatoCurso extends Model
{
    use HasFactory;

    protected $table = 'candidato_curso';

    protected $fillable = [
        'candidato_id',
        'curso_id',
        'preferencia',
        'created_at',
        'updated_at',
    ];
}
