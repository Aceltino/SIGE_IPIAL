<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoPertenceAnolectivoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'curso_pertence_anoLectivo';

    /**
     * Run the migrations.
     * @table curso_pertence_anoLectivo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_curso');
            $table->integer('id_ano_lectivo');

            $table->index(["id_ano_lectivo"], 'fk_Cursos_has_ano_lectivo_ano_lectivo1_idx');

            $table->index(["id_curso"], 'fk_Cursos_has_ano_lectivo_Cursos1_idx');


            $table->foreign('id_curso', 'fk_Cursos_has_ano_lectivo_Cursos1_idx')
                ->references('curso_id')->on('tbl_curso')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_ano_lectivo', 'fk_Cursos_has_ano_lectivo_ano_lectivo1_idx')
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
