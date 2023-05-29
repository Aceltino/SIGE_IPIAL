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
        Schema::table('notas', function (Blueprint $table) {
            $table->foreign(['aluno_id'], 'fk_tbl_nota_tbl_aluno1')->references(['aluno_id'])->on('alunos')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['id_trimestre'], 'fk_tbl_nota_tbl_trimestre1')->references(['id_trimestre'])->on('trimestres')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['disciplina_id'], 'fk_tbl_nota_tbl_disciplina1')->references(['disciplina_id'])->on('disciplinas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notas', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_nota_tbl_aluno1');
            $table->dropForeign('fk_tbl_nota_tbl_trimestre1');
            $table->dropForeign('fk_tbl_nota_tbl_disciplina1');
        });
    }
};
