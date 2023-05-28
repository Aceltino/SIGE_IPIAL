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
        Schema::create('fichas_biografica', function (Blueprint $table) {
            $table->integer('id_fichabiografica');
            $table->longText('descricao')->nullable();
            $table->integer('aluno_id')->index('fk_tbl_fichabiografica_tbl_aluno1_idx');
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update_at')->nullable();
            $table->double('PAP_nota')->nullable();
            $table->string('PAP_tema', 100)->nullable();
            $table->date('PAP_data')->nullable();
            $table->string('estagio_local', 100)->nullable();
            $table->double('estagio_nota')->nullable();
            $table->date('estagio_inicio')->nullable();
            $table->date('estagio_fim')->nullable();

            $table->primary(['id_fichabiografica', 'aluno_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichas_biografica');
    }
};
