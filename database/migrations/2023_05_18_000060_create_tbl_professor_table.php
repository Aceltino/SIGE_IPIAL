<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProfessorTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_professor';

    /**
     * Run the migrations.
     * @table tbl_professor
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('professor_id');
            $table->string('formacao');
            $table->integer('pessoa_id');
            $table->timestamp('created_at');
            $table->timestamp('update_at');

            $table->index(["pessoa_id"], 'fk_tbl_professor_tbl_pessoa1_idx');


            $table->foreign('pessoa_id', 'fk_tbl_professor_tbl_pessoa1_idx')
                ->references('pessoa_id')->on('tbl_pessoa')
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
