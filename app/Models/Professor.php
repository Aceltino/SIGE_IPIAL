<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait;

class Professor extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'professores';

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    public function curso(){
        return $this->belongsTo(Curso::class, 'curso_id', 'professor_id');
    }
    protected $primaryKey = 'professor_id';

    protected $fillable = [
        'formacao',
        'pessoa_id',
    ];

    //
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = static::gerarUuid();
        });
    }
}
