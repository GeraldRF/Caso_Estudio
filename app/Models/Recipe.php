<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    public $title;
    public $serving;
    public $instructions;

    function __construct($title, $serving, $instructions){
        $this->title = $title;
        $this->serving = $serving;
        $this->instructions = $instructions;
    }

    protected $fillable = ['title', 'serving', 'instructions',];

    function ingredient(){
        return $this->hasOne(Ingredient::class);
    }
    function ingredients(){
        return $this->hasMany(Ingredient::class);
    }
}
