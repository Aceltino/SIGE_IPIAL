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
        Schema::create('aluno_tem_encarregado', function (Blueprint $table) {
            $table->id('enc_aluno_id');
            $table->integer('aluno_id')->index('fk_tbl_aluno_has_tbl_encarregado_tbl_aluno2_idx');
            $table->integer('encarregado_id')->index('fk_tbl_aluno_has_tbl_encarregado_tbl_encarregado2_idx');

            $table->primary(['enc_aluno_id', 'aluno_id', 'encarregado_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_tem_encarregado');
    }
};
