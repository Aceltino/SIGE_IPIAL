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
        Schema::create('anos_lectivo', function (Blueprint $table) {
            $table->id('ano_lectivo_id')->primary();
            $table->string('ano_lectivo', 15)->unique();
            $table->boolean('status_ano_lectivo');
            $table->date('data_inicio_ano_lectivo')->unique();
            $table->date('data_fim_ano_ano_lectivo')->unique();
            $table->integer('num_aluno_na_turma');
            $table->integer('num_sala_escola');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update_at')->nullable();
            $table->date('data_inicio_inscricao')->unique();
            $table->date('data_fim_inscricao')->unique();
            $table->date('data_inicio_matricula')->unique();
            $table->date('data_fim_matricula')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anos_lectivo');
    }
};
