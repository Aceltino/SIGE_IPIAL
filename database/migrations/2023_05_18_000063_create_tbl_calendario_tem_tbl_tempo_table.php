<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCalendarioTemTblTempoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tbl_calendario_tem_tbl_tempo';

    /**
     * Run the migrations.
     * @table tbl_calendario_tem_tbl_tempo
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('tbl_calendario_id_calendario');
            $table->integer('tbl_tempo_id_tempo');

            $table->index(["tbl_calendario_id_calendario"], 'fk_tbl_calendario_has_tbl_tempo_tbl_calendario1_idx');


            $table->foreign('tbl_calendario_id_calendario', 'fk_tbl_calendario_has_tbl_tempo_tbl_calendario1_idx')
                ->references('id_calendario')->on('tbl_calendario')
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
