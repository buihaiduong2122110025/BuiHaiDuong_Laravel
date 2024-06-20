@foreach ($list as $row)
<div class="category">
    <a class="product-link" href="product-detail">
        <div class="image-container">
           <img src="{{ asset('img/categorys/' . $row->image) }}" 
           class="img-fluid"alt="{{ $row->image }}">            
        </div>
        <h3>  {{ $row->name }}</h3>
    </a>
</div>
@endforeach

