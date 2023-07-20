<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;
    protected $table = 'horas';
    protected $primaryKey = 'hora_id';
    protected $fillable = [
        'hora',
        'tempo_id',
        'turno_id',
        'created_at',
        'updated_at'
    ];

    public function tempo(){
        return $this->belongsTo(Tempo::class, 'tempo_id');
    }

    public function turno()
    {
        return $this->belongsTo(Turno::class, 'turno_id');
    }
}
