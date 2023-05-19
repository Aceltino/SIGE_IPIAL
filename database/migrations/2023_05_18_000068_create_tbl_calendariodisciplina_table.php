<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCalendariodisciplinaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_calendariodisciplina';

    /**
     * Run the migrations.
     * @table tbl_calendariodisciplina
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_calendario');
            $table->integer('id_disciplina');
            $table->integer('id_dia');
            $table->integer('id_tempo');
            $table->date('data_prova');

            $table->index(["id_disciplina"], 'fk_tbl_calendario_has_tbl_disciplina_tbl_disciplina1_idx');

            $table->index(["id_calendario"], 'fk_tbl_calendario_has_tbl_disciplina_tbl_calendario1_idx');


            $table->foreign('id_calendario', 'fk_tbl_calendario_has_tbl_disciplina_tbl_calendario1_idx')
                ->references('id_calendario')->on('tbl_calendario')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_disciplina', 'fk_tbl_calendario_has_tbl_disciplina_tbl_disciplina1_idx')
                ->references('disciplina_id')->on('tbl_disciplina')
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
