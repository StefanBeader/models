<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'D Model Management') . " | " }}@yield('pageTitle')</title>

    <meta name="description" content="@yield('pageDescription')">

    <!-- Scripts -->
    <script src="{{ mix('frontend/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Caslon+Text:700|Orienta&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('frontend/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header>@include('frontend.components.navigation')</header>
        <main>@yield('main')</main>
        @if(!Route::is('home'))
            <footer>@include('frontend.components.footer')</footer>
        @endif
    </div>
</body>
</html>
