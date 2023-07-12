<?php

namespace App\Models;

use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\{Pessoa, Endereco};

class User extends Model implements Authenticatable,CanResetPassword
{

    use HasFactory, AuthenticatableTrait;

    public function getEmailForPasswordReset()
    {
        return $this->email;
    }

    public function sendPasswordResetNotification($token)
    {
        // Implemente aqui a lógica para enviar a notificação de redefinição de senha
    }

    protected $table = 'users';
    protected $primaryKey= 'usuario_id';
    protected $fillable = [

        'nome_usuario',
        'password',
        'email',
        'status_usuario',
        'cargo_usuario',
        'imagem_usuario',
        'pessoa_id',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',

    ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    public function belongPessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');

    }
    public function comunicados()
    {
        return $this->hasMany(Comunicado::class);
    }

    public function active_session(){
        return $this->hasMany(Active_session::class,'active_session_id');
    }

    
}
