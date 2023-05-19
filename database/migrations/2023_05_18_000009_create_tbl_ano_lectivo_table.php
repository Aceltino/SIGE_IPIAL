<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAnoLectivoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_ano_lectivo';

    /**
     * Run the migrations.
     * @table tbl_ano_lectivo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_ano_lectivo');
            $table->string('ano_lectivo', 15);
            $table->tinyInteger('status_ano_lectivo');
            $table->date('data_inicio_ano_lectivo');
            $table->date('data_fim_ano_ano_lectivo');
            $table->integer('num_aluno_na_turma');
            $table->integer('num_sala_escola');
            $table->timestamp('created_at');
            $table->timestamp('update_at');

            $table->unique(["ano_lectivo"], 'tb_ano_lectino_UNIQUE');
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
