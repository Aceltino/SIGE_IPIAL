<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSecPedagogicoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_sec_pedagogico';

    /**
     * Run the migrations.
     * @table tbl_sec_pedagogico
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_sec_pedagogico');
            $table->string('nome_completo_sec');
            $table->string('num_bi_sec', 14);
            $table->date('data_nascimento_sec');
            $table->string('endereco_sec');
            $table->integer('telefone_sec');
            $table->enum('genero_sec', ['Masculino', 'Femenino']);
            $table->integer('id_usuario');

            $table->unique(["num_bi_sec"], 'num_bi_sec_UNIQUE');

            $table->index(["id_usuario"], 'fk_Secretaria_Pedagogica_usuarios1_idx');


            $table->foreign('id_usuario', 'fk_Secretaria_Pedagogica_usuarios1_idx')
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
