<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Active_session extends Model
{
    use HasFactory;

    protected $table="active_sessions";
    protected $primaryKey="active_session_id";

    protected $fillable=[
        'usuario_id',
        'session_id'
    ];


    //Relacionamento entre Usuario(1 para 1)
    public function user(){
        return $this->belongsTo(User::class,'usuario_id');
    }
}
