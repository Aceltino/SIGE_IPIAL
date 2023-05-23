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
        Schema::create('salas', function (Blueprint $table) {
            $table->integer('sala_id')->primary();
            $table->integer('sala')->nullable();
            $table->enum('tipo_sala', ['Laboratorio', 'Normal'])->nullable();
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update_at')->nullable();
            $table->integer('curso_id')->nullable()->index('fk_salas_cursos1_idx');
            $table->string('nome_sala', 25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salas');
    }
};
