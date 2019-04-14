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
function adminContentImage($path)
{
    return  $path != null && file_exists('storage/' .str_replace('\\', '/', $path)) ? asset('storage/' . str_replace('\\', '/', $path)) : asset('assets/imgs/about-us.png');
}
function productInstructions($productDocument)
{
    $link = json_decode($productDocument);
    //Check if file in storage exists or is an empty array
    if ($link == []) {
        return false; 
    } else {
        $path = json_decode($productDocument)[0]->download_link;
        return  '/storage/' . $path;
    }
}

function getMerchantLink($merchant)
{
    $merchant = $merchant;

    foreach ($merchant->links()->get() as $link) {

        if ($link->pivot->product_id == $merchant->pivot->product_id) {
            $link = Link::find($link->id);
            $data = $link->link;
        }
    }

    return $data;
}
