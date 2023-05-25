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
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->id('disciplina_id')->primary();
            $table->string('nome_disciplina', 100)->unique('nome_disciplina_UNIQUE');
            $table->string('componente', 100);
            $table->integer('tempo_prova');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update')->nullable();
            $table->integer('curso_id')->nullable()->index('fk_tbl_disciplina_tbl_curso1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplinas');
    }
};
