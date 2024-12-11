<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->id();
            $table->integer('numero')->unique();
            $table->integer('capacidad');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mesas');
    }
};
