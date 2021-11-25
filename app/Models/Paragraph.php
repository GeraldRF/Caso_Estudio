<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paragraph extends Model
{
    use HasFactory;

    protected $filleable = ['sentences'];

    function chapter(){

    return $this->belongsTo(Chapter::class);
    
    }
}