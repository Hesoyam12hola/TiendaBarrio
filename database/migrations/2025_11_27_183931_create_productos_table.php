<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
         Schema::create('productos', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->decimal('precio', 10, 2);
        $table->integer('stock')->default(0);
        $table->unsignedBigInteger('tipo_producto_id');
        $table->timestamps();
        $table->text('descripcion')->nullable();

        $table->foreign('tipo_producto_id')
              ->references('id')->on('tipo_productos')
              ->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
