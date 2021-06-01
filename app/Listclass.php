<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Listclass extends Model
{
    protected $fillable = [
        'name', 'date', 'location', 'category', 'price', 'qty', 'image', 'active', 'slug'
    ];

    public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    
    public function instructor(){
        return $this->belongsTo(Instructor::class);
    }
}
