<section class="product-new">
    <h2>New Products</h2>
    <div class="product-list">
        
      @foreach ($product_list as $productitem )
      <x-productcard :$productitem />
          
      @endforeach
          
    </div>
</section>