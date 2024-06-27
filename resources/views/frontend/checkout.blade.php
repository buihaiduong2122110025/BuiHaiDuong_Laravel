@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div class="container">
        <div class="cart-container">
            <h1>My Checkout</h1>
            <div class="row">
                <div class="col-md-9">
                    <form action="{{ route('site.cart.update') }}" method="post">
                        @csrf
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th style="width:200px">Image</th>
                                    <th>Name Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $totalMoney = 0;
                                @endphp
                                @foreach ($list_cart as $row_cart)
                                    <tr>
                                        <td>{{ $row_cart['id'] }}</td>
                                        <td>
                                            <img class="img-fluid" src="{{ asset('img/products/' . $row_cart['image']) }}"
                                                alt="{{ $row_cart['image'] }}">
                                        </td>
                                        <td>{{ $row_cart['name'] }}</td>
                                        <td>
                                            {{ $row_cart['qty'] }}
                                        </td>
                                        <td>{{ $row_cart['price'] }}</td>
                                        <td>{{ $row_cart['price'] * $row_cart['qty'] }}</td>

                                    </tr>
                                    @php
                                        $totalMoney += $row_cart['price'] * $row_cart['qty'];
                                    @endphp
                                @endforeach
                            </tbody>

                        </table>
                    </form>
                </div>
                <div class="col-md-3">
                    <strong>Total: {{ number_format($totalMoney) }} </strong>

                </div>
            </div>

            @if (!Auth::check())
                <div class="row">
                    <div class="col-12">
                        <h3>Please Login To Checkout</h3>
                        <a href="{{ route('website.getlogin') }}">Login</a>
                    </div>
                </div>
            @else
                <form action="{{ route('site.cart.docheckout') }}" method="post">
                    @csrf
                    @php
                        $user = Auth::user();
                    @endphp
                    <div class="row my-5">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Họ tên</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Điện thoại</label>
                                <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Địa chỉ</label>
                                <input type="text" name="address" value="{{ $user->address }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label>Chú ý</label>
                                <textarea name="note" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-end">
                            <button class="btn btn-success">Đặt mua</button>
                        </div>
                    </div>
                </form>
            @endif



        </div>

    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection

