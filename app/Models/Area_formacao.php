<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area_formacao extends Model
{
    use HasFactory;
    protected $table = 'area_formacao';

    public function curso(){
        return $this->hasMany(Curso::class, 'curso_id', 'area_formacao_id');
    }
}
