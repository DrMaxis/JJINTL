<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MerchantProductLink extends Model
{
    protected $table = "merchant_product_link";
    protected $fillable = ['merchant_id', 'product_id' , 'link_id'];
    
}
