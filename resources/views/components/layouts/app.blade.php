<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
</head>

<body class="dark:bg-gray-950  bg-white text-gray-700  mx-10 dark:text-gray-200 mb-40">
    <x-nav />
    {{ $slot }}
    <div>
        <x-footer />
    </div>
    @livewireScripts
</body>

</html>
