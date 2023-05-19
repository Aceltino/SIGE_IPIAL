<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSubPedagogicoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_sub_pedagogico';

    /**
     * Run the migrations.
     * @table tbl_sub_pedagogico
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_subpedagogica');
            $table->string('nome_completo_sub');
            $table->string('num_bi_sub', 14);
            $table->longText('endereco_sub');
            $table->date('data_nascimento_sub');
            $table->enum('genero_sub', ['Masculino', 'Feminino']);
            $table->integer('telelefone_sub');
            $table->integer('id_usuario');

            $table->unique(["nome_completo_sub"], 'nome_completo_sub_UNIQUE');

            $table->index(["id_usuario"], 'fk_Sub_Pedagogica_usuarios1_idx');


            $table->foreign('id_usuario', 'fk_Sub_Pedagogica_usuarios1_idx')
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
