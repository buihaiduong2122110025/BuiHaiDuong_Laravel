<section class="product-sale">
    <h2>Sale Products</h2>
    <div class="product-list">
        @foreach ($product_list as $productitem)
            <x-productcard :$productitem />
        @endforeach
    </div>
</section>
