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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id('tempoDia_id');
            $table->integer('disciplina_id')->index('fk_tbl_tempo_dia_tbl_disciplina1_idx');
            $table->integer('tempo_id')->index('fk_tbl_tempo_dia_tbl_tempo1_idx');
            $table->integer('dia_id')->index('fk_tbl_tempo_dia_tbl_dia1_idx');
            $table->integer('id_turma')->index('fk_tbl_tempo_dia_tbl_turma1_idx');
            $table->integer('sala_id')->index('fk_tbl_tempo_dia_tbl_sala1_idx');

            $table->primary(['tempoDia_id', 'disciplina_id', 'tempo_id', 'dia_id', 'id_turma', 'sala_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
};
