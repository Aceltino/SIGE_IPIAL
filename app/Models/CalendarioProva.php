<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalendarioProva extends Model
{
    use HasFactory;
    protected $table = 'calendarios_provas';
    protected $primaryKey = 'calendario_id';
    protected $fillable = 
    [
        'inicio_prova',
        'fim_prova',
        'tipo_prova',
        'correcao_prova',
    ];

    public function classe()
    {
        return $this->belongTo(Classe::class,'classe_id');
    }
    public function curso()
    {
        return $this->belongTo(Curso::class,'curso_id');
    }
    public function turno()
    {
        return $this->belongTo(Turno::class,'turno_id');
    }
    public function trimeste()
    {
        return $this->belongTo(Trimestre::class,'id_trimestre');
    }
}
