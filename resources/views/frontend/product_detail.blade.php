@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div class="detail-all">
        <div class="product-detail">
            <div class="product-image">
                <img src="{{ asset('img/products/' . $product->image) }}" class="img-fluid"alt="{{ $product->image }}">
            </div>
            <div class="product-info">
                <h1 class="product-title">{{ $product->name }}</h1>
                <p class="product-description">{{ $product->description }}</p>
                <p class="product-price">${{ $product->price }}</p>
                <p class="product-color">Color</p>
                <div class="color-list ">
                    <div class="btnn-red"><button></button></div>
                    <div class="btnn-blue"><button></button></div>
                    <div class="btnn-yelow"><button></button></div>
                    <div class="btnn-white"><button></button></div>
                    <div class="btnn-green"><button></button></div>
                </div>


                <p class="product-color">Quantity</p>

                <div class="product-quantity">
                    <button class="quantity-btn quantity-minus">-</button>
                    <input type="number" class="quantity-input" value="1" min="1" max="100">
                    <button class="quantity-btn quantity-plus">+</button>
                </div>
                <div class="product-actions">
                    <button class="btn-add-to-cart">Add to Cart</button>
                    <button class="btn-buy-now">Buy Now</button>
                </div>
            </div>


        </div>

        
        <div class="sanphamtuongtu">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Related
                        Rroducts</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Comment</button>

                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <div class="product-list-all">
                        @foreach ($product_list as $productitem)
                            <x-productcard :$productitem />
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0">
                    Comment</div>

            </div>
        </div>

    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
