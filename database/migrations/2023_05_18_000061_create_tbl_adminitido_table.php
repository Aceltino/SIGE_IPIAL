<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAdminitidoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_adminitido';

    /**
     * Run the migrations.
     * @table tbl_adminitido
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('adminitido_id');
            $table->integer('candidato_id');

            $table->index(["candidato_id"], 'fk_tbl_adminitido_tbl_candidato1_idx');


            $table->foreign('candidato_id', 'fk_tbl_adminitido_tbl_candidato1_idx')
                ->references('candidato_id')->on('tbl_candidato')
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
