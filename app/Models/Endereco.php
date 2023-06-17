<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'enderecos';
    protected $primaryKey = 'endereco_id';
    protected $fillable = [
        'endereco_id',
        'municipio',
        'bairro',
        'zona',
        'numero_casa',
        'created_at',
        'updated_at'
    ];

    public function pessoas(){
        $this->hasMany(Pessoa::class,'pessoa_id','endereco_id');
    }
}
