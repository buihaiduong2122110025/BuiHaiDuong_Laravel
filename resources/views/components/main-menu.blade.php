{{-- <header>

    <div class="logo">
        <a>
            <img src="{{ asset('img/logo2.png') }}" alt="Logo">
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


            @foreach ($list_menu as $menuitem)
                <x-mainmenuitem :$menuitem />
            @endforeach



        </ul>
        <ul>
            <li><a href="login"><img src="{{ asset('img/profile.png') }}">


                    @if (Auth::check())                        {{ Auth::user()->name }}
                    @else
                    @endif
                </a></li>
            <li><a href="{{ route('website.logout') }}"><img class="text-light" src="{{ asset('img/logout.png') }}"></a>
            </li>

            <li><a href="cart"><img src="{{ asset('img/cart1.png') }}"></a></li>
        </ul>
    </nav>
    <div class="menu-toggle">
        <i class="fas fa-bars"></i>
    </div>



</header> --}}



<div class="menu-header">
    <div class="row">
        <div class="col-3 box">
            <div class="logo">
                <a class="d-flex justify-content-center">
                    <img src="{{ asset('img/logo/logo.png') }}" alt="Logo">
                    {{-- <svg id="Layer_1" aria-labelledby="title" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 78"><title id="title" lang="en"></title><path d="M57.76,62H22.29l-5.5,14.44H2.42L31.83,1.24H43.35A7.14,7.14,0,0,1,50,5.79L77.63,76.46H63.26ZM26,50.41H54.06l-14-38Z" transform="translate(-2.42)" style="fill:#8a8a8d;"></path><path d="M134.42,48.38h-13V76.46H108.27V1.24h32.89c14.82,0,24.47,9.7,24.47,23.57,0,13.42-8.76,20.64-17.73,22.1l18.3,29.55H151Zm4.94-35.52h-18V36.77h18c7.41,0,12.8-4.74,12.8-12S146.77,12.86,139.36,12.86Z" transform="translate(-2.42)" style="fill:#8a8a8d;"></path><path d="M215.73,12.86H193.06V8.42a7.16,7.16,0,0,1,7.14-7.17h51.34V12.86H228.87V76.46H215.73V12.86Z" transform="translate(-2.42)" style="fill:#8a8a8d;"></path><path d="M281.79,1.24h6a7.16,7.16,0,0,1,7.14,7.17v68H281.79V1.24Z" transform="translate(-2.42)" style="fill:#8a8a8d;"></path><path d="M325.54,38.91C325.54,15.79,342.71,0,364.27,0c15.71,0,25,7.89,30.64,16.92l-11.22,5.75a22.44,22.44,0,0,0-19.42-10.94C350,11.73,339,23.12,339,38.91s11,27.18,25.26,27.18a22.21,22.21,0,0,0,19.42-10.94l11.22,5.75c-5.72,9-14.93,16.92-30.64,16.92C342.71,77.82,325.54,62,325.54,38.91Z" transform="translate(-2.42)" style="fill:#8a8a8d;"></path><path d="M432.84,1.24h6V64.85h33V76.46H425.7v-68A7.16,7.16,0,0,1,432.84,1.24Z" transform="translate(-2.42)" style="fill:#8a8a8d;"></path><path d="M510,1.24h44.16V12.86H516V32.37h37.38V44H516V64.85h38.16V76.46h-51.3v-68A7.16,7.16,0,0,1,510,1.24Z" transform="translate(-2.42)" style="fill:#8a8a8d;"></path><path d="M589.91,59.58a9.46,9.46,0,1,1-5.81,5.83A9.48,9.48,0,0,1,589.91,59.58Z" transform="translate(-2.42)" style="fill:#f1655b;"></path></svg> --}}

                </a>
            </div>
        </div>
        <div class="col-6 box">
            <div class="search-container">
                <input type="text" class="search-bar" placeholder="Search...">
            </div>
        </div>
        <div class="col-3 login-cart pl-5 pr-5">

            <div class="row login-cart-row">
                <div class="col-6  text-center  ">
                    <a class="text-decoration-none text-dark" href="login"><img src="{{ asset('img/profile.png') }}">


                        <h6 class="text-decoration-none text-dark">
                            @if (Auth::check())
                                {{-- nếu log thì show name --}}
                                {{ Auth::user()->name }}
                            @else
                                {{-- k có thì k show --}}
                            @endif
                        </h6>
                    </a>
                </div>

                {{-- <div class="col-4">

                    <a href="{{ route('website.logout') }}"><img class="text-light"
                            src="{{ asset('img/out.png') }}"></a>
                </div> --}}
                <div class="col-6   ">
                    <a class="text-decoration-none text-dark" href="cart"><img src="{{ asset('img/cart1.png') }}">


                        <h6 class="text-decoration-none text-dark">
                            Cart
                        </h6>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9 box">
            <nav>
                <ul>
                    @foreach ($list_menu as $menuitem)
                        <x-mainmenuitem :$menuitem />
                    @endforeach
                </ul>
            </nav>
        </div>
        <div class="col-3 box d-flex">
            <div class="register">
                <h5>
                    Register
                </h5>
            </div>
            {{-- <div class="header-icons">
                <i class="fas fa-flag-usa"></i>
                <i class="fas fa-question-circle"></i>
                <i class="fas fa-user-circle"></i>
                <div class="favorites">
                    <i class="fas fa-heart"></i>
                    <span class="badge">0</span>
                </div>
                <i class="fas fa-shopping-cart"></i>
            </div> --}}
            <div class="login-main">

            @if (Auth::check())
                <a class="text-decoration-none text-dark " href="{{ route('website.logout') }}">
                    <h5 class="">Logout<i class="fa-solid fa-right-from-bracket"></i></h5>
                </a>
            @else
                <a class="text-decoration-none text-dark" href="login"><h5>Login<i
                        class="fa-solid fa-right-to-bracket"></i>
                    
                    </h5></a>
            @endif

        </div>
        </div>
    </div>
</div>
