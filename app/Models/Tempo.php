<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempo extends Model
{
    use HasFactory;
    protected $table = 'tempos';
    protected $primaryKey = 'tempo_id';

    public function hora(){
        return $this->hasMany(Hora::class, 'hora_id');
    }
}
