<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProfessorLecionaDisciplinaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_professor_leciona_disciplina';

    /**
     * Run the migrations.
     * @table tbl_professor_leciona_disciplina
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_professor');
            $table->integer('id_isciplina');
            $table->integer('id_ano_lectivo');

            $table->index(["id_isciplina"], 'fk_professor_has_disciplinas_disciplinas1_idx');

            $table->index(["id_professor"], 'fk_professor_has_disciplinas_professor1_idx');

            $table->index(["id_ano_lectivo"], 'fk_professor_has_disciplinas_ano_lectivo1_idx');


            $table->foreign('id_professor', 'fk_professor_has_disciplinas_professor1_idx')
                ->references('professor_id')->on('tbl_professor')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_isciplina', 'fk_professor_has_disciplinas_disciplinas1_idx')
                ->references('disciplina_id')->on('tbl_disciplina')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_ano_lectivo', 'fk_professor_has_disciplinas_ano_lectivo1_idx')
                ->references('id_ano_lectivo')->on('tbl_ano_lectivo')
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
