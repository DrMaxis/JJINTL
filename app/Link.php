<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = "product_links";
    protected $fillable = ['link', 'product'];

    public function products() {
        return $this->belongsToMany('App\Product', 'merchant_product_link')->withPivot('product_id');;
    }

    public function merchants() {
        return $this->belongsToMany('App\Merchant', 'merchant_product_link')->withPivot('product_id');
    }


}
