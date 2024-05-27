@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div>
        <div class="product-detail">
            <div class="product-image">
                <img src="./img/anh1.webp" alt="Product Image">
            </div>
            <div class="product-info">
                <h1 class="product-title">Product Name</h1>
                <p class="product-description">Product description here...</p>
                <p class="product-price">$99.99</p>
                <p class="product-color">Color</p>
                <div class="color-list ">
                    <div class="btnn-red"><button></button></div>
                    <div class="btnn-blue"><button></button></div>
                    <div class="btnn-yelow"><button></button></div>
                    <div class="btnn-white"><button></button></div>
                    <div class="btnn-green"><button></button></div>
                </div>

                {{-- <div class="plus">+</div>
                <div class="input-detail">
                <input type="number" value="1" name="qty" class="inputt" >
              </div>
                <div class="min">-</div>
              </div>
                 --}}
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
    
        
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
