<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $table = 'horario';
    protected $foreignKey = 'disc_professor_id';

    public function turma(){
        return $this->belongsTo(Turma::class, 'turma_id');
    }
}
