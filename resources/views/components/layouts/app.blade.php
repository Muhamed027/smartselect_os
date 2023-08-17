<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="dark:bg-gray-950  bg-white text-gray-700 max-w-7xl mx-auto dark:text-gray-200 mb-40">
    <x-nav />
    {{ $slot }}
    <div>
        <x-footer />
    </div>
</body>

</html>
