<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCandidatoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_candidato';

    /**
     * Run the migrations.
     * @table tbl_candidato
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('candidato_id');
            $table->string('nome_cand');
            $table->string('nome_pai_cand');
            $table->string('nome_mae_cand');
            $table->date('data_nasc_cand');
            $table->enum('genero_cand', ['Masculino', 'Femenino']);
            $table->string('naturalidade_cand');
            $table->char('n_bi_cand', 14);
            $table->integer('tel_candidato')->nullable();
            $table->enum('estado_candidato', ['activo', 'inactivo']);
            $table->integer('escola_proveniencia_id');
            $table->integer('endereco_id');
            $table->timestamp('created_at');
            $table->timestamp('update');

            $table->unique(["n_bi_cand"], 'n_bi_cand_UNIQUE');

            $table->index(["escola_proveniencia_id"], 'fk_tbl_candidato_tbl_escola_proveniencia1_idx');

            $table->index(["endereco_id"], 'fk_tbl_candidato_tbl_endereco1_idx');


            $table->foreign('escola_proveniencia_id', 'fk_tbl_candidato_tbl_escola_proveniencia1_idx')
                ->references('escola_proveniencia_id')->on('tbl_escola_proveniencia')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('endereco_id', 'fk_tbl_candidato_tbl_endereco1_idx')
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
