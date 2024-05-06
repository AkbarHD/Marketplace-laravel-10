<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout(Product $product)
    {
        return view('front.checkout', [
            'product' => $product,
        ]);
    }
}
