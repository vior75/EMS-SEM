<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>e-Munakahat</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
        crossorigin="anonymous">

    <!-- Custom Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
</head>

<body>
    <header class="container my-3">
        <a class="nav-link" href="{{ route('login') }}">
            <img src="{{ asset('img/Header.png') }}" width="100%" style="align-content: center;" alt="Header EMS">
        </a>
    </header>

    <main class="py-4">
        @yield('content')
    </main>
</body>

</html>
