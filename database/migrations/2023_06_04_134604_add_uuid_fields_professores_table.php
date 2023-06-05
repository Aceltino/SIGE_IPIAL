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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');   
        // Limpar a tabela antes de adicionar a coluna
        DB::table('professores')->truncate();
        
        Schema::table('professores', function (Blueprint $table) {
            $table->uuid('uuid')->unique()->after('formacao');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1');   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');   
        Schema::table('professores', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1');   
    }
};
