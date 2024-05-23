<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}">
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
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">

</head>

<body>

    <div>
        <div>
            {{-- 
            <header>
                <div class="header-container">
                    <div class="logo">
                        <a href="{{ route('home') }}">
                            <img src="./img/logo-2.png" alt="Logo">
                        </a>
                    </div>
                    <ul class="menu">                       
                        <li class="nav-li home"><a class="nav-li" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-li product-menu"><a class="nav-li" href="product">Product</a></li>
                        <li class="nav-li contact-menu"><a class="nav-li" href="contact">Contact</a></li>
                        <li class="nav-li blog"><a class="nav-li" href="blog">Blog</a></li>
                    </ul>
                    <div class="search">
                        <input type="text" placeholder="Tìm kiếm...">
                        <div class="btn-button"><button>Tìm</button></div>
                    </div>
                    <div class="login-cart">
                        <div class="login"><i class="fas fa-user nav-item"></i></div>
                        <div class="heart"><i class="fas fa-heart nav-item"></i></div>
                        <div class="cart"><i class="fas fa-cart-arrow-down"></i></div>
                    </div>
                </div>
            </header>
             --}}

            <header>
                <div class="logo">
                    <a href="{{ route('home') }}">
                        <img src="./img/logo2.png" alt="Logo">
                    </a>
                </div>
              
                <nav>
                    <ul>
                        <li>
                            <div class="search">
                                <input type="text" placeholder="Tìm kiếm...">
                                <div class="btn-button"><button>Tìm</button></div>
                            </div>
                        </li>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="product">Product</a></li>
                        <li><a href="contact">Contact</a></li>
                        <li><a href="blog">Blog</a></li>
                        <li><a href="login">Login</a></li>
                        <li><a href="cart">Cart</a></li>

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
                        <h4>Contact Us</h4>
                        <p>Address: 103 Tăng Nhơn Phú, Phước Long B, Quận 9, Thành phố Hồ Chí Minh, Việt Nam</p>
                        <p>Phone: 0981992900</p>
                        <p>Email: dayduongtui@gmail.com</p>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>&copy; 2024 D1_Clear-Shop Company. All Rights Copyright. Designed by Dương</p>

                </div>
            </footer>
        </div>
    </footer>
    @yield('footer')

    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const nav = document.querySelector('nav');

        menuToggle.addEventListener('click', () => {
            nav.classList.toggle('active');
        });
    </script>
</body>

</html>
