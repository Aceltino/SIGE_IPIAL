<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up():void
    {
        Schema::create('tempos', function (Blueprint $table) {
            $table->id('tempo_id');
            $table->integer('tempo');
        });
    }

    public function down():void
    {
        Schema::dropIfExists('tempos');
    }
};
