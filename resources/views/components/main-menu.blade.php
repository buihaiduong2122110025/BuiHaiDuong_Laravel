<div class="menu-header">
    <div class="row align-items-center">
        <div class="col-6 col-md-3 box">
            <div class="logo">
                <a class="d-flex justify-content-center">
                    <img src="{{ asset('img/logo/logo.png') }}" alt="Logo">
                </a>
            </div>
        </div>
        <div class="col-md-6 d-none d-md-block box">
            <div class="search-container">
                <form class="d-flex" method="POST" action="{{ route('site.search') }}" enctype="multipart/form-data">
                    @csrf
                    <input id="search-input" name="keywords_submit" type="text" class="search-bar" placeholder="Search...">
                    <input type="submit" name="search_items" class="search-btn" value="Search">
                </form>
                <div id="suggestions-box" class="suggestions-box"></div>
            </div>
        </div>
        <div class="col-md-3 d-none d-md-flex login-cart justify-content-center">
            <div class="header-icons">
                <div class="user-container">
                    <div class="user-icon"><i class="fa-regular fa-circle-user"></i></div>
                    <div class="user-menu">
                        <a href="#">My:
                            @if (Auth::check())
                                {{ Auth::user()->name }}
                            @endif
                        </a>
                        <a href="#">Profile</a>
                        @if (Auth::check())
                            <a class="" href="{{ route('website.logout') }}">Logout</a>
                        @else
                            <a class="" href="{{ route('website.getlogin') }}">Login/Register</a>
                        @endif
                    </div>
                </div>
                <div class="favorites">
                    @php
                        $count = count(session('carts', []));
                    @endphp
                    <a href="{{ route('site.cart.index') }}">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge" id="showqty">{{ $count }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-md-flex d-none">
        <div class="col-9 box">
            <nav>
                <ul>
                    @foreach ($list_menu as $menuitem)
                        <x-mainmenuitem :$menuitem />
                    @endforeach
                </ul>
            </nav>
        </div>
        <div class="col-3 box d-flex"></div>
    </div>






    
    <div class="menu-toggle d-md-none">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>











    <div class="collapse navbar-collapse d-md-none" id="navbarContent">
        <div class="search-container">
            <form class="d-flex" method="POST" action="{{ route('site.search') }}" enctype="multipart/form-data">
                @csrf
                <input id="search-input" name="keywords_submit" type="text" class="search-bar" placeholder="Search...">
                <input type="submit" name="search_items" class="search-btn" value="Search">
            </form>
            <div id="suggestions-box" class="suggestions-box"></div>
        </div>
        <div class="login-cart">
            <div class="header-icons">
                <div class="user-container">
                    <div class="user-icon"><i class="fa-regular fa-circle-user"></i></div>
                    <div class="user-menu">
                        <a href="#">My:
                            @if (Auth::check())
                                {{ Auth::user()->name }}
                            @endif
                        </a>
                        <a href="#">Profile</a>
                        @if (Auth::check())
                            <a class="" href="{{ route('website.logout') }}">Logout</a>
                        @else
                            <a class="" href="{{ route('website.getlogin') }}">Login/Register</a>
                        @endif
                    </div>
                </div>
                <div class="favorites">
                    @php
                        $count = count(session('carts', []));
                    @endphp
                    <a href="{{ route('site.cart.index') }}">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge" id="showqty">{{ $count }}</span>
                    </a>
                </div>
            </div>
        </div>
        <nav>
            <ul class="list-unstyled">
                @foreach ($list_menu as $menuitem)
                    <x-mainmenuitem :$menuitem />
                @endforeach
            </ul>
        </nav>
    </div>
</div>
