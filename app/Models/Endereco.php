<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'enderecos';

    protected $fillable = [
        'municipio',
        'bairro',
        'zona',
        'numero_casa',
        'created_at',
        'updated_at'
    ];

    public function pessoa(){
        $this->hasOne(Pessoa::class,'pessoa_id','endereco_id');
    }
}
