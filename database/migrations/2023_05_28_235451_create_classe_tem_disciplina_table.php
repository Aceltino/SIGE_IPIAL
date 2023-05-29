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
        Schema::create('classe_tem_disciplina', function (Blueprint $table) {
            $table->integer('classe_disciplina_id', true);
            $table->integer('carga_horaria');
            $table->integer('disciplina_id')->index('fk_tbl_disciplina_pertence_classe_tbl_disciplina1_idx');
            $table->integer('classe_id')->index('fk_tbl_disciplina_pertence_classe_tbl_classe1_idx');

            $table->primary(['classe_disciplina_id', 'disciplina_id', 'classe_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classe_tem_disciplina');
    }
};
