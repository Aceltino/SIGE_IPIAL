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
        Schema::create('aluno_turma', function (Blueprint $table) {

            $table->id('aluno_turma_id');

            $table->foreignId('ano_coord_id')->index('fk_tbl_aluno_turma_ano_turma_coord1_idx');

            //Chaves estrangeiras
            $table->foreignId('aluno_id')
            ->references('aluno_id')
            ->on('alunos')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');

            $table->primary(['aluno_turma_id', 'aluno_id', 'ano_coord_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_pertence_turma');
    }
};
