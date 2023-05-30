<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_completo',
        'num_bi',
        'genero',
        'data_nascimento',
        'updated_at',
        'created_at',
        'endereco_id'
    ];

    public function endereco(){
        $this->belongsTo(Endereco::class, 'endereco_id','pessoa_id');
    }
    public function user(){
        $this->hasOne(User::class,'pessoa_id','usuario_id');
    }
}
