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
        Schema::create('comunicados', function (Blueprint $table) {
            $table->id('id_comunicado');
            $table->string('titulo_com', 200);
            $table->text('conteudo_com');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update_at')->nullable();
            $table->integer('pessoa_id')->index('fk_tbl_comunicado_tbl_pessoa1_idx');
            $table->integer('ano_lectivo_id')->index('fk_comunicados_anos_lectivo1_idx');

            $table->primary(['id_comunicado', 'pessoa_id', 'ano_lectivo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comunicados');
    }
};
