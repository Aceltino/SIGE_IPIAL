<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{ Pessoa, Ano_lectivo };

class Comunicado extends Model
{
    use HasFactory;

    protected $fillable = [
       'titulo_com',
       'conteudo_com',
    ];
    public function  User()
    {
        return $this->belongsTo(Pessoa::class);
    }
    public function ano_lectivo()
    {
        return $this->belongsTo(Ano_lectivo::class, 'ano_lectivo_id');
    }   
}
