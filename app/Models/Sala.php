<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    protected $table = 'salas';
    protected $primaryKey = 'sala_id';

    public function horario()
    {
        return $this->hasMany(Horario::class, 'sala_id');
    }

}
