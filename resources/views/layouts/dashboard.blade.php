<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lara POS</title>

    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/nav_style.css') }}"> --}}
</head>
<body style="overflow: auto;">
    {{-- @include('layouts.navbar') --}}

    <section class="home-section">
        {{-- <div class="home-content">
        <img src="{{ asset('images/nav_icons/menu.png') }}" alt="nav_icon" class="menu_icon">
        <span class="text">Synnex IT Solution</span>
        </div> --}}

        @yield('content')
    </section>

    {{-- <script src="{{ asset("js/nav_script.js") }}"></script> --}}
</body>
</html>
