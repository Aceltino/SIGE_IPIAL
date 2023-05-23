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
        Schema::create('turmas_calendario', function (Blueprint $table) {
            $table->integer('turma_agenda_id', true);
            $table->integer('sala_id')->nullable()->index('fk_tbl_turmaAgenda_tbl_sala1_idx');
            $table->integer('calendario_id')->index('fk_tbl_turmaAgenda_tbl_calendario1_idx');
            $table->integer('coord_turmaAno_id')->nullable()->index('fk_turmas_calendario_ano_turma_coord1_idx');

            $table->primary(['turma_agenda_id', 'calendario_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas_calendario');
    }
};
