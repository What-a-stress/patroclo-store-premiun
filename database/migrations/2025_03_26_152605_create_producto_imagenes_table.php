<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('producto_imagenes', function (Blueprint $table) {
            $table->id('id_producto_imagen');
            $table->unsignedBigInteger('id_producto');
            $table->string('imagen_url');
            $table->char('estado_auditoria', 1);
            $table->timestamp('fecha_creacion_auditoria');

            $table->foreign('id_producto')->references('id_producto')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_imagenes');
    }
};
