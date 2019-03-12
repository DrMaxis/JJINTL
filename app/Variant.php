<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
  
    protected $table = 'variants';
    protected $fillable = ['quantity'];

     public function products() {
        return $this->belongsToMany('App\Product');
    }  
}
