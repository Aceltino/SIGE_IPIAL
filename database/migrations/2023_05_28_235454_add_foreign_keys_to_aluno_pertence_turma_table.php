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
        Schema::table('aluno_pertence_turma', function (Blueprint $table) {
            $table->foreign(['ano_coord_id'], 'fk_tbl_aluno_turma_ano_turma_coord1')->references(['turmaAno_id'])->on('ano_turma_coord')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['aluno_id'], 'fk_tbl_aluno_turma_tbl_aluno1')->references(['aluno_id'])->on('alunos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aluno_pertence_turma', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_aluno_turma_ano_turma_coord1');
            $table->dropForeign('fk_tbl_aluno_turma_tbl_aluno1');
        });
    }
};
