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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('usuario_id', true);
            $table->string('nome_usuario', 455)->unique('nome_usuario_UNIQUE');
            $table->string('password', 65);
            $table->string('email', 100)->unique('email_UNIQUE');
            $table->tinyInteger('status_usuario');
            $table->enum('cargo_usuario', ['Professor', 'Aluno', 'Director', 'Subdirector', 'Secretaria', 'Coordenacao', 'Administrador', 'Inscricao', 'Matricula']);
            $table->string('imagem_usuario', 65)->nullable();
            $table->timestamp('created_at')->useCurrentOnUpdate()->useCurrent();
            $table->timestamp('update_at')->nullable();
            $table->integer('cod_rec')->nullable();
            $table->integer('pessoa_id')->index('fk_usuarios_pessoas1_idx');

            $table->primary(['usuario_id', 'pessoa_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
