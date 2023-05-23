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
        Schema::table('turma_estuda_turnos', function (Blueprint $table) {
            $table->foreign(['turno_id'], 'fk_turmas_has_turnos_turnos1')->references(['turno_id'])->on('turnos')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['iturma_id'], 'fk_turmas_has_turnos_turmas1')->references(['id_turma'])->on('turmas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('turma_estuda_turnos', function (Blueprint $table) {
            $table->dropForeign('fk_turmas_has_turnos_turnos1');
            $table->dropForeign('fk_turmas_has_turnos_turmas1');
        });
    }
};
