<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPiece extends Model
{
    protected $table = 'product_pieces';
    protected $fillable = ['name','length','width','height'];
}
