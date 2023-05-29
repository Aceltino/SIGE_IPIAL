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
        Schema::table('ano_turma_coord', function (Blueprint $table) {
            $table->foreign(['turma_id'], 'fk_aluno_turma_coord_tbl_turma1')->references(['id_turma'])->on('turmas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['professor_id'], 'fk_ano_turma_coord_professores1')->references(['professor_id'])->on('professores')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['ano_lectivo_id'], 'fk_ano_turma_coord_anos_lectivo1')->references(['ano_lectivo_id'])->on('anos_lectivo')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ano_turma_coord', function (Blueprint $table) {
            $table->dropForeign('fk_aluno_turma_coord_tbl_turma1');
            $table->dropForeign('fk_ano_turma_coord_professores1');
            $table->dropForeign('fk_ano_turma_coord_anos_lectivo1');
        });
    }
};
