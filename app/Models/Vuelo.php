<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;

    public $NumeroVuelo;
    public $Avion_Id;
    public $AeropuertoLLegada_Id;
    public $AeropuertoSalida_Id;

    function __construct($NumeroVuelo, $Avion_Id,$AeropuertoSalida_Id, $AeropuertoLLegada_Id){
        $this->NumeroVuelo = $NumeroVuelo;
        $this->Avion_Id = $Avion_Id;
        $this->AeropuertoSalida_Id = $AeropuertoSalida_Id;
        $this->AeropuertoLLegada_Id = $AeropuertoLLegada_Id;
       
    }
    function aeropuerto(){
        return $this->hasMany(Aeropuerto::class);
    }

}
