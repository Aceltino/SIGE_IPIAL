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
        Schema::table('candidato_seleciona_curso', function (Blueprint $table) {
            $table->foreign(['candidato_id'], 'fk_tbl_candidato_has_tbl_curso_tbl_candidato2')->references(['candidato_id'])->on('candidatos')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['curso_id'], 'fk_tbl_candidato_has_tbl_curso_tbl_curso2')->references(['curso_id'])->on('cursos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidato_seleciona_curso', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_candidato_has_tbl_curso_tbl_candidato2');
            $table->dropForeign('fk_tbl_candidato_has_tbl_curso_tbl_curso2');
        });
    }
};
