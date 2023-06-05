<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicado extends Model
{
    use HasFactory;

    protected $fillable = [
       'titulo_com',
       'conteudo_com',
    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }
    public function ano_lectivo()
    {
        return $this->belongsTo(Ano_lectivo::class, 'ano_lectivo_id');
    }
}
