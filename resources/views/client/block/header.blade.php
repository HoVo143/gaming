<body>
    <header>
        <div class="container_header">
            <div class="navbar_header">
                <div class="logo_header">
                    <a href="{{ route('home') }}">
                        <h1>GAMING</h1>
                    </a>
                </div>
            </div>
            <nav class="nav_header">
                <ul class="Wrapper_items_header" id="MenuItems">
                    <li>
                        <form class="search-header">
                            <input type="text" class="search1" id="search1" name="search" placeholder="Search..">
                        </form>
                    </li>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="hover"><a href="#">Products</a>
                        <div id="containers-product">
                            <div class="containers-product">
                                <div class="wrappers-product">
                                    <h5><a href="{{ route('product.laptop') }}">Laptop Gaming</a></h5>
                                    <img class="click-product" src="{{ asset('assets/images/laptop-asus-1.png') }}" alt="">
                                </div>
                                <div class="wrappers-product">
                                    <h5><a href="{{ route('product.mouses') }}">Gaming mouse</a></h5>
                                    <img class="click-product" src="{{ asset('assets/images/chuot-background1.png') }}" alt="">
                                </div>
                                <div class="wrappers-product">
                                    <h5><a href="{{ route('product.keyboard') }}">Gaming keyboard</a></h5>
                                    <img class="click-product" src="{{ asset('assets/images/banphim-background.png') }}" alt="">
                                </div>
                                <div class="wrappers-product">
                                    <h5><a href="{{ route('product.monitor') }}">Gaming monitor</a></h5>
                                    <img class="click-product" src="{{ asset('assets/images/manhinh-background.png') }}" alt="">
                                </div>
                                <div class="wrappers-product">
                                    <h5><a href="{{ route('product.headset') }}">Gaming headset</a></h5>
                                    <img class="click-product" src="{{ asset('assets/images/tainghe-3.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="{{ route('account') }}">Checkout</a></li>
                    <li><a href="#"><i class="fa-solid fa-cart-shopping"></i> <span class="qty-cart">0</span></a>
                    </li>
                    <li><a href="#">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    User
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-circle-info"></i>
                                            User</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-truck-fast"></i>
                                            Order</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="fa-solid fa-right-from-bracket"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </a></li>
                </ul>

            </nav>
            <div class="wrapper_cart_menu">
                <i onclick="menutoggle()" class="fa-solid menu-icon fa-bars"></i>
            </div>
            {{-- <div class="row_header">
                <div class="col-2">
                    <h1>Give Your Workout <br> A New Style!</h1>
                    <p>Success isn't always about greatness. It's about consistency.
                        Consistent <br> hard work gains success. Greatness will come.
                    </p>
                    <a href="#" class="btn_header">Explore Now &#8594;</a>
                </div>
                <div class="col-2 mrleft">
                    <img class="messi" src="{{asset('assets/images/messi_home.png')}}" alt="messi">
                </div>
            </div> --}}
        </div>

    </header>
</body>
