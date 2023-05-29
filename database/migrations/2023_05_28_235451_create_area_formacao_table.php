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
        Schema::create('area_formacao', function (Blueprint $table) {
            $table->integer('area_formacao_id', true);
            $table->string('nome_area_formacao');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update_at')->nullable();
            $table->integer('professor_id')->index('fk_tbl_area_formacao_tbl_professor1_idx');

            $table->primary(['area_formacao_id', 'professor_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_formacao');
    }
};
