<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblNotaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_nota';

    /**
     * Run the migrations.
     * @table tbl_nota
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('nota_id');
            $table->date('data_avaliacao');
            $table->double('nota_aluno');
            $table->enum('tipo_prova', ['AvaliacaoContinua', 'Prova Professor', 'ProvaTrimestre', 'Prova Global', 'Recurso', 'Exame Recurso', 'Exame', 'Exame Especial']);
            $table->longText('descricao_nota')->nullable();
            $table->integer('tbl_aluno_aluno_id');
            $table->integer('disciplina_id');
            $table->timestamp('created_at');
            $table->timestamp('update_at');

            $table->index(["tbl_aluno_aluno_id"], 'fk_tbl_nota_tbl_aluno1_idx');

            $table->index(["disciplina_id"], 'fk_tbl_nota_tbl_disciplina1_idx');


            $table->foreign('tbl_aluno_aluno_id', 'fk_tbl_nota_tbl_aluno1_idx')
                ->references('aluno_id')->on('tbl_aluno')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('disciplina_id', 'fk_tbl_nota_tbl_disciplina1_idx')
                ->references('disciplina_id')->on('tbl_disciplina')
                ->onDelete('no action')
                ->onUpdate('no action');
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
