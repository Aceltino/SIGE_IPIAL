<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisciplinaExisteClasseTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'disciplina_existe_classe';

    /**
     * Run the migrations.
     * @table disciplina_existe_classe
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('tbl_disciplina_id_disciplina');
            $table->integer('tbl_classe_id_classe');
            $table->tinyInteger('tenpo_maximo');

            $table->index(["tbl_classe_id_classe"], 'fk_tbl_disciplina_has_tbl_classe_tbl_classe1_idx');

            $table->index(["tbl_disciplina_id_disciplina"], 'fk_tbl_disciplina_has_tbl_classe_tbl_disciplina1_idx');


            $table->foreign('tbl_disciplina_id_disciplina', 'fk_tbl_disciplina_has_tbl_classe_tbl_disciplina1_idx')
                ->references('disciplina_id')->on('tbl_disciplina')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('tbl_classe_id_classe', 'fk_tbl_disciplina_has_tbl_classe_tbl_classe1_idx')
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
