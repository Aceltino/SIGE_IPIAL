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
        Schema::table('programas_calendario', function (Blueprint $table) {
            $table->foreign(['dia_id'], 'fk_tbl_agendaCalendario_tbl_dia1')->references(['dia_id'])->on('dias')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['tempo_id'], 'fk_tbl_agendaCalendario_tbl_tempo1')->references(['tempo_id'])->on('tempos')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['calendario_id'], 'fk_tbl_agendaCalendario_tbl_calendario1')->references(['calendario_id'])->on('calendarios_provas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['disciplina_id'], 'fk_tbl_agendaCalendario_tbl_disciplina1')->references(['disciplina_id'])->on('disciplinas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('programas_calendario', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_agendaCalendario_tbl_dia1');
            $table->dropForeign('fk_tbl_agendaCalendario_tbl_tempo1');
            $table->dropForeign('fk_tbl_agendaCalendario_tbl_calendario1');
            $table->dropForeign('fk_tbl_agendaCalendario_tbl_disciplina1');
        });
    }
};
