<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCursoHasTblDisciplinaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_curso_has_tbl_disciplina';

    /**
     * Run the migrations.
     * @table tbl_curso_has_tbl_disciplina
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tbl_curso_curso_id');
            $table->integer('tbl_disciplina_disciplina_id');

            $table->index(["tbl_disciplina_disciplina_id"], 'fk_tbl_curso_has_tbl_disciplina_tbl_disciplina1_idx');

            $table->index(["tbl_curso_curso_id"], 'fk_tbl_curso_has_tbl_disciplina_tbl_curso1_idx');


            $table->foreign('tbl_curso_curso_id', 'fk_tbl_curso_has_tbl_disciplina_tbl_curso1_idx')
                ->references('curso_id')->on('tbl_curso')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tbl_disciplina_disciplina_id', 'fk_tbl_curso_has_tbl_disciplina_tbl_disciplina1_idx')
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
