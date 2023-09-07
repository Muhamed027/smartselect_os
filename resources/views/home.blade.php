<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
</head>

<body class="dark:bg-gray-950   text-gray-700  mx-10 dark:text-gray-200 mb-40">

    <x-nav class="border-none rounded-none" />
    <main class="mt-8  ">
        {{-- <div class="max-w-3xl mx-auto flex  items-center justify-center">
            <div class="relative w-full rounded-xl bg-gray-50 dark:bg-gray-900 border  border-gray-400 dark:border-blue-800">
                <input x-on:click="$dispatch('open-search-modal')" type="search"
                    class="dark:bg-gray-900 text-center bg-indigo-50  w-full dark:placeholder-gray-700 text-opacity-40 flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold rounded-xl"
                    placeholder="Quick Search / press ctrl+K">
                <x-icons.search-icon />
            </div>
        </div> --}}
        <div class="max-w-3xl text-center items-center justify-center  mx-auto">
            <h2 class="text-4xl  blue-text-gradient font-extrabold">Find the Best Deals Backed by Expertise .</h2>
            <h3 class="max-w-2xl red-text-gradient font-bold  text-3xl text-center ">Your Guide to smart Choices.</h3>
        </div>
        {{-- <div class="w-1/3">
            <h2 class="text-center px-4 pb-2 font-bold ">today product : </h2>
            <div>
                <img src="{{ asset('images/illustration-1.png') }}" class="rounded-xl" alt="">
            </div>
        </div> --}}
    </main>
    <div>
        <x-footer />
    </div>
    @livewireScripts
</body>

</html>
