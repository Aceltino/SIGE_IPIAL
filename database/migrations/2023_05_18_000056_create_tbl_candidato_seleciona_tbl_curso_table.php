<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCandidatoSelecionaTblCursoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_candidato_seleciona_tbl_curso';

    /**
     * Run the migrations.
     * @table tbl_candidato_seleciona_tbl_curso
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_candidato');
            $table->integer('id_curso');
            $table->integer('ordem escolha');

            $table->index(["id_curso"], 'fk_tbl_candidato_has_tbl_curso_tbl_curso1_idx');

            $table->index(["id_candidato"], 'fk_tbl_candidato_has_tbl_curso_tbl_candidato1_idx');


            $table->foreign('id_candidato', 'fk_tbl_candidato_has_tbl_curso_tbl_candidato1_idx')
                ->references('candidato_id')->on('tbl_candidato')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('id_curso', 'fk_tbl_candidato_has_tbl_curso_tbl_curso1_idx')
                ->references('curso_id')->on('tbl_curso')
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
