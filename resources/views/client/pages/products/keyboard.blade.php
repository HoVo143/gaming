@extends('client.layout.layout')
@section('title')
    Products
@endsection
@section('content')
    <section>
        <div class="container_home">
            <div class="row_home">
                <div class="col-2">
                    <h1 class="logitech">Logitech G-Pro RGB</h1>
                    <p class="logitech-desc"> The most advanced mechanical switch from Logitech. Neat, modern, 
                        <br> durable and convenient. Detachable Micro USB cable. Receive command 26 key presses 
                         at once. RGB LEDs 16.8 million colors. More than 300 different Led setups.
                          Macros and functions set up are very simple
                    </p>
                    <a href="#" class="btn_header">Explore Now &#8594;</a>
                </div>
                <div class="col-2 mrleft">
                    <img class="earphone" src="{{ asset('assets/images/banphim-background.png') }}" alt="earphone">
                </div>
            </div>
        </div>
    </section>
    <div class="small_container_product">
        <div class="small_container_left">
            <div class="wrapper_search">
                <form class="example" action="" style="margin:auto;max-width:300px">
                    <input type="text" placeholder="Search.." name="search2">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="wrappers_brands">
                <h5>Brands</h5>
                <div class="brands">
                    <div class="wrapper">
                        <input type="checkbox" class="brand" id="asus" name="asus" value="Bike">
                        <label for="asus"> Asus</label><br>
                    </div>
                    <div class="wrapper">
                        <input type="checkbox" class="brand" id="msi" name="msi" value="Car">
                        <label for="msi"> Msi</label><br>
                    </div>
                    <div class="wrapper">
                        <input type="checkbox" class="brand" id="logitech" name="logitech" value="Boat">
                        <label for="logitech"> Logitech</label><br>
                    </div>
                    <div class="wrapper">
                        <input type="checkbox" class="brand" id="lazer" name="lazer" value="Boat">
                        <label for="lazer"> Lazer</label><br>
                    </div>
                </div>
            </div>
            <div class="wrappers_prices">
                <h5>Price</h5>
                <div class="brands">
                    <div class="wrapper">
                        <input type="checkbox" class="price" id="price" name="price" value="Bike">
                        <label for="price">over $1.000.00</label><br>
                    </div>
                    <div class="wrapper">
                        <input type="checkbox" class="price1" id="price1" name="price1" value="Car">
                        <label for="price1">from $200 to $1.000.00</label><br>
                    </div>
                    <div class="wrapper">
                        <input type="checkbox" class="price2" id="price2" name="price2" value="Boat">
                        <label for="price2">less than $200</label><br>
                    </div>

                </div>
            </div>
        </div>
        <div class="small_container_right">
            {{-- Hot Promotion --}}
            <h2 class="title_home">Gaming Keyboard</h2>
            <div class="row_home">
                @foreach ($product as $item)
                    <div class="col-4">
                        <a href="{{ route('product.detail') }}"><img class="img_product"
                            src="{{ asset('assets/images/banphim-background.png') }}" alt="product"></a>
                        <a href="{{ route('product.detail') }}">
                            <h4>{{$item->name}}</h4>
                        </a>
                        <span class="old-prices">${{ number_format($item->discount_price, 2) }}</span>
                        <p>${{ number_format($item->price, 2) }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
