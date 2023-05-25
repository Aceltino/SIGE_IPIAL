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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id('pessoa_id');
            $table->string('nome_completo', 455);
            $table->string('num_bi', 14)->unique('num_bi_UNIQUE');
            $table->date('data_nascimento');
            $table->enum('gerero_DG', ['Masculino', 'Femenino']);
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update_at')->nullable();
            $table->integer('endereco_id')->index('fk_tbl_pessoa_tbl_endereco1_idx');

            $table->primary(['pessoa_id', 'endereco_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
};
