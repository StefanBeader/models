<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'D Model Management') . " | Pending Models Request" }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Caslon+Text:700|Orienta&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('frontend/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <main>@yield('main')</main>
</body>
</html>
