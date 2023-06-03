<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $table = 'pessoas';
    protected $primaryKey = 'pessoa_id';
    protected $fillable = [
        'nome_completo',
        'num_bi',
        'genero',
        'data_nascimento',
        'updated_at',
        'created_at',
    ];

    public function endereco(){
        $this->belongsTo(Endereco::class, 'endereco_id','pessoa_id');
    }
    public function user(){
        $this->hasOne(User::class,'pessoa_id','usuario_id');
    }
    public function candidato(){
        $this->hasOne(Candidato::class,'pessoa_id');
    }

    public function telefone()
    {
        return $this->hasMany(Telefone::class, 'pessoa_id', 'telefone_id');
    }

	/**
	 * @return mixed
	 */
	public function getTable() {
		return $this->table;
	}

	/**
	 * @param mixed $table
	 * @return self
	 */
	public function setTable($table): self {
		$this->table = $table;
		return $this;
	}
}
