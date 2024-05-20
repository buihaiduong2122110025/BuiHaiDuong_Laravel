@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div>

        <section class="slider">
            <div class="slider-container">
                <img class="slider-img-1" src="./img/slide1.png">
                <img class="slider-img-2" src="./img/slide2.png">
                <img class="slider-img-3" src="./img/slide3.png">
                <!-- <img class="slider-img-4" src="./img/slide1.png"> -->

            </div>
        </section>

        <div class="row-cat-pro">
            <div class="col-3">
                <h1>Category Products</h1>


                <section class="product-category">
                    <h2> Sofa</h2>
                    <ul class="sub-category-list">
                        <li><a href="">

                                <div class="btn-category"><button></button></div>
                            </a>
                            <h3> Sofa Bed</h3>

                        </li>
                        <li>
                            <div class="btn-category"><button></button></div>

                            <h3>Ottoman</h3>
                        </li>
                    </ul>
                </section>

                <section class="product-category">
                    <h2> Chairs</h2>
                    <ul class="sub-category-list">
                        <li>
                            <div class="btn-category"><button></button></div>

                            <h3> Accent & Side Table</h3>
                        </li>
                        <li>
                            <div class="btn-category"><button></button></div>

                            <h3>Banquette</h3>
                        </li>
                    </ul>
                </section>

                <section class="product-category">
                    <h2> Table</h2>
                    <ul class="sub-category-list">
                        <li>
                            <div class="btn-category"><button></button></div>

                            <h3> Bar Table</h3>
                        </li>
                        <li>
                            <div class="btn-category"><button></button></div>

                            <h3> Coffee Table</h3>
                        </li>
                    </ul>
                </section>
            </div>
            <div class="col-9">
                <section class="product-new">
                    <h2>New Products</h2>
                    <div class="product-list">
                        <div class="product">
                            <a class="product-link" href="product-detail">
                                <div class="image-container">
                                    <img src="./img/anh1.webp" alt="Product 4">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h3>Product 1</h3>
                            </a>
                            <h5>$100</h5>
                            <div class="btn-container">
                                <div class="btn-color-1">
                                    <button> </button>
                                </div>
                                <div class="btn-color-2">
                                    <button> </button>
                                </div>
                                <div class="btn-color-3">
                                    <button> </button>
                                </div>
                            </div>

                        </div>
                        <div class="product">
                            <a class="product-link" href="product-detail">
                                <div class="image-container">
                                    <img src="./img/anh2.webp" alt="Product 4">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h3>Product 2</h3>

                            </a>
                            <h5>$100</h5>
                            <div class="btn-container">
                                <div class="btn-color-1">
                                    <button> </button>
                                </div>
                                <div class="btn-color-2">
                                    <button> </button>
                                </div>
                                <div class="btn-color-3">
                                    <button> </button>
                                </div>
                            </div>

                        </div>
                        <div class="product">
                            <a class="product-link" href="product-detail">
                                <div class="image-container">
                                    <img src="./img/anh3.webp" alt="Product 4">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h3>Product 3</h3>
                            </a>
                            <h5>$100</h5>
                            <div class="btn-container">
                                <div class="btn-color-1">
                                    <button> </button>
                                </div>
                                <div class="btn-color-2">
                                    <button> </button>
                                </div>
                                <div class="btn-color-3">
                                    <button> </button>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <a class="product-link" href="product-detail">
                                <div class="image-container">
                                    <img src="./img/anh1.webp" alt="Product 4">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h3>Product 4</h3>
                            </a>
                            <h5>$100</h5>
                            <div class="btn-container">
                                <div class="btn-color-1">
                                    <button> </button>
                                </div>
                                <div class="btn-color-2">
                                    <button> </button>
                                </div>
                                <div class="btn-color-3">
                                    <button> </button>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <a class="product-link" href="product-detail">

                                <div class="image-container">
                                    <img src="./img/anh3.webp" alt="Product 4">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h3>Product 5</h3>
                            </a>
                            <h5>$100</h5>
                            <div class="btn-container">
                                <div class="btn-color-1">
                                    <button> </button>
                                </div>
                                <div class="btn-color-2">
                                    <button> </button>
                                </div>
                                <div class="btn-color-3">
                                    <button> </button>
                                </div>
                            </div>
                        </div>
                        <div class="product">
                            <a class="product-link" href="product-detail">

                                <div class="image-container">
                                    <img src="./img/anh2.webp" alt="Product 4">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h3>Product 6</h3>
                            </a>
                            <h5>$100</h5>
                            <div class="btn-container">
                                <div class="btn-color-1">
                                    <button> </button>
                                </div>
                                <div class="btn-color-2">
                                    <button> </button>
                                </div>
                                <div class="btn-color-3">
                                    <button> </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="product-sale">
                    <h2>Sale Products</h2>
                    <div class="product-list">
                        <div class="product">
                            <a class="product-link" href="product-detail">

                                <div class="image-container">
                                    <img src="./img/anh1.webp" alt="Product 4">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h3>Product 7</h3>
                            </a>
                            <h5>$100</h5>
                            <div class="btn-container">
                                <div class="btn-color-1">
                                    <button> </button>
                                </div>
                                <div class="btn-color-2">
                                    <button> </button>
                                </div>
                                <div class="btn-color-3">
                                    <button> </button>
                                </div>
                            </div>

                        </div>
                        <div class="product">
                            <a class="product-link" href="product-detail">

                                <div class="image-container">
                                    <img src="./img/anh2.webp" alt="Product 4">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h3>Product 8</h3>
                            </a>
                            <h5>$100</h5>
                            <div class="btn-container">
                                <div class="btn-color-1">
                                    <button> </button>
                                </div>
                                <div class="btn-color-2">
                                    <button> </button>
                                </div>
                                <div class="btn-color-3">
                                    <button> </button>
                                </div>
                            </div>

                        </div>
                        <div class="product">
                            <a class="product-link" href="product-detail">

                                <div class="image-container">
                                    <img src="./img/anh3.webp" alt="Product 4">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <h3>Product 9</h3>
                            </a>
                            <h5>$100</h5>
                            <div class="btn-container">
                                <div class="btn-color-1">
                                    <button> </button>
                                </div>
                                <div class="btn-color-2">
                                    <button> </button>
                                </div>
                                <div class="btn-color-3">
                                    <button> </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>


            </div>

        </div>



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
