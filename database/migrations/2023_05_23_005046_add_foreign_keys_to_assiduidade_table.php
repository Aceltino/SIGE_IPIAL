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
        Schema::table('assiduidade', function (Blueprint $table) {
            $table->foreign(['id_trimestre'], 'fk_tbl_assiduidade_tbl_trimestre1')->references(['id_trimestre'])->on('trimestres')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['aluno_id'], 'fk_tbl_assiduidade_aluno_tbl_aluno1')->references(['aluno_id'])->on('alunos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assiduidade', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_assiduidade_tbl_trimestre1');
            $table->dropForeign('fk_tbl_assiduidade_aluno_tbl_aluno1');
        });
    }
};
