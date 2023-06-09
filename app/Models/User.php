<?php

namespace App\Models;

<<<<<<< Updated upstream
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> Stashed changes
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

<<<<<<< Updated upstream
class User extends Model implements Authenticatable,CanResetPassword
{


    use HasFactory, AuthenticatableTrait;
=======
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

>>>>>>> Stashed changes

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
<<<<<<< Updated upstream

=======
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id', 'usuario_id');

=======
    public function pessoa(){
        return $this->belongsTo(Pessoa::class, 'pessoa_id', 'ususario_id');
>>>>>>> Stashed changes
    }


}
