<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\{
    Trimestre,Ano_lectivo,
    Aluno,Disciplina
};

class Media extends Model
{
    use HasFactory;

    protected $table='medias';

    protected $primaryKey='media_id';

    protected $fillable = [
        'nota',
        'trimestre_id',
        'aluno_id',
        'ano_lectivo_id',
        'disciplina_id',
    ];

    public function trimestres(){
        return $this->belongsTo(Trimestre::class,'trimestre_id');
    }

    public function alunos(){
        return $this->belongsTo(Aluno::class,'aluno_id');
    }

    public function disciplinas(){
        return $this->belongsTo(Disciplina::class,'disciplina_id');
    }
    


}
