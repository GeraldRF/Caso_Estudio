<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paragraph extends Model
{
    use HasFactory;

    protected $fillable = ['chapter_id',];

    function chapter(){

    return $this->belongsTo(Chapter::class);
    
    }
    
    function sentence(){
        return $this->hasMany(Sentence::class);
    }
}
