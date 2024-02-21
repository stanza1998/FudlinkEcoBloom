<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">
        {{ $style }}


        <link rel="shortcut icon" href="{{ asset('img/logo-3.ico') }}" />
        <title>ECOBLOOM</title>

        <script src="{{ asset('js/utilities.js') }}" defer></script>
        {{ $js ?? '' }}
    </head>

    <body class="m-0">

        @include('components.header')

        {{-- main contents --}}
        {{ $slot }}
        {{-- main contents --}}
        <footer style="background: black">
            <div class="footer-links _container flex_align">
                @each('components.temp', range(1, 4), 'link')
            </div>
            <div class="site-info">
                <a class="logo-link d-b" href="#">
                    <img class="d-b" src="{{ asset('img/logo-1.png') }}" alt="user">
                </a>
                <p style="color:grey">Discover sustainable comfort and style with our eco-friendly home goods
                    collection.</p>
            </div>
        </footer>
    </body>

</html>
