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
        Schema::create('encarregados', function (Blueprint $table) {
            $table->integer('encarregado_id', true);
            $table->enum('grau_parentensco_enc', ['Pai', 'Mãe', 'Tio', 'Tia', 'Outro(a)']);
            $table->integer('pessoa_id')->index('fk_tbl_encarregado_tbl_pessoa1_idx');

            $table->primary(['encarregado_id', 'pessoa_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('encarregados');
    }
};
