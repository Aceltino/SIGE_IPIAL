<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAlunoEncarregadoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_aluno_encarregado';

    /**
     * Run the migrations.
     * @table tbl_aluno_encarregado
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('encarregado_id');
            $table->integer('aluno_id');

            $table->index(["encarregado_id"], 'fk_tbl_aluno_has_tbl_encarregado_tbl_encarregado1_idx');

            $table->index(["aluno_id"], 'fk_tbl_aluno_has_tbl_encarregado_tbl_aluno1_idx');


            $table->foreign('encarregado_id', 'fk_tbl_aluno_has_tbl_encarregado_tbl_encarregado1_idx')
                ->references('encarregado_id')->on('tbl_encarregado')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('aluno_id', 'fk_tbl_aluno_has_tbl_encarregado_tbl_aluno1_idx')
                ->references('aluno_id')->on('tbl_aluno')
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
