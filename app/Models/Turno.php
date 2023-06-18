<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = 'turnos';
    protected $primaryKey = 'turno_id';
    protected $fillable = [
        'nome_turno',
        'created_at',
        'updated_at',
    ];
}
