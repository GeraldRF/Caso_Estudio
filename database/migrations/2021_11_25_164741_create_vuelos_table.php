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
            $table->id();
            $table->Integer('numero_vuelo');
            $table->foreignId('avion_id')->references('id')->on('avions');
            $table->foreignId('aeropuerto_salida_id')->references('id')->on('aeropuertos');
            $table->foreignId('aeropuerto_llegada_id')->references('id')->on('aeropuertos');
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
