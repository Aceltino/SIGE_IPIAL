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
        Schema::table('cursos', function (Blueprint $table) {
            $table->foreign(['area_formacao_id'], 'fk_tbl_curso_tbl_area_formacao1')->references(['area_formacao_id'])->on('area_formacao')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['professor_id'], 'fk_tbl_curso_tbl_professor1')->references(['professor_id'])->on('professores')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_curso_tbl_area_formacao1');
            $table->dropForeign('fk_tbl_curso_tbl_professor1');
        });
    }
};
