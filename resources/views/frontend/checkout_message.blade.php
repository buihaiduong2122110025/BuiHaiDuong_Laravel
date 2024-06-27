@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div class="checkout_message">
                    <h1 class="text-center">You Checkout Success</h1>

        <div class="containerrr my-5 success  ">


            <img class="success-img" src="{{ asset('img/success.png') }}"/>
        </div>
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
