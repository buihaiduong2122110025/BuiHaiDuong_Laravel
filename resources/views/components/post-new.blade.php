<div class="post text-decoration-none">
    <div class="post-small">
        @foreach ($post as $post)
        <a class="text-decoration-none" href="{{ route('site.post.detail', ['slug' => $post->slug]) }}">

        <img style="width: 65%" src="{{ asset('img/posts/' . $post->image) }}" class="img-fluid"alt="{{ $post->image }} ">
        <h3>{{ $post->title }}</h3>
        <p class=" text-dark">{{ $post->detail }}</p>
        </a>
        @endforeach

    </div>
    
</div>