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
        Schema::table('horas', function (Blueprint $table) {
            $table->foreign(['turno_id'], 'fk_horas_turnos1')->references(['turno_id'])->on('turnos')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['tempo_id'], 'fk_tbl_hora_tbl_tempo1')->references(['tempo_id'])->on('tempos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('horas', function (Blueprint $table) {
            $table->dropForeign('fk_horas_turnos1');
            $table->dropForeign('fk_tbl_hora_tbl_tempo1');
        });
    }
};
