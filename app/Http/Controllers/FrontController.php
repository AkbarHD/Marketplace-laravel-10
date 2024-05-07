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
        $category = Category::all();
        return view('front.index', [
            'products' => $products,
            'categories' => $category,
        ]);
    }

    public function details(Product $product)
    {
        $other_products = Product::where('id', '!=', $product->id)->get();
        return view('front.details', [
            'product' => $product,
            'other_products' => $other_products,
        ]);
    }

    public function category(Category $category)
    {
        // dd($category);   
        return view('front.category', [
            'category' => $category,
        ]);
    }

    public function search(Request $request)
    {
        // dd($category);   
        return view('front.search');
    }
}
