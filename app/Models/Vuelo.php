<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;
    protected $table = 'vuelos';

    protected $fillable = ['numero_vuelo', 'avion_id', 'aeropuerto_llegada_id','aeropuerto_salida_id'];


    function aeropuerto(){
        return $this->hasMany(Aeropuerto::class);
    }

}
