<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) {

        $products = Product::when($request->category, function($query) use ($request) {
            $query->where('products.category', '=', $request->category);
        })->when($request->price, function($query) use ($request) {
            $query->where('products.price', '=', $request->price);
        })->select('products.*')
        ->get();

        return $products;

    }
}
