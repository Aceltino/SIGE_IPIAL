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
        Schema::create('turmas', function (Blueprint $table) {
            $table->integer('id_turma');
            $table->string('nome_turma', 10)->unique('nome_turma_UNIQUE');
            $table->integer('classe_id')->index('fk_tbl_turma_tbl_classe1_idx');
            $table->integer('curso_id')->index('fk_tbl_turma_tbl_curso1_idx');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update')->nullable();

            $table->primary(['id_turma', 'classe_id', 'curso_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas');
    }
};
