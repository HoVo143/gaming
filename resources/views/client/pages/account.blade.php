@extends('client.layout.layout')
@section('title')
    Account
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
    <div class="small_container_account">
        <div class="row_account">
            <div class="col-75">
                <div class="container_account">
                    <form action="">
                        <div class="row_account">
                            <div class="col-50">
                                <h3>Billing Address</h3>
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input class="account" type="text" id="fname" name="firstname" value="">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input class="account" type="text" id="email" name="email" value="">
                                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                <input class="account" type="text" id="adr" name="address"
                                    placeholder="542 W. 15th Street">
                                <label for="city"><i class="fa fa-institution"></i> City</label>
                                <input class="account" type="text" id="city" name="city" placeholder="New York">

                                <div class="payments">
                                    <label for="payment">Payment: </label>
                                    <label for="vnpay"><input class="account" type="checkbox" id="vnpay"
                                            name="cardname"> VnPay</label>
                                    <label for="card"><input class="account" type="checkbox" id="card"
                                            name="cardnumber"> Card</label>
                                </div>
                                <input type="submit" value="Continue to checkout" class="btn_account">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-25">
                <div class="container_account">
                    <h4>Cart: <span class=""><b>5</b></span>
                    </h4>
                    <div class="wrappers_account">
                        <p><a href="#">Product 1 <span class="qty_account">X1</span></a> <span
                                class="price_account">$1.500.00</span></p>
                        <p><a href="#">Product 2 <span class="qty_account">X1</span></a> <span
                                class="price_account">$500</span></p>
                        <p><a href="#">Product 3 <span class="qty_account">X1</span></a> <span
                                class="price_account">$800</span></p>
                        <p><a href="#">Product 4 <span class="qty_account">X2</span></a> <span
                                class="price_account">$2.000.00</span></p>
                    </div>
                    <hr>
                    <p class="total_account">Total: <span class="price_account">$4.800.00</span></p>
                </div>
            </div>
            {{--  --}}
        </div>
    </div>
@endsection
