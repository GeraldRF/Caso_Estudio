<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable = ['quantity', 'measurement_unit', 'recipe_id',];

    function recipe(){
        return $this->belongsTo(Recipe::class);
    }
}
