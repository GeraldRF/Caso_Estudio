<?php

namespace Tests\Unit;

use App\Models\Vuelo;
use Tests\TestCase;

class InstanciaDeVueloTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_instanciarVuelo()
    {
        $vuelo = new vuelo(['numero_vuelo'=>1, 'avion_id'=>2, 'aeropuerto_salida_id'=>3, 'aeropuerto_llegada_id'=>4]);
         
        echo $vuelo->numero_vuelo;
        echo $vuelo->avion_id;
        echo $vuelo->aeropuerto_salida_id;
        echo $vuelo->aeropuerto_llegada_id;

    $this->assertTrue($vuelo->numero_vuelo == 1 && $vuelo->avion_id == 2  && $vuelo->aeropuerto_salida_id==3 && $vuelo->aeropuerto_llegada_id == 4);
    }
}
