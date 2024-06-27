@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div class="detail-all">
        <div class="product-detail">
            <div class="product-image">
                <img src="{{ asset('img/posts/' . $post->image) }}" class="" style="width: 70%" alt="{{ $post->image }}">
            </div>
            <div class="product-info">
                <h1 class="product-title">{{ $post->title }}</h1>
                <p class="product-description">Detail : {{ $post->detail }}</p>
                <p class="product-description">Type : {{ $post->type }}</p>
                <p class="product-description">Topic :{{ $post->topic_id }}</p>


            </div>


        </div>


        <div class="sanphamtuongtu">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Related
                        Rroducts</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Comment</button>

                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <div class="product-list-all">
                        @foreach ($post_list as $postitem )
                        <x-postcard :$postitem />
                            
                        @endforeach 
                    
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
                    tabindex="0">
                    Comment</div>

            </div>
        </div>

    </div>
@endsection
@section('footer')


<script>

    


</script>

@endsection
    