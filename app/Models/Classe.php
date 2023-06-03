<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $table = 'classes';

    protected $fillable = [
        'classe',
        'updated_at',
        'created_at',
    ];

    public function turma()
    {
        return $this->hasMany(Turma::class, 'classe_id', 'turma_id');
    }
}
