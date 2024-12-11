<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('platos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio', 8, 2);
            $table->foreignId('categoria_id')->constrained('categorias');
            $table->string('imagen')->nullable();
            $table->boolean('disponible_delivery')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('platos');
    }
};

