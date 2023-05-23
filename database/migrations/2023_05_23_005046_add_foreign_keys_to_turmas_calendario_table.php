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
        Schema::table('turmas_calendario', function (Blueprint $table) {
            $table->foreign(['sala_id'], 'fk_tbl_turmaAgenda_tbl_sala1')->references(['sala_id'])->on('salas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['calendario_id'], 'fk_tbl_turmaAgenda_tbl_calendario1')->references(['calendario_id'])->on('calendarios_provas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['coord_turmaAno_id'], 'fk_turmas_calendario_ano_turma_coord1')->references(['turmaAno_id'])->on('ano_turma_coord')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('turmas_calendario', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_turmaAgenda_tbl_sala1');
            $table->dropForeign('fk_tbl_turmaAgenda_tbl_calendario1');
            $table->dropForeign('fk_turmas_calendario_ano_turma_coord1');
        });
    }
};
