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
        Schema::table('candidatos', function (Blueprint $table) {
            $table->foreign(['escola_proveniencia_id'], 'fk_tbl_candidato_tbl_escola_proveniencia1')->references(['escola_proveniencia_id'])->on('escola_proveniencia')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['ano_lectivo_id'], 'fk_candidatos_anos_lectivo1')->references(['ano_lectivo_id'])->on('anos_lectivo')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['pessoa_id'], 'fk_tbl_candidato_tbl_pessoa1')->references(['pessoa_id'])->on('pessoas')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidatos', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_candidato_tbl_escola_proveniencia1');
            $table->dropForeign('fk_candidatos_anos_lectivo1');
            $table->dropForeign('fk_tbl_candidato_tbl_pessoa1');
        });
    }
};
