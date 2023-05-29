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
        Schema::table('trimestres', function (Blueprint $table) {
            $table->foreign(['ano_lectivo_id'], 'fk_tbl_trimestre_tbl_ano_lectivo1')->references(['ano_lectivo_id'])->on('anos_lectivo')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trimestres', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_trimestre_tbl_ano_lectivo1');
        });
    }
};
