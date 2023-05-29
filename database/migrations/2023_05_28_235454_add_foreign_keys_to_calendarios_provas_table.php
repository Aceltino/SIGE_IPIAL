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
        Schema::table('calendarios_provas', function (Blueprint $table) {
            $table->foreign(['classe_id'], 'fk_tbl_calendario_tbl_classe1')->references(['classe_id'])->on('classes')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_trimestre'], 'fk_tbl_calendario_tbl_trimestre1')->references(['id_trimestre'])->on('trimestres')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['curso_id'], 'fk_tbl_calendario_tbl_curso1')->references(['curso_id'])->on('cursos')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['turno_id'], 'fk_tbl_calendario_tbl_turno1')->references(['turno_id'])->on('turnos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calendarios_provas', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_calendario_tbl_classe1');
            $table->dropForeign('fk_tbl_calendario_tbl_trimestre1');
            $table->dropForeign('fk_tbl_calendario_tbl_curso1');
            $table->dropForeign('fk_tbl_calendario_tbl_turno1');
        });
    }
};
