@extends('client.layout.layout')
@section('title')
    Products
@endsection
@section('content')
    <section>
        <div class="container_home">
            <div class="row_home">
                <div class="col-2">
                    <h1 class="logitech">Hear like a PRO, <br> sound like a PRO</h1>
                    <p class="logitech-desc"> BACK TO ALL PRESS RELEASES
                        SOUND LIKE A PRO AND HEAR LIKE ONE WITH THE <br> LOGITECH G PRO X GAMING HEADSET WITH BLUE VO!CE
                        TECHNOLOGY
                    </p>
                    <a href="#" class="btn_header">Explore Now &#8594;</a>
                </div>
                <div class="col-2 mrleft">
                    <img class="earphone" src="{{ asset('assets/images/tainghe-3.png') }}" alt="earphone">
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
            <h2 class="title_home">Gaming Headset</h2>
            <div class="row_home">
                <div class="col-4">
                    <a href="{{ route('product.detail') }}"><img class="img_product"
                            src="{{ asset('assets/images/chuot-1.jpg') }}" alt="product"></a>
                    <a href="{{ route('product.detail') }}">
                        <h4>Blue Printed T-shirt</h4>
                    </a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                {{--  --}}
                <div class="col-4">
                    <a href="{{ route('product.detail') }}"><img src="{{ asset('assets/images/chuot-2.jpg') }}"
                            alt="product"></a>
                    <a href="{{ route('product.detail') }}">
                        <h4>Blue Printed T-shirt</h4>
                    </a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="{{ route('product.detail') }}"><img src="{{ asset('assets/images/chuot-3.png') }}"
                            alt="product"></a>
                    <a href="{{ route('product.detail') }}">
                        <h4>Blue Printed T-shirt</h4>
                    </a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="{{ route('product.detail') }}"><img src="{{ asset('assets/images/chuot-4.jpg') }}"
                            alt="product"></a>
                    <a href="{{ route('product.detail') }}">
                        <h4>Blue Printed T-shirt</h4>
                    </a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="{{ route('product.detail') }}"><img src="{{ asset('assets/images/chuot-5.jpg') }}"
                            alt="product"></a>
                    <a href="{{ route('product.detail') }}">
                        <h4>Blue Printed T-shirt</h4>
                    </a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                {{--  --}}
                <div class="col-4">
                    <a href="{{ route('product.detail') }}"><img class="img_product"
                            src="{{ asset('assets/images/chuot-1.jpg') }}" alt="product"></a>
                    <a href="{{ route('product.detail') }}">
                        <h4>Blue Printed T-shirt</h4>
                    </a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                {{--  --}}
                <div class="col-4">
                    <a href="{{ route('product.detail') }}"><img src="{{ asset('assets/images/chuot-2.jpg') }}"
                            alt="product"></a>
                    <a href="{{ route('product.detail') }}">
                        <h4>Blue Printed T-shirt</h4>
                    </a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="{{ route('product.detail') }}"><img src="{{ asset('assets/images/chuot-3.png') }}"
                            alt="product"></a>
                    <a href="{{ route('product.detail') }}">
                        <h4>Blue Printed T-shirt</h4>
                    </a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="{{ route('product.detail') }}"><img src="{{ asset('assets/images/chuot-4.jpg') }}"
                            alt="product"></a>
                    <a href="{{ route('product.detail') }}">
                        <h4>Blue Printed T-shirt</h4>
                    </a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="{{ route('product.detail') }}"><img src="{{ asset('assets/images/chuot-5.jpg') }}"
                            alt="product"></a>
                    <a href="{{ route('product.detail') }}">
                        <h4>Blue Printed T-shirt</h4>
                    </a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
            </div>
        </div>
    </div>
@endsection
