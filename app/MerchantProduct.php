<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MerchantProduct extends Model
{
    protected $table ="merchant_product";
    protected $fillable = ["merchant_id", "product_id", "merchant_product_link"];


}
