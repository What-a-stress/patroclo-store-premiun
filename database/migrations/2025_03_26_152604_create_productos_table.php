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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id_producto');
            $table->unsignedBigInteger('id_subcategoria');
            $table->unsignedBigInteger('id_marca');
            $table->unsignedBigInteger('id_proveedor');
            $table->string('codigo');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('especificaciones');
            $table->float('precio_dolares');
            $table->integer('stock');
            $table->string('imagen_url');
            $table->string('informacion_fabricante_url');
            $table->char('estado_auditoria', 1);
            $table->timestamp('fecha_creacion_auditoria');

            $table->foreign('id_subcategoria')->references('id_subcategoria')->on('subcategorias');
            $table->foreign('id_marca')->references('id_marca')->on('marcas');
            $table->foreign('id_proveedor')->references('id_proveedor')->on('proveedores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
