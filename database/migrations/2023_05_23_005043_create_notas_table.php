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
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('nota_id');
            $table->date('data_avaliacao');
            $table->double('nota_aluno');
            $table->enum('tipo_prova', ['AvaliacaoContinua', 'Prova Professor', 'ProvaTrimestre', 'Prova Global', 'Recurso', 'Exame Recurso', 'Exame', 'Exame Especial']);
            $table->longText('descricao_nota')->nullable();
            $table->integer('aluno_id')->index('fk_tbl_nota_tbl_aluno1_idx');
            $table->integer('disciplina_id')->index('fk_tbl_nota_tbl_disciplina1_idx');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update_at')->nullable();
            $table->integer('id_trimestre')->index('fk_tbl_nota_tbl_trimestre1_idx');

            $table->primary(['nota_id', 'aluno_id', 'disciplina_id', 'id_trimestre']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
};
