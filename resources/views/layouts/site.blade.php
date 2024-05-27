<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/css1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/js.js') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('js/js.js') }}"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/path/to/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Reddit+Mono:wght@200..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div>
        <div>
            <header>
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="./img/logo2.png" alt="Logo">
                    </a>
                </div>

                <nav>
                    <ul>
                        <li>
                            <div class="search-box">
                                <input type="text" placeholder="Search..." />
                                <i class="fa fa-search"></i>
                            </div>
                        </li>
                        <li>
                            <div class="thang"></div>
                        </li>

                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="product">Product</a></li>
                        <li><a href="contact">Contact</a></li>
                        <li><a href="blog">Blog</a></li>
                        <li><a href="login"><img src="./img/profile.png"></a></li>
                        {{-- <li><a href="heart"><img src="./img/heart.png"></a></li> --}}

                        <li><a href="cart"><img src="./img/cart1.png"></a></li>


                    </ul>
                </nav>
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </header>
        </div>
    </div>


    <main>
        @yield('content')
    </main>



    <footer>
        <div>
            <footer>
                <div class="footer-container">
                    <div class="footer-column">
                        <h4>About Us</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in eleifend justo, eget
                            cursus ipsum. Mauris ornare justo id nibh vulputate, in consectetur nunc ultrices.</p>
                    </div>
                    <div class="footer-column">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="product.html">Product</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Help</h4>
                        <ul>

                            <li><a href="index.html">Help Center</a></li>
                            <li><a href="product.html">Shipping</a></li>
                            <li><a href="contact.html">Returns</a></li>
                            <li><a href="blog.html">Contact US</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Contact Us</h4>
                        <p>Address: 103 Tăng Nhơn Phú, Phước Long B, Quận 9, Thành phố Hồ Chí Minh, Việt Nam</p>
                        <p>Phone: 0981992900</p>
                        <p>Email: dayduongtui@gmail.com</p>
                        <div class="icon-1-2">
                            <div class="img-1"><img src="./img/fb.png   ">

                            </div>
                            <div class="img-2"><img src="./img/int.png   ">

                            </div>
                            <div class="img-3"><img src="./img/twitter.png   ">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; Copyright © 2024 D1_Shop.com. All rights reserved.. Designed by Dương</p>

                </div>
            </footer>
        </div>
    </footer>
    @yield('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
