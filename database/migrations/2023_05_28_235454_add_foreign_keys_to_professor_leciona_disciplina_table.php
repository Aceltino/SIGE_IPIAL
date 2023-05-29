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
        Schema::table('professor_leciona_disciplina', function (Blueprint $table) {
            $table->foreign(['disciplina_id'], 'fk_tbl_prof_leciona_disciplina_tbl_disciplina1')->references(['disciplina_id'])->on('disciplinas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['ano_lectivo_id'], 'fk_tbl_professor_disciplina_tbl_ano_lectivo1')->references(['ano_lectivo_id'])->on('anos_lectivo')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['professor_id'], 'fk_tbl_prof_leciona_disciplina_tbl_professor1')->references(['professor_id'])->on('professores')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professor_leciona_disciplina', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_prof_leciona_disciplina_tbl_disciplina1');
            $table->dropForeign('fk_tbl_professor_disciplina_tbl_ano_lectivo1');
            $table->dropForeign('fk_tbl_prof_leciona_disciplina_tbl_professor1');
        });
    }
};
