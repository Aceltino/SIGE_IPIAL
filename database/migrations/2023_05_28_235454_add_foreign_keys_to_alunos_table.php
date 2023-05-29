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
        Schema::table('alunos', function (Blueprint $table) {
            $table->foreign(['candidato_id'], 'fk_tbl_aluno_tbl_candidato1')->references(['candidato_id'])->on('candidatos')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['curso_id'], 'fk_tbl_aluno_tbl_curso1')->references(['curso_id'])->on('cursos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_aluno_tbl_candidato1');
            $table->dropForeign('fk_tbl_aluno_tbl_curso1');
        });
    }
};
