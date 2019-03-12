<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    


    public function index() {
        $products = Product::all();
        $productsOnSale = Product::where('featured', '=', 1)->get();
        $newProducts = Product::where('new', '=', 1)->get();
        return view('homepage')->with([
            'products' => $products,
            'newProducts' => $newProducts,
            'productsOnSale' => $productsOnSale,
        ]);

    }

    public function aboutUs() {
        $aboutUs = AboutUs::where('id', '=', 1)->first();

        return view('aboutus')->with([
            'aboutUs' => $aboutUs,
        ]);

    }
    public function contactUs() {

        return view('contactUs');

    }


    public function productInfo() {

        return view('productinfo');

    }


}
