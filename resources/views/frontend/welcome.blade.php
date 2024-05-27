<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    
    <div class="product-new">

@foreach($product as $product)
<div class="product-list">
    <div class="product">
        <a class="product-link" href="product-detail">
            <div class="image-container">
                <img src="{{$product->image}}" alt="Product 4">
                <i class="fas fa-heart"></i>
            </div>
            <h3>{{ $product->name }}</h3>
        </a>
        <h5>${{ $product->price }}</h5>
        <h5>${{ $product->pricesale }}</h5>

        <div class="btn-container">
            <div class="btn-color-1">
                <button> </button>
            </div>
            <div class="btn-color-2">
                <button> </button>
            </div>
            <div class="btn-color-3">
                <button> </button>
            </div>
        </div>
    
    </div>
<div class="text-center ">
<h1 class="text-danger">wgfyewegfud</h1>
</div>
</div>
    @endforeach
    
    </div>
</body>
</html>