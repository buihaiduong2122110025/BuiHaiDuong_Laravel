@foreach ($category_list as $cat_row)
    <section class="product-by-category-top">
        <h2>{{ $cat_row->name }}</h2>
        <div class="product-category-list">
            <x-productcategory :catrow="$cat_row"/>
    </div>
</section>
 @endforeach
