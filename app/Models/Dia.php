<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    use HasFactory;
    protected $table = 'dias';
    protected $primaryKey = 'dia_id';

    public function turma()
    {
        return $this->hasMany(Turma::class, 'dia_id', 'turma_id');
    }
}
