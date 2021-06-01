<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    protected $fillable = [
        'name', 'email', 'gender', 'password', 'phone', 'about', 'teach', 'experience'
    ];
    


    public function listclasses()
    {
        return $this->hasMany(Listclass::class);
    }

}
