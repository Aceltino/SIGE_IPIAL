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
        Schema::create('escola_proveniencia', function (Blueprint $table) {
            $table->id('escola_proveniencia_id')->primary();
            $table->string('nome_escola', 45);
            $table->enum('turno', ['Manhã', 'Tarde', 'Noite']);
            $table->integer('num_processo');
            $table->integer('num_aluno');
            $table->string('ultimo_anoLectivo', 15);
            $table->double('media');
            $table->string('certificado', 45);
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escola_proveniencia');
    }
};
