@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div>
        {{-- <h2 class="text-center post_text">{{ $row_topic->name }}</h2> --}}
        <div class="row post_all">

            <div class="col-md-3 post_all">
                {{-- <x-modlisttopic/> --}}
            </div>

            <div class="col-md-9 post_all">
                @foreach ($page_list as $row_post)
                    <div class="row post_all">
                       

                        <div class="col-md-12 p-4 post_all">
                            <h3>{{ $row_post->title }}</h3>
                            <p>{{ $row_post->detail }}</p>
                        </div>
                    </div>
                @endforeach
               
            </div>
            {{-- <div class="pagianton col-12 d-flex justify-content-center">

                {{ $post_list->links() }}

            </div> --}}
        </div>
       
        
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
