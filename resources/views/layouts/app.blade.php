<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('frontend/css/bootstrap5.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/css/custom.css')}}" rel="stylesheet">

</head>
<body>
    <div id="app">

@include('layouts.inc.front-navbar')
        <main class="py-4">
            @yield('content')
        </main>
        {{-- @include('layouts.inc.front-footer') --}}
    </div>

     <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <script src="{{ asset('frontend/js/bootstrap5.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery-3.6.3.min.js')}}"></script>
</body>
</html>
