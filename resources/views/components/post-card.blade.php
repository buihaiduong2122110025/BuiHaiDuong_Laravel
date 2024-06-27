    <div class="post-small">
        <a class="text-decoration-none" href="{{ route('site.post.detail', ['slug' => $post->slug]) }}">

        <img src="{{ asset('img/posts/' . $post->image) }}" class="img-fluid"alt="{{ $post->image }}">
        <h3 class="text-dark">{{ $post->title }}</h3>
        <p class="text-dark">{{ $post->detail }}</p>
        </a>
    </div>
