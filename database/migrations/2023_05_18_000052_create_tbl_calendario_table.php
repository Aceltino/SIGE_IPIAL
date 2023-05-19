<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCalendarioTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_calendario';

    /**
     * Run the migrations.
     * @table tbl_calendario
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_calendario');
            $table->date('data_inicio_prova');
            $table->unsignedInteger('id_trimestre');
            $table->integer('id_turma');
            $table->enum('tipo_prova', ['ProvaProfessor', 'ProvaTrimestre', 'ProvaGlobal', 'Recurso', 'ExameRecurso']);
            $table->date('data_fim_prova');

            $table->index(["id_turma"], 'fk_tbl_calendario_turmas1_idx');


            $table->foreign('id_turma', 'fk_tbl_calendario_turmas1_idx')
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
