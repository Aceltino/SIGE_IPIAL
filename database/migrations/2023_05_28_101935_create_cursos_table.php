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
        Schema::create('cursos', function (Blueprint $table) {
            $table->integer('curso_id', true);
            $table->string('nome_curso', 455);
            $table->string('sigla', 4);
            $table->integer('area_formacao_id')->index('fk_tbl_curso_tbl_area_formacao1_idx');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update_at')->nullable();
            $table->integer('professor_id')->index('fk_tbl_curso_tbl_professor1_idx');

            $table->primary(['curso_id', 'area_formacao_id', 'professor_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};
