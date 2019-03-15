<?php

use App\Link;
use App\Product;
use App\Merchant;
use function GuzzleHttp\json_decode;

function productImage($path)
{
    return  $path != null && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('assets/imgs/no-img.jpg');
}

function contentImage($path)
{
    return  $path != null && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('assets/imgs/about-us.png');
}

function productInstructions($productDocument)
{
    return  json_decode($productDocument) [0]['download_link'];
}



 function getMerchantLink($merchant) {
    $merchant = $merchant;

   foreach($merchant->links()->get() as $link) {
        
       if($link->pivot->product_id == $merchant->pivot->product_id) {
           $link = Link::find($link->id);
           $data = $link->link;
       }
       
   }
    
return $data;
    /* {{dd($merchant->pivot->merchant_id, $merchant->links()->get()->first()->pivot->merchant_id)}} */

}