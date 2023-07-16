<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area_formacao extends Model
{
    use HasFactory;
    protected $table = 'area_formacao';
    protected $primaryKey = 'area_formacao_id';
    protected $fillable = [
        'nome_area_formacao',
        'created_at',
        'updated_at'
    ];

    public function curso(){
        return $this->hasMany(Curso::class, 'curso_id');
    }

    public function coordenador(){
        return $this->hasOne(Professor::class, 'area_formacao_id');
    }
}
