<div class="category_product-col1">



    <h1>Category</h1>


    <section class="product-category">
        <h2> Sofa</h2>
        <ul class="sub-category-list">
            <li><a href="">

                    <div class="btn-category"><button></button></div>
                </a>
                <h3> Sofa Bed</h3>

            </li>
            <li>
                <div class="btn-category"><button></button></div>

                <h3>Ottoman</h3>
            </li>
        </ul>
    </section>

    <section class="product-category">
        <h2> Chairs</h2>
        <ul class="sub-category-list">
            <li>
                <div class="btn-category"><button></button></div>

                <h3> Accent & Side Table</h3>
            </li>
            <li>
                <div class="btn-category"><button></button></div>

                <h3>Banquette</h3>
            </li>
        </ul>
    </section>

    <section class="product-category">
        <h2> Table</h2>
        <ul class="sub-category-list">
            <li>
                <div class="btn-category"><button></button></div>

                <h3> Bar Table</h3>
            </li>
            <li>
                <div class="btn-category"><button></button></div>

                <h3> Coffee Table</h3>
            </li>
        </ul>
    </section>
    <section class="product-category">
        <h2> Color</h2>
        <ul class="sub-category-list">
            <li><a href="">

                    <div class="btn-red"><button></button></div>
                </a>
                <h3> Red</h3>

            </li>
            <li>
                <div class="btn-blue"><button></button></div>

                <h3>Blue</h3>
            </li>
            <li>
                <div class="btn-yelow"><button></button></div>

                <h3>Yelow</h3>
            </li>
            <li>
                <div class="btn-white"><button></button></div>

                <h3>Gray</h3>
            </li>
            <li>
                <div class="btn-green"><button></button></div>

                <h3>Green</h3>
            </li>
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
    <div class="range-slider">
        <input type="range" class="range-input" min="0" max="100" value="50">
        <div class="range-value">$50</div>
    </div>

    <script>
        const rangeInput = document.querySelector('.range-input');
        const rangeValue = document.querySelector('.range-value');

        rangeInput.addEventListener('input', () => {
            rangeValue.textContent =rangeInput.value;
        });
    </script>
</div>