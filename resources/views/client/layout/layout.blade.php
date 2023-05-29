<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@100;300&family=Dancing+Script:wght@700&family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,600&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/product-detail.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/account.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login-register.css') }}">



    <title>@yield('title')</title>
</head>

<body>
    {{-- ----------- HEADER ----------- --}}
    @include('client.block.header')
    {{-- ----------- END HEADER ----------- --}}

    {{-- ----------- MAIN ----------- --}}
    @yield('content')
    {{-- -----------END MAIN ----------- --}}

    {{-- ----------- FOOTER ----------- --}}
    @include('client.block.footer')
    {{-- -----------END FOOTER ----------- --}}

</body>

</html>
<script src="{{ asset('assets/js/menu_header.js')}}"></script>
<script src="{{ asset('assets/js/small-img.js')}}"></script>
<script src="{{ asset('assets/js/product-detail.js')}}"></script>
<script src="{{ asset('assets/js/login-register.js')}}"></script>



<script>
    mix.sass('public/assets/scss/app.scss');
</script>
