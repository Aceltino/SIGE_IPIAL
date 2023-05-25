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
        Schema::create('candidato_seleciona_curso', function (Blueprint $table) {
            $table->integer('candidato_id')->index('fk_tbl_candidato_has_tbl_curso_tbl_candidato2_idx');
            $table->integer('curso_id')->index('fk_tbl_candidato_has_tbl_curso_tbl_curso2_idx');
            $table->integer('preferencia');

            $table->primary(['candidato_id', 'curso_id']);
        });

    }                 
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidato_seleciona_curso');
    }
};
