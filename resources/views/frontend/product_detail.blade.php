@extends('layouts.site')
@section('title','Trang Chủ')


@section('content')
<div>
    
  <div class="row-detail">
    <div class="row-img">

      <img src="./img/anh3.webp" alt="Product 6">

    </div>

    <div class="row-info">

      <h1>Product 1</h1>
      <p>100$</p>
      <div>

        <p> ⭐⭐⭐⭐⭐
        </p>
      </div>
        <h5>
          Category: Chair
        </h5>

      <h3>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in eleifend justo, eget cursus
        ipsum. Mauris ornare</h3>

      <div class="row-mua">
        <div class="plus-min">
        <div class="qty">
          <label for="qty">Quantity</label>
      </div>
          <div class="plus">+</div>
          <div class="input-detail">
          <input type="number" value="1" name="qty" id="a" class="form-control">
        </div>
          <div class="min">-</div>
        </div>

        <div class="row-add">
          <div class="checkout">
            <a class="">Checkout</a>

          </div>
          <div class="addcart">
            <button class="btn btn-main">
              <i class="fa fa-shopping-cart"></i> Add Cart
            </button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>    
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection 