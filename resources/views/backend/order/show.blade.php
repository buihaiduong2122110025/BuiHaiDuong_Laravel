@extends('layouts.admin')
@section('title', 'Trang Chủ')

@section('content')
<div>
    <form action="index.php?option=order&cat=process" method="order" enctype="multipart/form-data">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <strong class="text-dark text-lg">CHI TIẾT ĐƠN HÀNG </strong>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a class="btn btn-sm btn-info" href="index.php?option=order">
                                    <i class="fas fa-arrow-left"></i> Về danh sách
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tên trường</th>
                                    <th>Giá trị</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $order->id }}</td>
                                </tr>
                                <tr>
                                    <td>user_id</td>
                                    <td>{{ $order->user_id }}</td>
                                </tr>
                                <tr>
                                    <td>deliveryaddress</td>
                                    <td>{{ $order->delivery_address }}</td>
                                </tr>
                                <tr>
                                    <td>deliveryname</td>
                                    <td>{{ $order->delivery_name }}</td>
                                </tr>
                                <tr>
                                    <td>deliveryphone</td>
                                    <td>{{ $order->delivery_phone }}</td>
                                </tr>
                                <tr>
                                    <td>deliveryemail</td>
                                    <td>{{ $order->delivery_email }}</td>
                                </tr>
                                <tr>
                                    <td>note</td>
                                    <td>{{ $order->note }}</td>
                                </tr>
                                <tr>
                                    <td>created_at</td>
                                    <td>{{ $order->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>updated_at</td>
                                    <td>{{ $order->updated_at }}</td>
                                </tr>
                                <tr>
                                    <td>updated_by</td>
                                    <td>{{ $order->updated_by }}</td>
                                </tr>
                                <tr>
                                    <td>status</td>
                                    <td>{{ $order->status }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <strong class="text-dark text-lg">CHI TIẾT ĐƠN HÀNG SẢN PHẨM</strong>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Discount</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order_details as $detail)
                                    <tr>
                                        <td>{{ $detail->id }}</td>
                                        <td>{{ $detail->product->name }}</td>
                                        <td>
                                            <img src="{{ asset('img/products/' . $detail->product->image) }}" style="width: 100px" class="img-fluid"
                                                alt="{{ $detail->product->image}}"> 
                                            </td>
        
                                        <td>{{ $detail->price }}</td>
                                        <td>{{ $detail->qty }}</td>
                                        <td>{{ $detail->discount }}</td>
                                        <td>{{ $detail->amount }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </form>
</div>
@endsection

@section('header')
<link rel="stylesheet" href="home.css">
@endsection
