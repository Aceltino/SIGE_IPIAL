<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblTurmaTemSalaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_turma_tem_sala';

    /**
     * Run the migrations.
     * @table tbl_turma_tem_sala
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_turmaSala');
            $table->integer('id_turma');
            $table->integer('id_sala');

            $table->index(["id_sala"], 'fk_turmas_has_salas_salas1_idx');

            $table->index(["id_turma"], 'fk_turmas_has_salas_turmas1_idx');


            $table->foreign('id_turma', 'fk_turmas_has_salas_turmas1_idx')
                ->references('id_turma')->on('tbl_turma')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_sala', 'fk_turmas_has_salas_salas1_idx')
                ->references('sala_id')->on('tbl_sala')
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
