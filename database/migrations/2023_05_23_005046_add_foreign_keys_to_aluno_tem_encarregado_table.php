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
        Schema::table('aluno_tem_encarregado', function (Blueprint $table) {
            $table->foreign(['encarregado_id'], 'fk_tbl_aluno_has_tbl_encarregado_tbl_encarregado2')->references(['encarregado_id'])->on('encarregados')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['aluno_id'], 'fk_tbl_aluno_has_tbl_encarregado_tbl_aluno2')->references(['aluno_id'])->on('alunos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aluno_tem_encarregado', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_aluno_has_tbl_encarregado_tbl_encarregado2');
            $table->dropForeign('fk_tbl_aluno_has_tbl_encarregado_tbl_aluno2');
        });
    }
};
