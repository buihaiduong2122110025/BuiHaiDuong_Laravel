<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderdetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            ->select("order.id","order.delivery_name","order.delivery_email","order.delivery_phone","order.created_at","order.status", "user.id as user_id")
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
        $list = Order::where('status','!=',0)
        ->orderBy('created_at','DESC')
        ->select("id","delivery_name","delivery_email","delivery_phone")
        ->get();
        return view("backend.order.create",compact("list"));
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
        $orderdetail = Orderdetail::join('product', 'orderdetail.product_id', '=', 'product.id')
        ->join('order', 'orderdetail.order_id', '=', 'order.id')
        ->select("orderdetail.*", "product.name as product_name", "order.id as order_id")
        ->get();
       
        return view('backend.orderdetail.show',compact("orderdetail"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function restore(string $id){
        $order = Order::find($id);
        if($order==null){
            return redirect()->route('admin.order.index');
        }
        $order->status=2;
        $order->updated_at=date('Y-m-d H:i:s');
        $order->updated_by=Auth::id()??1;

        $order->save();
        return redirect()->route('admin.order.trash');
    }
    public function delete(string $id){
        $order = Order::find($id);
        if($order==null){
            return redirect()->route('admin.order.index');
        }
        $order->status=0;
        $order->updated_at=date('Y-m-d H:i:s');
        $order->updated_by=Auth::id()??1;

        $order->save();
        return redirect()->route('admin.order.index');
    }
    public function status($id)
    {
        $order = Order::find($id);
        if ($order) {
            // Đảo ngược trạng thái từ 1 sang 2 và ngược lại
            $order->status = $order->status == 1 ? 2 : 1;
            $order->save();
        }

        return redirect()->route('admin.order.index');
    }
    public function trash(){
        $list = Order::where('status','=',0)
        ->orderBy('created_at','DESC')
        ->select("id","delivery_name","delivery_email","delivery_phone")
        ->get();
        return view("backend.order.trash",compact("list"));
    }
    public function destroy(string $id)
    {
           $order = Order::find($id);
        if($order==null){
            return redirect()->route('admin.order.index');
        }
        $order->delete();
        return redirect()->route('admin.order.trash');
    }

    
}
