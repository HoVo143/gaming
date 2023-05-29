@extends('client.layout.layout')
@section('title')
    Login
@endsection

@section('content')
    <div class="account-page">
        <div class="container_login">
            <div class="row_login">
                <div class="col-2">
                    <img class="earphone" src="{{asset('assets/images/tainghe-3.png')}}" alt="earphone">
                </div>
                <div class="col-2">
                   <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>
                        {{-- login --}}
                        <form action="" id="LoginForm">
                            <input type="text" class="login" name="name" id="" placeholder="Username">
                            <input type="password" class="login" name="password" id="">
                            <button type="submit" class="btn-login">Login</button>
                            <a href="#">Forgot password</a>
                            <div class="col">
                                <a href="#" class="fb btn_social">
                                    <i class="fa-brands fa-facebook-f"></i> Login with Facebook
                                 </a>
                                <a href="#" class="google btn_social">
                                    <i class="fa-brands fa-google"></i> Login with Google+
                                </a>
                              </div>
                        </form>
                        {{-- register --}}
                        <form action="" id="RegisterForm">
                            <input type="text" class="register" name="name" id="" placeholder="Name">
                            <input type="email" class="register" name="email" id="" placeholder="Email">
                            <input type="text" class="register" name="phone" id="" placeholder="Phone number">
                            <input type="password" class="register" name="password" id="" placeholder="Password">
                            <input type="password" class="register" name="confirmpassword" id="" placeholder="Confirm password">
                            <button type="submit" class="btn-login">Register</button>
                        </form>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection