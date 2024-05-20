@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div>
        <section class="post-new">
            <h2>New Post </h2>

            <div class="post-row">
                <div class="post-main">
                    <h2>Main Post</h2>
                    <div class="post">
                        <img src="./img/plants-desk.jpg">
                        <h3>Main Post Title</h3>
                        <p>We regularly research to ensure that these retail prices represent realistic prices on comparable
                            items, but nothing can replace your own comparison shoppingWe regularly research to ensure that
                            these
                            retail prices represent realistic prices on comparable items, but nothing can replace your own
                            co .
                            Notwithstanding the comparable retail price information provided, if this is an important factor
                            for you
                            in your purchasing decision, we recommend you also conduct your own individual research.</p>
                    </div>
                </div>
                <div class="post-sidebar">
                    <h2>Related Posts</h2>
                    <div class="post-small">
                        <img src="./img/plants-lamp-desk.jpg">
                        <h3>Related Post 1</h3>
                        <p>Related Post 2 Content</p>
                    </div>
                    <div class="post-small">
                        <img src="./img/plants-lamp-desk.jpg">
                        <h3>Related Post 2</h3>
                        <p>Related Post 2 Content</p>
                    </div>
                    <div class="post-small">
                        <img src="./img/plants-lamp-desk.jpg">
                        <h3>Related Post 3</h3>
                        <p>Related Post 3 Content</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
