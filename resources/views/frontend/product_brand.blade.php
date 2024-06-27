@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div class="row-2">
        <x-modlistcategory />
        <div class="row-product-all">
            <div class="col-product-all">
                <section class="product-new">
                    <h2>{{ $row->name }}</h2>
                    <div class="product-list-all">
                        @foreach ($product_list as $productitem)
                            <x-productcard :$productitem />
                        @endforeach
                    </div>
                </section>
                <div class="col-12 d-flex justify-content-center">
                    {{ $product_list->links() }}
    
                </div>
            </div>
            
           
        </div>
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
