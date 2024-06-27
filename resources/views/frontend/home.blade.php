@extends('layouts.site')
@section('title', 'Trang Chủ')
@section('content')
    <div>
       
        <x-slider />
        <div class="container ">
            <div class="product-category-main">

                <x-category-top />
            </div>
            <div class="product-main">
                <x-productsale />
                <x-productnew />
                <x-productcategoryhome />

            </div>
        </div>
        <x-post />
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
