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
            $table->string('num_bi', 14)->unique();
            $table->date('data_nascimento');
            $table->enum('gerero', ['Masculino', 'Femenino']);
            
            //Chave estrageira
            $table->integer('endereco_id')->index('fk_tbl_pessoa_tbl_endereco1_idx');
            $table->primary(['pessoa_id', 'endereco_id']);
            
            //Data de Update e Create
            $table->timestamps();
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
