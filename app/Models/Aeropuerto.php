<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    use HasFactory;
    
    function aeropuerto(){
        return $this->belongsTo(Aeropuerto::class);
    }
}
