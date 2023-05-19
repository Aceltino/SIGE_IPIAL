<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAssiduidadeTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_assiduidade';

    /**
     * Run the migrations.
     * @table tbl_assiduidade
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('assiduidade_id');
            $table->tinyInteger('falta_aluno');
            $table->enum('status_falta', ['JUSTIFICADA', 'N-JUSTIFICADA']);
            $table->longText('descricao_falta')->nullable();
            $table->enum('tipo_falta', ['Vermelha', 'Azul']);
            $table->integer('aluno_id');

            $table->index(["aluno_id"], 'fk_tbl_assiduidade_aluno_tbl_aluno1_idx');


            $table->foreign('aluno_id', 'fk_tbl_assiduidade_aluno_tbl_aluno1_idx')
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
