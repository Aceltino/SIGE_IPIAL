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
        Schema::create('turma_estuda_turnos', function (Blueprint $table) {
            $table->integer('turma_turno_id', true);
            $table->integer('iturma_id')->index('fk_turmas_has_turnos_turmas1_idx');
            $table->integer('turno_id')->index('fk_turmas_has_turnos_turnos1_idx');

            $table->primary(['turma_turno_id', 'iturma_id', 'turno_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turma_estuda_turnos');
    }
};
