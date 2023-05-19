<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblHoraTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_hora';

    /**
     * Run the migrations.
     * @table tbl_hora
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('hora_id');
            $table->string('hora', 45);
            $table->integer('tbl_tempo_tempo_id');
            $table->integer('tbl_turno_turno_id');

            $table->index(["tbl_tempo_tempo_id"], 'fk_tbl_hora_tbl_tempo1_idx');

            $table->index(["tbl_turno_turno_id"], 'fk_tbl_hora_tbl_turno1_idx');


            $table->foreign('tbl_tempo_tempo_id', 'fk_tbl_hora_tbl_tempo1_idx')
                ->references('tempo_id')->on('tbl_tempo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tbl_turno_turno_id', 'fk_tbl_hora_tbl_turno1_idx')
                ->references('turno_id')->on('tbl_turno')
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
