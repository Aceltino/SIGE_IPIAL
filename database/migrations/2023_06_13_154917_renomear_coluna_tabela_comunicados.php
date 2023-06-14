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
        Schema::table('Comunicado', function (Blueprint $table) {
            $table->renameColumn('pessoa_id', 'usuario_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Comunicado', function (Blueprint $table) {
            $table->renameColumn('usuario_id', 'pessoa_id');
        });
    }
};
