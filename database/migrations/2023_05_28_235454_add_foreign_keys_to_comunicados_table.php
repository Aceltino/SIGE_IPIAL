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
        Schema::table('comunicados', function (Blueprint $table) {
            $table->foreign(['ano_lectivo_id'], 'fk_comunicados_anos_lectivo1')->references(['ano_lectivo_id'])->on('anos_lectivo')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['pessoa_id'], 'fk_tbl_comunicado_tbl_pessoa1')->references(['pessoa_id'])->on('pessoas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comunicados', function (Blueprint $table) {
            $table->dropForeign('fk_comunicados_anos_lectivo1');
            $table->dropForeign('fk_tbl_comunicado_tbl_pessoa1');
        });
    }
};
