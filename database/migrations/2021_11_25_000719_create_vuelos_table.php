<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVuelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelos', function (Blueprint $table) {
            $table->Integer('NumeroVuelo');
            $table->foreignId('Avion_id')->references('id')->on('avions')->onDelete('cascade');
            $table->foreignId('AeropuertoaSalida_id')->references('id')->on('aeropuertos')->onDelete('cascade');
            $table->foreignId('AeropuertoaLLegada_id')->references('id')->on('aeropuertos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vuelos');
    }
}
