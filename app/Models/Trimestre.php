<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trimestre extends Model
{
    use HasFactory;

    protected $table = 'trimestres';
    protected $primaryKey = 'trimestre_id';

    protected $fillable = [
        'trimestre',
        'status',
        'ano_lectivo_id',
        'data_inicio',
        'data_fim',
        'created_at',
        'updated_at'
    ];

    public function anoLectivo(){
        return $this->belongsTo(Ano_lectivo::class, 'ano_lectivo_id', 'trimestre_id');
    }
}
