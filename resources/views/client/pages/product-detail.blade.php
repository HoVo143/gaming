@extends('client.layout.layout')
@section('title')
    Products
@endsection

@section('content')
    <div class="small_container_home single-product">
        <div class="row_home">
            <div class="col-2 img-product">
                <img id="productsImg" class="productsImg" src="{{ asset('assets/images/laptop-1.webp') }}" alt="product">
                {{-- <div class="small-img-row">
                    <div class="small-img-col">
                        <img class="small-img" src="{{ asset('assets/images/laptop-1.webp') }}" alt="">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img" src="{{ asset('assets/images/laptop-1.webp') }}" alt="">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img" src="{{ asset('assets/images/laptop-1.webp') }}" alt="">
                    </div>
                    <div class="small-img-col">
                        <img class="small-img" src="{{ asset('assets/images/laptop-1.webp') }}" alt="">
                    </div>
                </div> --}}
            </div>
            <div class="col-2">
                {{-- <p>Home / T-shirt</p> --}}
                <h1 class="product-name">Laptop gaming ASUS TUF Gaming F15 FX507ZV4 LP041W</h1>
                <ul class="desc-product">
                    <li><i class="fa-solid fa-check"></i> Genuine 24 months warranty.</li>
                    <li><i class="fa-solid fa-check"></i> Support renewal for 7 days.</li>
                    <li><i class="fa-solid fa-check"></i> Windows copyright integrated.</li>
                    <li><i class="fa-solid fa-check"></i> Free shipping nationwide.</li>
                </ul>
                <div class="price">

                    <h3>Old price: <span class="old-price">$2.000.00</span></h3>
                    <h3>Promotional price: <span>$1.800.00</span></h3>
                </div>
                <a href="#" class="btn_header">Add To Cart</a>
            </div>
        </div>
    </div>
    {{--  --}}
    <div class="small_container_home parameter1">
        <div class="wrapper_paremeter">
            <h3>Product Description:</h3>
            <h1 class="product-name">Detailed review of ASUS TUF Gaming F15 FX507ZV4-LP041W gaming laptop:</h1>
            <p class="parameter-desc">ASUS TUF Gaming F15 FX507ZV4-LP041W gaming laptop shows its power through the powerful
                Intel Core i7
                Gen12 chip. Stylish design bold gaming with a subtle way. Perfection from appearance to internal
                configuration enhances the gaming experience of every gamer. Promises ASUS TUF Gaming F15 will storm
                the gaming laptop market in 2023.
            </p>
            <div class="parameter-img">
                <img src="{{asset('assets/images/laptop-asus.png')}}" alt="">
            </div>
        </div>
        {{--  --}}
        <div class="wrapper_paremeter">
            <h1 class="product-name">Outstanding power, challenging all games:</h1>
            <p class="parameter-desc">Reliable performance on the ASUS TUF Gaming F15 FX507ZV4-LP041W lets you seamlessly
                game, stream,
                and multi-task. The high-speed Intel i7 CPU can enable multiple threads for multitasking.
                Combined with the RTX 4060 video card, meet the high frame rates of many popular titles.
                Speed up application loading with a 512GB NVMe PCIe® SSD, and easily upgrade storage with
                a second SSD.
            </p>
            <div class="parameter-img">
                <img src="{{asset('assets/images/laptop-asus-1.png')}}" alt="">
            </div>
        </div>
        {{--  --}}
        <div class="wrapper_paremeter">
            <h1 class="product-name">Impressive battery life:</h1>
            <p class="parameter-desc">With a smaller and lighter chassis than the previous generation, 
                the ASUS TUF Gaming F15 delivers larger battery life and longer battery life. This is an 
                ASUS gaming laptop equipped with a high-performance, 90WHr Intel processor. Faster and longer 
                battery life, you can use this laptop on your own on the go.
            </p>
            <div class="parameter-img">
                <img src="{{asset('assets/images/latop-asus-2.png')}}" alt="">
            </div>
        </div>
    </div>
    {{--  --}}
    <div class="small_container_home parameter">
        <h1 class="product-name">SPECIFICATIONS: </h1>

        <button class="accordion">CPU</button>
        <div class="panel">
            <p>Intel® Core™ i7-12700H Processor 2.3 GHz (24M Cache, up to 4.7 GHz, 14 cores: 6 P-cores and 8 E-cores)</p>
        </div>

        <button class="accordion">RAM</button>
        <div class="panel">
            <p> 8GB DDR4 3200MHz (2x SO-DIMM socket, up to 32GB SDRAM)</p>
        </div>

        <button class="accordion">Hard Drive</button>
        <div class="panel">
            <p>512GB PCIe® 4.0 NVMe™ M.2 SSD (Còn trống 1 khe SSD M.2 PCIE)</p>
        </div>

        <button class="accordion">Graphics card</button>
        <div class="panel">
            <p>NVIDIA® GeForce RTX™ 4060 Laptop GPU 8GB GDDR6 , 2420MHz* at 140W (2370MHz Boost Clock+50MHz OC, 115W+25W
                Dynamic Boost) + Intel® Iris Xe Graphics, MUX Switch + NVIDIA® Advanced Optimus</p>
        </div>

        <button class="accordion">Screen</button>
        <div class="panel">
            <p>15.6 inch FHD (1920 x 1080) IPS, 144Hz, Wide View, 250nits, Narrow Bezel, Anti-Glare with 72% NTSC, 100% sRGB
            </p>
        </div>

        <button class="accordion">The web of communication</button>
        <div class="panel">
            <p>
            <ul>
                <li>1x Thunderbolt 4 support DisplayPort</li>
                <li>1x USB 3.2 Gen 2 Type-C support DisplayPort™ / G-SYNC</li>
                <li>2x USB 3.2 Gen 1 Type-A</li>
                <li>1x RJ-45 LAN</li>
                <li>1x HDMI 2.1 FRL</li>
                <li>1x COMBO audio jack</li>
            </ul>
            </p>
        </div>

        {{-- <button class="accordion">Audio</button>
        <div class="panel">
            <p>Dolby Atmos</p>
        </div> --}}

        <button class="accordion">Keyboard</button>
        <div class="panel">
            <p>Backlit Chiclet Keyboard 1-Zone RGB</p>
        </div>

        <button class="accordion">LAN</button>
        <div class="panel">
            <p>10/100/1000 Mbps</p>
        </div>

        {{-- <button class="accordion">WIFI</button>
        <div class="panel">
            <p> 802.11AX (2X2)</p>
        </div> --}}

        {{-- <button class="accordion">Bluetooth</button>
        <div class="panel">
            <p>v5.2</p>
        </div> --}}
        {{--  --}}
        <button class="accordion">Webcam</button>
        <div class="panel">
            <p>HD 720p</p>
        </div>

        {{-- <button class="accordion">Operating system</button>
        <div class="panel">
            <p>Windows 11 Home</p>
        </div> --}}

        <button class="accordion">Pin</button>
        <div class="panel">
            <p>90WHrs, 4S1P, 4-cell Li-ion</p>
        </div>

        <button class="accordion">Weight</button>
        <div class="panel">
            <p>2.2 kg</p>
        </div>

        {{-- <button class="accordion">Color</button>
        <div class="panel">
            <p>Jaeger Gray</p>
        </div> --}}

        {{-- <button class="accordion">Size</button>
        <div class="panel">
            <p>35.4 x 25.1 x 2.24 ~ 2.49 cm</p>
        </div> --}}
    </div>
@endsection
