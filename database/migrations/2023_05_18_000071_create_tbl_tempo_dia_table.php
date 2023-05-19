<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTempoDiaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_tempo_dia';

    /**
     * Run the migrations.
     * @table tbl_tempo_dia
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tempo_dia_id');
            $table->integer('tbl_disciplina_disciplina_id');
            $table->integer('tbl_tempo_tempo_id');
            $table->integer('tbl_horario_horario_id');
            $table->integer('tbl_dia_dia_id');

            $table->index(["tbl_disciplina_disciplina_id"], 'fk_tbl_tempo_dia_tbl_disciplina1_idx');

            $table->index(["tbl_tempo_tempo_id"], 'fk_tbl_tempo_dia_tbl_tempo1_idx');

            $table->index(["tbl_horario_horario_id"], 'fk_tbl_tempo_dia_tbl_horario1_idx');

            $table->index(["tbl_dia_dia_id"], 'fk_tbl_tempo_dia_tbl_dia1_idx');


            $table->foreign('tbl_disciplina_disciplina_id', 'fk_tbl_tempo_dia_tbl_disciplina1_idx')
                ->references('disciplina_id')->on('tbl_disciplina')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tbl_tempo_tempo_id', 'fk_tbl_tempo_dia_tbl_tempo1_idx')
                ->references('tempo_id')->on('tbl_tempo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tbl_horario_horario_id', 'fk_tbl_tempo_dia_tbl_horario1_idx')
                ->references('horario_id')->on('tbl_horario')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tbl_dia_dia_id', 'fk_tbl_tempo_dia_tbl_dia1_idx')
                ->references('dia_id')->on('tbl_dia')
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
