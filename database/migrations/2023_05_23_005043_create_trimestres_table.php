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
        Schema::create('trimestres', function (Blueprint $table) {
            $table->integer('id_trimestre');
            $table->string('trimestre', 45);
            $table->boolean('status');
            $table->integer('ano_lectivo_id')->index('fk_tbl_trimestre_tbl_ano_lectivo1_idx');
            $table->date('data_inicio')->unique('data_inicio_UNIQUE');
            $table->date('data_fim')->unique('data_fim_UNIQUE');

            $table->primary(['id_trimestre', 'ano_lectivo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trimestres');
    }
};
