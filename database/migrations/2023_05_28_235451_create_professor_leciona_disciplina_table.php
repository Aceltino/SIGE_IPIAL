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
        Schema::create('professor_leciona_disciplina', function (Blueprint $table) {
            $table->integer('prof_disc_id', true);
            $table->integer('disciplina_id')->index('fk_tbl_prof_leciona_disciplina_tbl_disciplina1_idx');
            $table->integer('professor_id')->index('fk_tbl_prof_leciona_disciplina_tbl_professor1_idx');
            $table->integer('ano_lectivo_id')->index('fk_tbl_professor_disciplina_tbl_ano_lectivo1_idx');
            $table->integer('prioridade');

            $table->primary(['prof_disc_id', 'disciplina_id', 'professor_id', 'ano_lectivo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professor_leciona_disciplina');
    }
};
