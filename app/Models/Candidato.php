<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    protected $table = 'Candidatos';
    protected $primaryKey = 'candidato_id';

    protected $fillable = [
        'nome_pai_cand',
        'nome_mae_cand',
        'naturalidade_cand',
        'escola_proveniencia_id',
        'created_at',
        'updated_at',
        'status',
        'pessoa_id',
        'ano_lectivo_id'
    ];

    //Relacionamento 1 para 1... 1 Candidato 'tem' 1 escola (Chave estrangeira está em candidato)
    public function escola()
    {
        $this->belongsTo(Escola_proveniencia::class, 'escola_proveniencia_id', 'candidato_id');
    }

    //Relacionamento 1 para N... 1 Candidato 'candidata-se' 1 anoLectivo (Chave estrangeira está em candidato)
    public function ano_lectivo()
    {
        return $this->belongsTo(Ano_lectivo::class, 'ano_lectivo_id', 'candidato_id');
    }

    public function pessoa()
    {
        $this->belongsTo(Pessoa::class,'pessoa_id','candidato_id');
    }

    public function curso()
    {
        return $this->belongsToMany(Cursos::class, 'candidato_seleciona_curso', 'candidato_id', 'curso_id');
    }
}
