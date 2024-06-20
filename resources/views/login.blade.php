{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('website.dologin') }}" method="post" enctype="multipart/form-data">
        @csrf

    <div class="col-md-8">
        <div class="mb-3">
           <label for="username" class="text-main">Tên tài khoản (*)</label>
           <input type="text" name="username" id="username" class="form-control" placeholder="Nhập tài khoản đăng nhập" required>
        </div>
        <div class="mb-3">
           <label for="password" class="text-main">Mật khẩu (*)</label>
           <input type="password" name="password" id="password" class="form-control" placeholder="Mật khẩu" required>
        </div>
        <div class="mb-3">
           <button class="btn btn-main"  type="submit">Đăng nhập</button>
        </div>
        
        <p><u class="text-main">Chú ý</u>: (*) Thông tin bắt buộc phải nhập</p>
        
     </div>
    </form>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/css1.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    <title></title>
</head>

<body>

    <div>
        <div>
          {{-- <x-mainmenu/> --}}
        </div>
    </div>


    <main>
        <div>
            <div>
            <div class="login">
                
                <img src="./img/bg-login.webp" alt="login image" class="login__img">
        
                <form action="{{ route('website.dologin') }}" class="login__form" method="post" enctype="multipart/form-data">
                    @csrf
                    <h1 class="login__title text-light">Login</h1>
        
                    <div class="login__content">
                        <div class="login__box">
                            <i class="ri-user-3-line login__icon text-light"></i>
        
                            <div class="login__box-input">
                                <input   class="login__input" id="username" name="username"
                                    placeholder=" ">
                                <label for="login-email" class="login__label text-light">Email</label>
                            </div>
                        </div>
        
                        <div class="login__box">
                            <i class="ri-lock-2-line login__icon text-light"></i>
        
                            <div class="login__box-input">
                                <input type="password" required class="login__input" id="password" name="password"
                                    placeholder=" ">
                                <label for="login-pass" class="login__label text-light">Password</label>
                                <i class="ri-eye-off-line login__eye text-light" id="login-eye"></i>
                            </div>
                        </div>
                    </div>
        
                    <div class="login__check">
                        <div class="login__check-group">
                            <input type="checkbox" class="login__check-input" id="login-check">
                            <label for="login-check" class="login__check-label text-light">Remember me</label>
                        </div>
        
                        <a href="#" class="login__forgot text-decoration-none">Forgot Password?</a>
                    </div>
        
                    <button type="submit" class="login__button">Login</button>
        
                    <p class="login__register text-light">
                        Don't have an account? <a class="text-decoration-none" href="#">Register</a>
                    </p>
                </form>
                
            </div>
        
        </div>
    </main>



    {{-- <footer>
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
                            <x-footermenu/>
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
                            <div class="img-1"><img src="{{ asset('img/fb.png') }}   ">

                            </div>
                            <div class="img-2"><img src="{{ asset('img/int.png') }}   ">

                            </div>
                            <div class="img-3"><img src="{{ asset('img/twitter.png') }} ">

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

    <script src="{{ asset('js/script.js') }}"></script> --}}
</body>


</html>
