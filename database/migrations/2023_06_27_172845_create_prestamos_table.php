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
        Schema::create('user_prestamos', function (Blueprint $table) {
            $table->id();
            $table->string('fecha_prestamo');
            $table->string('fecha_devolucion');
            $table->unsignedBigInteger('idejemplar');
            $table->foreign('idejemplar')->references('id')->on('ejemplars');
            $table->unsignedBigInteger('idusuario');
            $table->foreign('idusuario')->references('id')->on('users');
            $table->timestamps();
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
