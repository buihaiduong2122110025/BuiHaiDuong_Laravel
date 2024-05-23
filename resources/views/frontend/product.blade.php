@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')

    <div class="row-2">
    
<x-productcategory/>


        <div class="row-product-all">

            <div class="col-product-all">
                <section class="product-new">
                    <h2>Products</h2>
                    <div class="product-list-all">

                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />
                        <x-productcard />

                    </div>
                </section>




            </div>
        </div>
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
