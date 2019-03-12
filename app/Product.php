<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
 public $timestamps = true;
 public function categories() {
    return $this->belongsToMany('App\Category');
}

public function variants() {
    return $this->belongsToMany('App\Variant', 'variant_product');
}

public function merchants() {
    return $this->belongsToMany('App\Merchant', 'merchant_product_link')->withPivot('merchant_id');
}


public function links() {
    return $this->belongsToMany('App\Link', 'merchant_product_link')->withPivot('link_id');
}

}
