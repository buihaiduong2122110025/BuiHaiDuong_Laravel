@extends('layouts.site')
@section('title', 'Search Results')

@section('content')
<div>
    <div class="product-main">
        <section class="product-new">
            <h2>Showing search results for: {{ $keywords }}</h2>
            <div class="product-list">
                @if ($search_product->isEmpty() && $search_category->isEmpty() && $search_brand->isEmpty() && $search_post->isEmpty())
                    <div class="Search-Results">
                        <p>No results found for the keyword: "{{ $keywords }}"</p>
                    </div>
                @else
                    @foreach ($search_product as $productitem)
                        <x-productcard :$productitem />
                    @endforeach
                    @foreach ($search_category as $categoryitem)
                        <div class="category-item">
                            {{-- <a href="{{ route('site.category.detail', ['slug' => $categoryitem->slug]) }}"> --}}
                                <img src="{{ asset('img/categorys/' . $categoryitem->image) }}" class="img-fluid" alt="{{ $categoryitem->image }}">
                                {{ $categoryitem->name }}

                            {{-- </a> --}}
                        </div>
                    @endforeach
                    @foreach ($search_brand as $branditem)
                        <div class="brand-item">
                            {{-- <a href="{{ route('site.brand.detail', ['slug' => $branditem->slug]) }}"> --}}
                                {{ $branditem->name }}
                            {{-- </a> --}}
                        </div>
                    @endforeach
                    @foreach ($search_post as $postitem)
                        <div class="post-item">
                            <img src="{{ asset('img/posts/' . $postitem->image) }}" class="img-fluid" alt="{{ $postitem->image }}">

                            {{-- <a href="{{ route('site.post.detail', ['slug' => $postitem->slug]) }}"> --}}
                                {{ $postitem->title }}
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </section>
    </div>
</div>
@endsection

@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
