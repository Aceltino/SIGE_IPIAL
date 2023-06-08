<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';
    protected $primaryKey = 'pessoa_id';
    protected $fillable = [
        'nome_completo',
        'num_bi',
        'genero',
        'telefone',
        'data_nascimento',
        'endereco_id',
        'updated_at',
        'created_at',
    ];

    public function belongEndereco()
    {
        return $this->belongsTo(Endereco::class, 'endereco_id');
    }

    public function endereco(){
        $this->belongsTo(Endereco::class, 'endereco_id','pessoa_id');
    }
    public function user(){
        $this->hasOne(User::class,'pessoa_id','usuario_id');
    }
    public function candidato(){
        $this->hasOne(Candidato::class,'candidato_id');
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

    public function professor(){
        $this->hasMany(Professor::class, 'professor_id','pessoa_id');
    }
}
