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
                <section class="product-by-category-top">
                    <h2>Sofa Products</h2>
                    <div class="product-category-list">
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                    </div>
                </section>`
                <section class="product-by-category-top">
                    <h2>Chair Products</h2>
                    <div class="product-category-list">
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                    </div>
                </section>
            </div>
        </div>
        <x-post />
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
