@extends('layouts.site')
@section('title', 'Trang Chủ')


@section('content')
    <div>
        <section class="productfillter">
            <div class="filter-sort">
                <label for="filter">Filter:</label>
                <select id="filter">
                    <option value="all">All</option>
                    <option value="category1">Sofa</option>
                    <option value="category2">Table</option>
                    <option value="category3">Chair</option>
                </select>

                <label for="sort">Sort by:</label>
                <select id="sort">
                    <option value="price-low">Price Low to High</option>
                    <option value="price-high">Price High to Low</option>
                    <option value="name-a">Name A to Z</option>
                    <option value="name-z">Name Z to A</option>
                </select>


            </div>


    </div>
    </section>

    <div class="row-product-all">

        <div class="col-product-all">
            <section class="product-new">
                <h2>New Products</h2>
                <div class="product-list-all">
                    <div class="product">
                        <a class="product-link" href="product-detail" >
                            <div class="image-container">
                                <img src="./img/anh1.webp" alt="Product 4">
                                <i class="fas fa-heart"></i>
                              </div>                            <h3>Product 1</h3>
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
                        <a class="product-link" href="product-detail" >
                            <div class="image-container">
                                <img src="./img/anh2.webp" alt="Product 4">
                                <i class="fas fa-heart"></i>
                              </div>                        <h3>Product 2</h3>
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
                        <div class="image-container">
                            <img src="./img/anh3.webp" alt="Product 4">
                            <i class="fas fa-heart"></i>
                          </div>                        <h3>Product 3</h3>
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
                        <a class="product-link" href="product-detail" >
                            <div class="image-container">
                                <img src="./img/anh1.webp" alt="Product 4">
                                <i class="fas fa-heart"></i>
                              </div>                        <h3>Product 4</h3>
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
                        <div class="image-container">
                            <img src="./img/anh2.webp" alt="Product 4">
                            <i class="fas fa-heart"></i>
                          </div>                        <h3>Product 5</h3>
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
                        <div class="image-container">
                            <img src="./img/anh3.webp" alt="Product 4">
                            <i class="fas fa-heart"></i>
                          </div>                        <h3>Product 6</h3>
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
                        <div class="image-container">
                            <img src="./img/anh1.webp" alt="Product 4">
                            <i class="fas fa-heart"></i>
                          </div>                        <h3>Product 2</h3>
                        <h5>100$</h5>

                        <p>Description of Product 5</p>
                    </div>
                    <div class="product">
                        <div class="image-container">
                            <img src="./img/anh2.webp" alt="Product 4">
                            <i class="fas fa-heart"></i>
                          </div>                        <h3>Product 2</h3>
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
                        <div class="image-container">
                            <img src="./img/anh3.webp" alt="Product 4">
                            <i class="fas fa-heart"></i>
                          </div>                        <h3>Product 2</h3>
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
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
