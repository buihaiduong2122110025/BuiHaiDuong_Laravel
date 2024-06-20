<div class="product">
    <a class="product-link" href="{{ route('site.product.detail', ['slug' => $product->slug]) }}">
        <div class="image-container">
            <img src="{{ asset('img/products/' . $product->image) }}" class="img-fluid"alt="{{ $product->image }}">
            <i class="fas fa-heart"></i>
        </div>
        <h3>{{ $product->name }}</h3>
        <h5>${{ $product->price }}</h5>
    </a>
    <div class="price-sale">

        <h5 class="price-gacc">${{ $product->pricesale }}</h5>
        <h5 class="price-phamtram">-50%</h5>

    </div>
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
