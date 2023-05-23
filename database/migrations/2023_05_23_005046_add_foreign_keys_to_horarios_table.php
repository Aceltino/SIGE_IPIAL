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
        Schema::table('horarios', function (Blueprint $table) {
            $table->foreign(['id_turma'], 'fk_tbl_tempo_dia_tbl_turma1')->references(['id_turma'])->on('turmas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['disciplina_id'], 'fk_tbl_tempo_dia_tbl_disciplina1')->references(['disciplina_id'])->on('disciplinas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['tempo_id'], 'fk_tbl_tempo_dia_tbl_tempo1')->references(['tempo_id'])->on('tempos')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['dia_id'], 'fk_tbl_tempo_dia_tbl_dia1')->references(['dia_id'])->on('dias')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['sala_id'], 'fk_tbl_tempo_dia_tbl_sala1')->references(['sala_id'])->on('salas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('horarios', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_tempo_dia_tbl_turma1');
            $table->dropForeign('fk_tbl_tempo_dia_tbl_disciplina1');
            $table->dropForeign('fk_tbl_tempo_dia_tbl_tempo1');
            $table->dropForeign('fk_tbl_tempo_dia_tbl_dia1');
            $table->dropForeign('fk_tbl_tempo_dia_tbl_sala1');
        });
    }
};
