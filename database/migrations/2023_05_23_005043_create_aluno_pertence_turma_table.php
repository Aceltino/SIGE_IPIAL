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
        Schema::create('aluno_pertence_turma', function (Blueprint $table) {
            $table->integer('aluno_turma_id', true);
            $table->integer('aluno_id')->index('fk_tbl_aluno_turma_tbl_aluno1_idx');
            $table->integer('ano_coord_id')->index('fk_tbl_aluno_turma_ano_turma_coord1_idx');

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
