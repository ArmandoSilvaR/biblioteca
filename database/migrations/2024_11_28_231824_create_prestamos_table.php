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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_prestamo');
            $table->date('fecha_devolucion');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_articulo');
            $table->unsignedBigInteger('id_personal');
            $table->timestamps();
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->foreign('id_articulo')->references('id')->on('articulos');
            $table->foreign('id_personal')->references('id')->on('personals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
