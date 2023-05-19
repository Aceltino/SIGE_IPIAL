<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUsuarioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_usuario';

    /**
     * Run the migrations.
     * @table tbl_usuario
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_usuario');
            $table->string('nome_usuario');
            $table->string('password', 65);
            $table->string('email', 100);
            $table->tinyInteger('status_usuario');
            $table->enum('cargo_usuario', ['Professor', 'Aluno', 'Director', 'Subdirector', 'Secretaria', 'Coordenacao', 'Administrador']);
            $table->string('imagem_usuario', 65)->nullable();
            $table->integer('tbl_pessoa_pessoa_id');
            $table->timestamp('created_at');
            $table->timestamp('update_at');

            $table->unique(["nome_usuario"], 'nome_usuario_UNIQUE');

            $table->unique(["email"], 'email_UNIQUE');

            $table->index(["tbl_pessoa_pessoa_id"], 'fk_tbl_usuario_tbl_pessoa1_idx');


            $table->foreign('tbl_pessoa_pessoa_id', 'fk_tbl_usuario_tbl_pessoa1_idx')
                ->references('pessoa_id')->on('tbl_pessoa')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
