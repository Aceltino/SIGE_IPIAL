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
        Schema::create('assiduidade', function (Blueprint $table) {
            $table->integer('assiduidade_id');
            $table->tinyInteger('falta_aluno');
            $table->enum('status_falta', ['JUSTIFICADA', 'N-JUSTIFICADA']);
            $table->longText('descricao_falta')->nullable();
            $table->enum('tipo_falta', ['Disciplinar', 'Presencial']);
            $table->integer('aluno_id')->index('fk_tbl_assiduidade_aluno_tbl_aluno1_idx');
            $table->integer('id_trimestre')->index('fk_tbl_assiduidade_tbl_trimestre1_idx');

            $table->primary(['assiduidade_id', 'aluno_id', 'id_trimestre']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assiduidade');
    }
};
