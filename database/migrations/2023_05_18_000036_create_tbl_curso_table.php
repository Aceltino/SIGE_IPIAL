<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCursoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_curso';

    /**
     * Run the migrations.
     * @table tbl_curso
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('curso_id');
            $table->string('nome_curso');
            $table->string('sigla', 4);
            $table->integer('area_formacao_id');
            $table->timestamp('created_at');
            $table->timestamp('update_at');

            $table->index(["area_formacao_id"], 'fk_tbl_curso_tbl_area_formacao1_idx');


            $table->foreign('area_formacao_id', 'fk_tbl_curso_tbl_area_formacao1_idx')
                ->references('area_formacao_id')->on('tbl_area_formacao')
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
