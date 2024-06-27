@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div class="post_all">
        <h2 class="text-center post_text">Post</h2>
        <div class="row ">

            <div class="col-md-3 ">
                <x-modlisttopic/>
            </div>

            <div class="col-md-9 ">
                @foreach ($post_list as $row_post)
                    <div class="row post-card ">


                        <div class="col-md-4  img-card">

                            <a class="" href="{{ route('site.post.detail', ['slug' => $row_post->slug]) }}">

                            <img  src="{{ asset('img/posts/' . $row_post->image) }}" class=" "alt="{{ $row_post->image }} ">
                            </a>
                        </div>

                        <div class="col-md-8 p-4 title-card  ">
                            <a class="text-decoration-none" href="{{ route('site.post.detail', ['slug' => $row_post->slug]) }}">

                            <h3 class="title ">{{ $row_post->title }}</h3>
                            <p class="detail">{{ $row_post->detail }}</p>
                            </a>
                        </div>


                    </div>
                @endforeach
               
            </div>
            <div class="pagianton col-12 d-flex justify-content-center">

                {{ $post_list->links() }}

            </div>
        </div>
       
        
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
