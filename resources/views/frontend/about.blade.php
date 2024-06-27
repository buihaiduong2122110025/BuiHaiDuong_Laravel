@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div>
        <section class="product-new">
            <div class="">
                
                <div class="post-small p-6">
                    @foreach ($post as $post)
                        
                    <img src="{{ asset('img/posts/' . $post->image) }}" class="img-fluid text-start"alt="{{ $post->image }}">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->detail }}</p>
                    @endforeach
        
                </div>
                  
            </div>
        </section>
       
        
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
