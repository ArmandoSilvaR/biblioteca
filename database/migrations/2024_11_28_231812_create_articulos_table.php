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
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->year('año_publicacion');
            $table->string('genero')->nullable();
            $table->string('tipo');
            $table->unsignedBigInteger('id_autor');
            $table->unsignedBigInteger('id_editorial');
            $table->unsignedBigInteger('id_seccion');
            $table->timestamps();
            $table->foreign('id_autor')->references('id')->on('autors');
            $table->foreign('id_editorial')->references('id')->on('editorials');
            $table->foreign('id_seccion')->references('id')->on('seccions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
