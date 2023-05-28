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
        Schema::create('horas', function (Blueprint $table) {
            $table->integer('hora_id', true);
            $table->string('hora', 45);
            $table->integer('tempo_id')->index('fk_tbl_hora_tbl_tempo1_idx');
            $table->integer('turno_id')->index('fk_horas_turnos1_idx');

            $table->primary(['hora_id', 'tempo_id', 'turno_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horas');
    }
};
