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
        Schema::table('classe_tem_disciplina', function (Blueprint $table) {
            $table->foreign(['classe_id'], 'fk_tbl_disciplina_pertence_classe_tbl_classe1')->references(['classe_id'])->on('classes')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['disciplina_id'], 'fk_tbl_disciplina_pertence_classe_tbl_disciplina1')->references(['disciplina_id'])->on('disciplinas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classe_tem_disciplina', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_disciplina_pertence_classe_tbl_classe1');
            $table->dropForeign('fk_tbl_disciplina_pertence_classe_tbl_disciplina1');
        });
    }
};
