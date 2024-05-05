<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $my_products = Product::where('creator_id', Auth::id())->get();
        $my_revenue = ProductOrder::where('creator_id', Auth::id())->where('is_paid', 1)->sum('total_price');
        $total_order_success = ProductOrder::where('creator_id', Auth::id())->where('is_paid', 1)->get();
        $total_order_pending = ProductOrder::where('creator_id', Auth::id())->where('is_paid', 0)->get();
        return view('admin.dashboard', [
            'my_products' => $my_products,
            'my_revenue' => $my_revenue,
            'total_order_success' => $total_order_success,
            'total_order_pending' => $total_order_pending,
        ]);
    }
}
