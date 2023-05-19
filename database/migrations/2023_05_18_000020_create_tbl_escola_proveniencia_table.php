<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblEscolaProvenienciaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_escola_proveniencia';

    /**
     * Run the migrations.
     * @table tbl_escola_proveniencia
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('escola_proveniencia_id');
            $table->string('nome_escola', 45);
            $table->enum('turno', ['Manhã', 'Tarde', 'Noite']);
            $table->integer('num_processo');
            $table->integer('num_aluno');
            $table->string('ultimo_anoLectivo', 45);
            $table->double('media');
            $table->string('certificado', 45);
            $table->timestamp('created_at');
            $table->timestamp('update');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
