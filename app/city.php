<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    //
    protected $table = "cities";
    protected $fillable = [
        'title','description','image'
    ];
}
