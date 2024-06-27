<div class="category_product-col1">
    <h1>Brand</h1>
    <section class="product-category">
        <ul class="sub-category-list">
            @foreach ($list_brand as $mod_row_brand)
                <li><a class="text-decoration-none" href="{{ route('site.product.brand', ['slug' => $mod_row_brand->slug]) }}">
                    <div class="btn-category"><button></button></div>
                    <h3 class="text-decoration-none text-dark">{{ $mod_row_brand->name }}</h3>
                </a></li>
            @endforeach
        </ul>
    </section>

    <h1>Category</h1>
    <section class="product-category">
        <ul class="sub-category-list">
            @foreach ($list_category as $mod_row_category)
                <li><a class="text-decoration-none" href="{{ route('site.product.category', ['slug' => $mod_row_category->slug]) }}">
                    <div class="btn-category"><button></button></div>
                    <h3 class="text-decoration-none text-dark">{{ $mod_row_category->name }}</h3>
                </a></li>
            @endforeach
        </ul>
    </section>

    <section class="product-category">
        <h2>Color</h2>
        <ul class="sub-category-list">
            <li><a href=""><div class="btn-red"><button></button></div></a><h3>Red</h3></li>
            <li><div class="btn-blue"><button></button></div><h3>Blue</h3></li>
            <li><div class="btn-yelow"><button></button></div><h3>Yellow</h3></li>
            <li><div class="btn-white"><button></button></div><h3>Gray</h3></li>
            <li><div class="btn-green"><button></button></div><h3>Green</h3></li>
        </ul>
    </section>

    <section class="productfillter">
        <div class="filter-sort">
            <div class="filter-cat">
                <label for="filter">Filter:</label>
                <select id="filter">
                    <option value="all">All</option>
                    <option value="category1">Sofa</option>
                    <option value="category2">Table</option>
                    <option value="category3">Chair</option>
                </select>
            </div>
            <div class="sort-cat">
                <label for="sort">Sort by:</label>
                <select id="sort">
                    <option value="price-low">Price Low to High</option>
                    <option value="price-high">Price High to Low</option>
                    <option value="name-a">Name A to Z</option>
                    <option value="name-z">Name Z to A</option>
                </select>
            </div>
        </div>
    </section>
</div>

