<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';

    protected $fillable = ['title', 'serving', 'instructions',];

    function ingredient(){
        return $this->hasOne(Ingredient::class);
    }
    function ingredients(){
        return $this->hasMany(Ingredient::class);
    }
}
