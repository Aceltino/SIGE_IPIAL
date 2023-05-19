<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAlunoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_aluno';

    /**
     * Run the migrations.
     * @table tbl_aluno
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('aluno_id');
            $table->string('nome_aluno');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->date('data_nasc');
            $table->enum('genero', ['Masculino', 'Femenino']);
            $table->string('naturalidade');
            $table->char('n_bi', 14);
            $table->integer('proveniencia_id');
            $table->integer('endereco_id');
            $table->timestamp('created_at');
            $table->timestamp('update');

            $table->unique(["n_bi"], 'n_bi_cand_UNIQUE');

            $table->index(["proveniencia_id"], 'fk_tbl_aluno_tbl_escola_proveniencia1_idx');

            $table->index(["endereco_id"], 'fk_tbl_aluno_tbl_endereco1_idx');


            $table->foreign('proveniencia_id', 'fk_tbl_aluno_tbl_escola_proveniencia1_idx')
                ->references('escola_proveniencia_id')->on('tbl_escola_proveniencia')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('endereco_id', 'fk_tbl_aluno_tbl_endereco1_idx')
                ->references('endereco_id')->on('tbl_endereco')
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
