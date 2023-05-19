<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCordenadorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_cordenador';

    /**
     * Run the migrations.
     * @table tbl_cordenador
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_cordenadores');
            $table->string('nome_completo_coord');
            $table->string('num_bi_coord', 14);
            $table->date('data_nascimento_coord');
            $table->integer('telefone_coord');
            $table->string('endereco_coord');
            $table->enum('genero_coord', ['Masculino', 'Femenino']);
            $table->integer('id_usuario');

            $table->unique(["num_bi_coord"], 'num_bi_UNIQUE');

            $table->index(["id_usuario"], 'fk_cordenadores_usuarios1_idx');


            $table->foreign('id_usuario', 'fk_cordenadores_usuarios1_idx')
                ->references('id_usuario')->on('tbl_usuario')
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
