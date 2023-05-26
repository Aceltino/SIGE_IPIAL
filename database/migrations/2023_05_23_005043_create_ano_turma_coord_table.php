<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ano_turma_coord', function (Blueprint $table) {
            $table->id('turmaAno_id');
            $table->integer('turma_id')->index('fk_aluno_turma_coord_tbl_turma1_idx');
            $table->integer('num_vagas');
            $table->integer('professor_id')->index('fk_ano_turma_coord_professores1_idx');
            $table->integer('ano_lectivo_id')->index('fk_ano_turma_coord_anos_lectivo1_idx');

            $table->primary(['turmaAno_id', 'turma_id', 'professor_id', 'ano_lectivo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ano_turma_coord');
    }
};
