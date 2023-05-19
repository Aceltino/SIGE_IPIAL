<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPessoaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_pessoa';

    /**
     * Run the migrations.
     * @table tbl_pessoa
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('pessoa_id');
            $table->string('nome_completo');
            $table->string('num_bi', 14);
            $table->date('data_nascimento');
            $table->enum('gerero_DG', ['Masculino', 'Femenino']);
            $table->integer('endereco_id');
            $table->timestamp('created_at');
            $table->timestamp('update_at');

            $table->unique(["num_bi"], 'num_bi_UNIQUE');

            $table->index(["endereco_id"], 'fk_tbl_pessoa_tbl_endereco1_idx');


            $table->foreign('endereco_id', 'fk_tbl_pessoa_tbl_endereco1_idx')
                ->references('endereco_id')->on('tbl_endereco')
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
