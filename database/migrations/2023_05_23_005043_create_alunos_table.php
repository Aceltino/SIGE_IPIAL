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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id('aluno_id');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update')->nullable();
            $table->integer('curso_id')->index('fk_tbl_aluno_tbl_curso1_idx');
            $table->integer('candidato_id')->index('fk_tbl_aluno_tbl_candidato1_idx');
            $table->boolean('status_alunos');

            $table->primary(['aluno_id', 'curso_id', 'candidato_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
};
