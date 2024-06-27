@foreach ($list as $row)
<div class="category">
    <a class="product-link" href="{{ route('site.product.category', ['slug' => $row->slug]) }}">
        <div class="image-container">
            <img src="{{ asset('img/categorys/' . $row->image) }}" class="img-fluid" alt="{{ $row->image }}">
            <div class="overlay">Xem thêm</div>
        </div>
        <h3>{{ $row->name }}</h3>
    </a>
</div>
@endforeach
