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
        Schema::create('candidatos', function (Blueprint $table) {
            $table->integer('candidato_id');
            $table->string('nome_pai_cand');
            $table->string('nome_mae_cand');
            $table->string('naturalidade_cand');
            $table->enum('estado_candidato', ['activo', 'inactivo'])->index('candidato_estado_idx');
            $table->integer('escola_proveniencia_id')->index('fk_tbl_candidato_tbl_escola_proveniencia1_idx');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update')->nullable();
            $table->enum('status', ['Pendente', 'Admitido', 'Não admitido']);
            $table->integer('pessoa_id')->index('fk_tbl_candidato_tbl_pessoa1_idx');
            $table->integer('ano_lectivo_id')->index('fk_candidatos_anos_lectivo1_idx');

            $table->primary(['candidato_id', 'escola_proveniencia_id', 'pessoa_id', 'ano_lectivo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
};
