<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    

    public $timestamps = true;
    protected $fillable = [
        'name', 'email', 'phone', 'gender', 'password'
    ];

    
}
