<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\ProductPiece;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            })->get();
        } else {
            $products = Product::inRandomOrder()->take(10)->get();
        }
        return view('products')->with([
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    public function show($slug)
    {

        $product = Product::where('slug', $slug)->firstOrFail();
        $productPieces = ProductPiece::where('product_id', $product->id)->get();
        $variantsForProduct = $product->variants()->get();
        $merchantsForProduct = $product->merchants()->get();
        $linksForProduct = $product->links()->get();
        return view('singleProduct')->with([
            'variantsForProduct' => $variantsForProduct,
            'merchantsForProduct' => $merchantsForProduct,
            'linksForProduct' => $linksForProduct,
            'product' => $product,
            'productPieces' => $productPieces,
        ]);
    }
    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);
        $query = $request->input('query');
        $products = Product::where('name', 'like', "%$query%")
            ->orWhere('details', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->paginate(10);
        return view('searchResults')->with('products', $products);
    }
}
