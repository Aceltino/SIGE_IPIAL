<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidTrait; 

class Professor extends Model
{
    use HasFactory;
    use UuidTrait;

    protected $table = 'professores';
    protected $primaryKey = 'professor_id';
    protected $fillable = [
        'formacao',
        'uuid',
        'pessoa_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = static::gerarUuid();
        });
    }
}
