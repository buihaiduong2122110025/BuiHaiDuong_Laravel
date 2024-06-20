<section class="slider">
    <div class="slide">

        @foreach ($list_slider as $row_slider)
            @if ($loop->first)
                <img class="slide active" src="{{ asset('img/banners/'.$row_slider->image) }}">
            @else
            <img class="slide" src="{{ asset('img/banners/'.$row_slider->image) }}">
            @endif
        @endforeach
        <a href="#" class="prev">&#10094;</a>
        <a href="#" class="next">&#10095;</a>

    </div>



    
</section>

<script>
    
</script>
