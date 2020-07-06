<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProductController extends Controller
{
    public function index()
    {
        $products = Cache::remember('allproducts', 1000, function () {
            return Product::with('categories')->get();
        });

        //$products = Product::with('categories')->get();

        return view('products.index', compact('products'));
    }
}
