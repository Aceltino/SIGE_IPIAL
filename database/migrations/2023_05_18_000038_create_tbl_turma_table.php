<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTurmaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_turma';

    /**
     * Run the migrations.
     * @table tbl_turma
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_turma');
            $table->string('nome_turma', 45);
            $table->integer('tbl_sala_id_sala');

            $table->index(["tbl_sala_id_sala"], 'fk_tbl_turma_tbl_sala1_idx');


            $table->foreign('tbl_sala_id_sala', 'fk_tbl_turma_tbl_sala1_idx')
                ->references('id_sala')->on('tbl_sala')
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
