@foreach ($product_list as $product )
    <x-productcard :productitem="$product"/>
@endforeach