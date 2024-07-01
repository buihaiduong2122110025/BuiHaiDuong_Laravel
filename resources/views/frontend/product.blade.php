@extends('layouts.site')
@section('title', 'Trang Chủ')

@section('content')
    <div class="row-2">
        <x-modlistcategory />
        <div class="row-product-all">
            <div class="col-product-all">
                <div class="search-container-product">
                    <form class="d-flex" method="POST" action="{{ route('site.search.product') }}" enctype="multipart/form-data">
                        @csrf
                        <input id="search-input" name="keywords_submit" type="text" class="search-bar-product" placeholder="Search...">
                        <input type="submit" name="search_items" class="search-btn-product" value="Search">
                    </form>
                    <div id="suggestions-box" class="suggestions-box"></div>
                </div>
                <div class="view-mode">
                    <button class="btn-view active" id="grid-view"><i class="fas fa-th-large"></i> Grid View</button>
                    <button class="btn-view" id="list-view"><i class="fas fa-th-list"></i> List View</button>
                </div>
                <section class="product-new">
                    <h2>Products</h2>
                    <div class="product-list-all" id="product-list">
                        @foreach ($product_list as $productitem)
                            <x-productcard :$productitem />
                        @endforeach
                    </div>
                </section>
                <div class="pagianton col-12 d-flex justify-content-center">
                    {{ $product_list->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('header')
    <link rel="stylesheet" href="home.css">
@endsection


{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
