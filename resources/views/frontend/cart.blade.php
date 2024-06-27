@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div class="container">
        <div class="cart-container">
        <h1>My Cart</h1>
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
                    <th>Delete</th>

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
                            <input type="number" style="width:60px" min="1" name="qty[{{ $row_cart['id'] }}]"
                                value="{{ $row_cart['qty'] }}">
                        </td>
                        <td>{{ $row_cart['price'] }}</td>
                        <td>{{ $row_cart['price'] * $row_cart['qty'] }}</td>
                        <td>
                            <a class="btn btn-danger" href="{{ route('site.cart.delete',['id'=>$row_cart['id']]) }}">
                                <i class="fa-solid fa-trash text-light"></i>
                            </a>
                        </td>
                    </tr>
                    @php
                        $totalMoney += $row_cart['price'] * $row_cart['qty'];
                    @endphp
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4">
                        <a class="btn btn-success px-3" href="#">Mua Thêm</a> 

                         <button type="submit"  class="btn btn-primary px-3">Cật Nhật </button> 
                         <a class="btn btn-info px-3" href="{{ route('site.cart.checkout') }}">Thanh toán</a> 
                        </th>
                    <th colspan="3" class="text-end">
                        <strong>Total: {{ number_format($totalMoney) }} </strong>
                    </th>

                </tr>
            </tfoot>
        </table>
      </form>
    </div>

    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
