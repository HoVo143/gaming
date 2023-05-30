@extends('client.layout.layout')
@section('title')
    Home
@endsection

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <title>Document</title> --}}
    </head>

    <body>

        <section>
            <div class="container_home">
                <div class="row_home">
                    <div class="col-2">
                        <h1 class="logitech">Hear like a PRO, <br> sound like a PRO</h1>
                        <p class="logitech-desc"> BACK TO ALL PRESS RELEASES
                            SOUND LIKE A PRO AND HEAR LIKE ONE WITH THE <br> LOGITECH G PRO X GAMING HEADSET WITH BLUE VO!CE TECHNOLOGY
                        </p>
                        <a href="#" class="btn_header">Explore Now &#8594;</a>
                    </div>
                    <div class="col-2 mrleft">
                        <img class="earphone" src="{{asset('assets/images/tainghe-3.png')}}" alt="earphone">
                    </div>
                </div>
            </div>
        </section>
        
        {{-- featured categories --}}
        <div class="categories_home">
            <div class="small_container_home">
                <div class="row_home">
                    <div class="col-3">
                        <img src="{{ asset('assets/images/tainghe-1.jpeg') }}" alt="ctg">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('assets/images/tainghe-5.jpg') }}" alt="ctg">
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('assets/images/tainghe-6.jpg') }}" alt="ctg">
                    </div>
                    {{-- <div class="col-3">
                    <img src="{{asset('assets/images/category-4.jpg')}}" alt="ctg">
                </div> --}}
                </div>
            </div>
        </div>
        {{-- end featured categories --}}

        {{-- featured products --}}
        <div class="small_container_home">
            {{-- Hot Promotion Mouse --}}
            <h2 class="title_home">Hot Promotion Mouse</h2>
            <div class="row_home">
                @foreach ($products as $product)
                    <div class="col-4">
                        <a href="{{route('product.detail')}}">
                            <img class="img_product" src="{{ $product->image_url }}" alt="product">
                        </a>
                        <a href="{{route('product.detail')}}"><h4>{{ $product->name }}</h4></a>
                        <span class="old-prices">${{ number_format($product->discount_price, 2) }}</span>
                        <p>${{ number_format($product->price, 2) }}</p>
                    </div>
                @endforeach
            </div>

            {{-- LAPTOP GAMING --}}
            <h2 class="title_home">LAPTOP GAMING</h2>
            <div class="row_home">
                <div class="col-4">
                    <a href="{{route('product.detail')}}"><img src="{{ asset('assets/images/laptop-1.webp') }}" alt="product"></a>
                    <a href="{{route('product.detail')}}"><h4>Blue Printed T-shirt</h4></a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                {{--  --}}
                <div class="col-4">
                    <a href="{{route('product.detail')}}"><img src="{{ asset('assets/images/laptop-2.jpg') }}" alt="product"></a>
                    <a href="{{route('product.detail')}}"><h4>Blue Printed T-shirt</h4></a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="{{route('product.detail')}}"><img src="{{ asset('assets/images/product-1.jpg') }}" alt="product"></a>
                    <a href="{{route('product.detail')}}"><h4>Blue Printed T-shirt</h4></a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="{{route('product.detail')}}"><img src="{{ asset('assets/images/product-1.jpg') }}" alt="product"></a>
                    <a href="{{route('product.detail')}}"><h4>Blue Printed T-shirt</h4></a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>

            </div>

            {{-- Hot Promotion screen --}}
            <h2 class="title_home">Hot Promotion screen</h2>
            <div class="row_home">
                <div class="col-4">
                    <a href="{{route('product.detail')}}"><img class="img_product" src="{{ asset('assets/images/mahinh-1.webp') }}" alt="product"></a>
                    <a href="{{route('product.detail')}}"><h4>Blue Printed T-shirt</h4></a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                {{--  --}}
                <div class="col-4">
                    <a href="{{route('product.detail')}}"><img src="{{ asset('assets/images/manhinh-1.jpg') }}" alt="product"></a>
                    <a href="{{route('product.detail')}}"><h4>Blue Printed T-shirt</h4></a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="{{route('product.detail')}}"><img src="{{ asset('assets/images/chuot-3.png') }}" alt="product"></a>
                    <a href="{{route('product.detail')}}"><h4>Blue Printed T-shirt</h4></a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="{{route('product.detail')}}"><img src="{{ asset('assets/images/chuot-4.jpg') }}" alt="product"></a>
                    <a href="{{route('product.detail')}}"><h4>Blue Printed T-shirt</h4></a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
                <div class="col-4">
                    <a href="{{route('product.detail')}}"><img src="{{ asset('assets/images/chuot-5.jpg') }}" alt="product"></a>
                    <a href="{{route('product.detail')}}"><h4>Blue Printed T-shirt</h4></a>
                    <span class="old-prices">$40.00</span>
                    <p>$50.00</p>
                </div>
            </div>

        </div>
        {{-- end featured products --}}

        {{-- offer --}}
        <div class="offer_home">
            <div class="small_container_home">
                <div class="row_home">
                    <div class="col-2">
                        <img class="offer_img" src="{{ asset('assets/images/gaming-msi.png') }}" alt="">
                    </div>
                    <div class="col-2 desc">
                        <h1 class="logitech">Ahead <br> Of The Curve</h1>
                        <p class="logitech-desc">Memimpin tren masa kini. Kami berusaha keras untuk merancang solusi paling premium untuk Anda. <br>
                             Hadir dengan performa ekstrem, teknologi inovatif, desain estetis yang mewah, dan pengalaman premium, 
                            <br> laptop gaming terbaru dengan prosesor hingga Intel® Core™ i9-12900HX adalah era baru untuk industri gaming.
                        </p>
                        <a href="" class="btn_header">Buy Now &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- end offer --}}

        {{-- testimonia --}}
        <div class="testimonial_home">
            <div class="small_container_home">
                <div class="row_home">
                    <div class="col-3">
                        <i class="fa-solid fa-quote-left"></i>
                        <p>Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.
                        </p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <img class="offer_img" src="{{ asset('assets/images/user-1.jpg') }}" alt="">
                        <h3>Sean Parker</h3>
                    </div>
                    {{--  --}}
                    <div class="col-3">
                        <i class="fa-solid fa-quote-left"></i>
                        <p>Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.
                        </p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <img class="offer_img" src="{{ asset('assets/images/user-1.jpg') }}" alt="">
                        <h3>Sean Parker</h3>
                    </div>
                    {{--  --}}
                    <div class="col-3">
                        <i class="fa-solid fa-quote-left"></i>
                        <p>Lorem Ipsum is simply dummy text of the printing
                            and typesetting industry.
                        </p>
                        <div class="rating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <img class="offer_img" src="{{ asset('assets/images/user-1.jpg') }}" alt="">
                        <h3>Sean Parker</h3>
                    </div>
                </div>
            </div>
        </div>
        {{-- end testimonia --}}

        {{-- brands --}}
        <div class="brands_home">
            <div class="small_container_home">
                <div class="row_home">
                    {{-- logo --}}
                    <div class="col-5">
                        <img src="{{ asset('assets/images/logo-1.jpg') }}" alt="">
                    </div>
                    <div class="col-5">
                        <img src="{{ asset('assets/images/logo-2.jpg') }}" alt="">
                    </div>
                    <div class="col-5">
                        <img src="{{ asset('assets/images/logo-3.png') }}" alt="">
                    </div>
                    <div class="col-5">
                        <img src="{{ asset('assets/images/logo-4.jpg') }}" alt="">
                    </div>
                    <div class="col-5">
                        <img src="{{ asset('assets/images/logo-5.webp') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        {{-- end brands --}}

    </body>

    </html>
@endsection
