<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblFichabiograficaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_fichabiografica';

    /**
     * Run the migrations.
     * @table tbl_fichabiografica
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_fichabiografica');
            $table->longText('descricao')->nullable();
            $table->integer('aluno_id');
            $table->timestamp('created_at');
            $table->timestamp('update_at');

            $table->index(["aluno_id"], 'fk_tbl_fichabiografica_tbl_aluno1_idx');


            $table->foreign('aluno_id', 'fk_tbl_fichabiografica_tbl_aluno1_idx')
                ->references('aluno_id')->on('tbl_aluno')
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
