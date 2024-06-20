{{-- <li><a href="index.html">Home</a></li>
<li><a href="product.html">Product</a></li>
<li><a href="contact.html">Contact</a></li>
<li><a href="blog.html">Blog</a></li>

 --}}

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
                @foreach ($list_menu as $menuitem)
                <x-footermenuitem :$menuitem />
            @endforeach
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