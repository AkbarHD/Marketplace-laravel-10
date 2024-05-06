<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('front.index', [
            'products' => $products,
        ]);
    }

    public function details(Product $product)
    {
        return view('front.details', [
            'product' => $product,
        ]);
    }

    public function category(Category $category)
    {
        // dd($category);   
        return view('front.category', [
            'category' => $category,
        ]);
    }
}
