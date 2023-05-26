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
        Schema::create('calendarios_provas', function (Blueprint $table) {
            $table->id('calendario_id');
            $table->date('inicio_prova');
            $table->date('fim_prova');
            $table->enum('tipo_prova', ['Prova Professor', 'ProvaTrimestre', 'Prova Global', 'Recurso', 'Exame Recurso', 'Exame', 'Exame Especial']);
            $table->integer('classe_id')->index('fk_tbl_calendario_tbl_classe1_idx');
            $table->integer('curso_id')->index('fk_tbl_calendario_tbl_curso1_idx');
            $table->integer('turno_id')->index('fk_tbl_calendario_tbl_turno1_idx');
            $table->integer('id_trimestre')->nullable()->index('fk_tbl_calendario_tbl_trimestre1_idx');

            $table->primary(['calendario_id', 'classe_id', 'curso_id', 'turno_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendarios_provas');
    }
};
