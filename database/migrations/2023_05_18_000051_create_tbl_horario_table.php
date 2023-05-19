<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblHorarioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_horario';

    /**
     * Run the migrations.
     * @table tbl_horario
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('horario_id');
            $table->integer('tbl_ano_lectivo_id_ano_lectivo');
            $table->integer('tbl_turma_id_turma');

            $table->index(["tbl_ano_lectivo_id_ano_lectivo"], 'fk_tbl_horario_tbl_ano_lectivo1_idx');

            $table->index(["tbl_turma_id_turma"], 'fk_tbl_horario_tbl_turma1_idx');


            $table->foreign('tbl_ano_lectivo_id_ano_lectivo', 'fk_tbl_horario_tbl_ano_lectivo1_idx')
                ->references('id_ano_lectivo')->on('tbl_ano_lectivo')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tbl_turma_id_turma', 'fk_tbl_horario_tbl_turma1_idx')
                ->references('id_turma')->on('tbl_turma')
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
