<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoEncarregado extends Model
{
    protected $table = 'aluno_encarregado';
    protected $primaryKey = 'enc_aluno_id';
    protected $fillable = [
        'aluno_id',
        'encarregado-id',
    ];
}
