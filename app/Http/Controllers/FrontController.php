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
        $other_products = Product::where('id', '!=', $product->id)->get(); // menampilan product di detail selain dari product yg lg di show
        $creator_id = $product->creator_id;
        $creator_products = Product::where('creator_id', $creator_id)->get();
        return view('front.details', [
            'product' => $product,
            'other_products' => $other_products,
            'creator_products' => $creator_products,
        ]);
    }

    public function category(Category $category)
    {
        // dd($category);   
        $product_categories = Product::where('category_id', $category->id)->get(); //count
        return view('front.category', [
            'category' => $category,
            'product_categories' => $product_categories,
        ]);
    }

    public function search(Request $request)
    {
        // dd($category);  
        $keyword = $request->input('keyword');
        // karena beda table makanya wherehas
        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')
            ->orWhereHas('Category', function ($query) use ($keyword) {
                $query->where('name', 'LIKE', '%' . $keyword . '%');
            })->get();
        return view('front.search', [
            'products' => $products,
            'keyword' => $keyword,
        ]);
    }
}
