<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // 1 table di pake 2 fitur yaitu my orders dan transaction
    public function index()
    {
        // ini utk melihat org yg membeli product kita

        $my_orders = ProductOrder::where('creator_id', Auth::id())->get(); // cari data berdasarkan creator id
        return view('admin.product_orders.index', [
            'my_orders' => $my_orders,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function transactions()
    {
        // utk kita melihat product yg kita beli dari org lain
        $my_transactions = ProductOrder::where('buyer_id', Auth::id())->get(); // cari data berdasarkan creator id
        return view('admin.product_orders.transactions', [
            'my_transactions' => $my_transactions,
        ]);
    }


    public function transactions_details(ProductOrder $productOrder)
    {
        dd($productOrder);
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductOrder $productOrder)
    {
        return view('admin.product_orders.details', [
            'order' => $productOrder,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductOrder $productOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductOrder $productOrder)
    {
        $productOrder->update(['is_paid' => true]);
        return redirect()->back()->with('message', 'Order sucess updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductOrder $productOrder)
    {
        //
    }
}
