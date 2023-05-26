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
        Schema::create('programas_calendario', function (Blueprint $table) {
            $table->id('agendaCalendar_id');
            $table->integer('calendario_id')->index('fk_tbl_agendaCalendario_tbl_calendario1_idx');
            $table->integer('disciplina_id')->index('fk_tbl_agendaCalendario_tbl_disciplina1_idx');
            $table->integer('tempo_id')->nullable()->index('fk_tbl_agendaCalendario_tbl_tempo1_idx');
            $table->integer('dia_id')->index('fk_tbl_agendaCalendario_tbl_dia1_idx');

            $table->primary(['agendaCalendar_id', 'calendario_id', 'disciplina_id', 'dia_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programas_calendario');
    }
};
