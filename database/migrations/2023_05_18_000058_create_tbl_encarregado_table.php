<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblEncarregadoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_encarregado';

    /**
     * Run the migrations.
     * @table tbl_encarregado
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('encarregado_id');
            $table->string('grau_parentensco_enc');
            $table->integer('pessoa_id');

            $table->index(["pessoa_id"], 'fk_tbl_encarregado_tbl_pessoa1_idx');


            $table->foreign('pessoa_id', 'fk_tbl_encarregado_tbl_pessoa1_idx')
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
