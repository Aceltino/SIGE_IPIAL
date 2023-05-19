<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAlunoTurmaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_aluno_turma';

    /**
     * Run the migrations.
     * @table tbl_aluno_turma
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('aluno_id');
            $table->integer('turma_id');

            $table->index(["turma_id"], 'fk_tbl_aluno_has_tbl_turma_tbl_turma1_idx');

            $table->index(["aluno_id"], 'fk_tbl_aluno_has_tbl_turma_tbl_aluno1_idx');


            $table->foreign('aluno_id', 'fk_tbl_aluno_has_tbl_turma_tbl_aluno1_idx')
                ->references('aluno_id')->on('tbl_aluno')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('turma_id', 'fk_tbl_aluno_has_tbl_turma_tbl_turma1_idx')
                ->references('id_turma')->on('tbl_turma')
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
