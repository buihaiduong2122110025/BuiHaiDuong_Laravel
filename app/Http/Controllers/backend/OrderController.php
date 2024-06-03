<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderdetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Order::join('user', 'order.user_id', '=', 'user.id')
            ->where('order.status', '!=', 0)
            ->orderBy('order.created_at', 'desc')
            ->select("order.*", "user.id as user_id")
            ->get();
            return view('backend/order/index',compact("list"));



    }

    public function orderdetail()
    {
        $list = Orderdetail::join('product', 'orderdetail.product_id', '=', 'product.id')
        ->join('order', 'orderdetail.order_id', '=', 'order.id')
        ->select("orderdetail.*", "product.name as product_name", "order.id as order_id")
        ->get();
       
        return view('backend.orderdetail.index',compact("list"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend/order/create');

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
    public function show(string $id)
    {
        $list = Orderdetail::join('product', 'orderdetail.product_id', '=', 'product.id')
        ->join('order', 'orderdetail.order_id', '=', 'order.id')
        ->select("orderdetail.*", "product.name as product_name", "order.id as order_id")
        ->get();
       
        return view('backend.orderdetail.show',compact("list"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
