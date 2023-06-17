<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encarregado extends Model
{
    protected $table = 'encarregados';
    protected $primaryKey = 'encarregado_id';
    protected $fillable = [
        'grau_parentensco_enc',
        'pessoa_id',
        'updated_at',
        'created_at',
    ];
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    public function aluno()
    {
        return $this->belongsToMany(Aluno::class, 'aluno_encarregado', 'encarregado_id', 'aluno_id');
    }
}
