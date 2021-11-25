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
        $vuelo = new Vuelo(1,2,3,4);
        
    $this->assertTrue($vuelo->NumeroVuelo == 1 && $vuelo->Avion_Id == 2  && $vuelo->AeropuertoSalida_Id==3 && $vuelo->AeropuertoLLegada_Id == 4);
    }
}
