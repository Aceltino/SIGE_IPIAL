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
        Schema::table('fichas_biografica', function (Blueprint $table) {
            $table->foreign(['aluno_id'], 'fk_tbl_fichabiografica_tbl_aluno1')->references(['aluno_id'])->on('alunos')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fichas_biografica', function (Blueprint $table) {
            $table->dropForeign('fk_tbl_fichabiografica_tbl_aluno1');
        });
    }
};
