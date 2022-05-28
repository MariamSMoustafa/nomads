<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = "companies";
    protected $fillable = [
        'name', 'email','phone','address','aboutus','logo',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
