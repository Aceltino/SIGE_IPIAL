<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProfessorDisciplinaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_professor_disciplina';

    /**
     * Run the migrations.
     * @table tbl_professor_disciplina
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('disciplina_id');
            $table->integer('professor_id');

            $table->index(["disciplina_id"], 'fk_tbl_prof_leciona_disciplina_tbl_disciplina1_idx');

            $table->index(["professor_id"], 'fk_tbl_prof_leciona_disciplina_tbl_professor1_idx');


            $table->foreign('disciplina_id', 'fk_tbl_prof_leciona_disciplina_tbl_disciplina1_idx')
                ->references('disciplina_id')->on('tbl_disciplina')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('professor_id', 'fk_tbl_prof_leciona_disciplina_tbl_professor1_idx')
                ->references('professor_id')->on('tbl_professor')
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
