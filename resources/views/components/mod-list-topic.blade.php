<div class="category_product-col1">
    <h1>Topic</h1>


    <section class="product-category">
        <ul class="sub-category-list">
            @foreach ($list_topic as $mod_row_topic)
                <li><a class="text-decoration-none"
                        href="{{ route('site.post.topic', ['slug' => $mod_row_topic->slug]) }}">

                        <div class="btn-category"><button></button></div>

                        <h3 class="text-decoration-none text-dark"> {{ $mod_row_topic->name }}</h3>

                    </a></li>
            @endforeach

        </ul>
    </section>






  

</div>
