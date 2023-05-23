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
        Schema::table('encarregados', function (Blueprint $table) {
            $table->foreign(['pessoa_id'], 'fk_tbl_encarregado_tbl_pessoa1')->references(['pessoa_id'])->on('pessoas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('encarregados', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_encarregado_tbl_pessoa1');
        });
    }
};
