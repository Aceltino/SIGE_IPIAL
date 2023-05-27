<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id('user_id');
            $table->string('nome_usuario',50)->unique();
            $table->string('email')->unique();
            $table->boolean('status_usuario');
            $table->enum('cargo_usuario', ['Professor','Aluno','Director','Subdirector','Secretaria-pedagogica','Coordenacao','Administrador','User-inscri','User-matri']);
            $table->string('imagem_usuario')->nullable();
            $table->string('password');
            $table->timestamps();
            $table->rememberToken();

            //Colunas de Relacionamento
            $table->foreignId('pessoa_id')
            ->references('pessoa_id')
            ->on('pessoas')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
