<div class="post text-decoration-none">
    @foreach ($post_list as $postitem )
    <x-postcard :$postitem />
        
    @endforeach
</div>