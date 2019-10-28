<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Panel | @yield('pageTitle')</title>

    <!-- Scripts -->
    <script src="{{ mix('backend/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Caslon+Text:700|Orienta&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('backend/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <aside>@include('backend.components.navigation')</aside>
        <main>@yield('main')</main>
    </div>
</body>
</html>
