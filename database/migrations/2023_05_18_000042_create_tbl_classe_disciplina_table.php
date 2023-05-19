<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblClasseDisciplinaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_classe_disciplina';

    /**
     * Run the migrations.
     * @table tbl_classe_disciplina
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('classe_disciplina_id');
            $table->integer('carga_horaria');
            $table->integer('disciplina_id');
            $table->integer('classe_id');

            $table->index(["disciplina_id"], 'fk_tbl_disciplina_pertence_classe_tbl_disciplina1_idx');

            $table->index(["classe_id"], 'fk_tbl_disciplina_pertence_classe_tbl_classe1_idx');


            $table->foreign('disciplina_id', 'fk_tbl_disciplina_pertence_classe_tbl_disciplina1_idx')
                ->references('disciplina_id')->on('tbl_disciplina')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('classe_id', 'fk_tbl_disciplina_pertence_classe_tbl_classe1_idx')
                ->references('classe_id')->on('tbl_classe')
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
