<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sentence extends Model
{
    use HasFactory;

    protected $fillable = ['paragraph_id', 'text',];

    function paragraph(){
        return $this->belongsTo(Paragraph::class);
    }
}
