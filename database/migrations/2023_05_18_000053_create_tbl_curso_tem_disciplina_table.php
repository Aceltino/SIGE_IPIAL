<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCursoTemDisciplinaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_curso_tem_disciplina';

    /**
     * Run the migrations.
     * @table tbl_curso_tem_disciplina
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_curso');
            $table->integer('id_disciplina');

            $table->index(["id_disciplina"], 'fk_Cursos_has_disciplinas_disciplinas1_idx');

            $table->index(["id_curso"], 'fk_Cursos_has_disciplinas_Cursos1_idx');


            $table->foreign('id_curso', 'fk_Cursos_has_disciplinas_Cursos1_idx')
                ->references('curso_id')->on('tbl_curso')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_disciplina', 'fk_Cursos_has_disciplinas_disciplinas1_idx')
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
