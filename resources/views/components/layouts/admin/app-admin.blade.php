<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="dark:bg-gray-950 bg-white text-gray-700 max-w-7l mx-auto dark:text-gray-200 mb-40">
    <x-layouts.admin.nav/>
    <div x-data="{ open: true }" class="dark:bg-gray-950   bg-gray-100 text-gray-700   dark:text-gray-200 mb-40 mt-">
        <aside :class="open ? 'translate-x-0' : '-translate-x-60'"
            class="w-60 dark:bg-gray-900 bg-gray-100  fixed top-12  transform ease-in-out duration-1000 rounded-r-xl  z-50 h-screen px-2">
            <div
                class="   flex items-center justify-between pl-4 rounded-full w-full translate-x-14 bg-gray-600 border-2 dark:border-blue-500 border-purple-700">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="white" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                    </svg>

                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="white" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>

                </div>
                <div>
                    <div class="font-bold text-sm uppercase italic "><a href="#"><span
                                class="font-bold bg-gradient-to-r  from-blue-700 via-sky-400 to-blue-500   transition-all duration-300 ease-in-out bg-clip-text text-transparent ">Dashboard</span>
                        
                    </div>
                </div>
                <button x-on:click="open=!open" x-bind:class=" open ? ' bg-blue-400' : ''"
                    class="rounded-full transition-all duration-1000 ease-in-out border-2 border-white px-4 py-2">
                    <svg x-bind:class=" open ? 'rotate-45 ' : ''" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="white"
                        class="w-4 h-4 rounded-full transition-all duration-1000 ease-in-out ">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                    </svg>
                </button>
            </div>
            <div class="nav-items  pl-4 pt-4 space-y-2 overflow-y-auto h-screen">
                <h2 class="text-gray-950 dark:text-gray-100 font-bold italic mb-4">Resources:</h2>
                <div class="content ml-2 space-y-4 overflow-y-auto">

                    <div class="resource " x-data="{ show: true }">
                        <div x-on:click="show=!show" class="flex items-center justify-between   hover:text-gray-300">
                            <h3
                                class="font-semibold text-gray-100 italic bg-gradient-to-r from-blue-700 via-sky-400 to-blue-500 hover:from-blue-800 hover:via-sky-400 hover:to-blue-600  transition-all duration-300 ease-in-out bg-clip-text text-transparent">
                                data</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="blue" class="w-4 h-4 text-white hover:text-gray-100">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>

                        </div>
                        <ul x-show="show" class="ml-2 space-y-4 py-2  duration-700 transition-all divide-blue-800">
                            <li><a href="#"
                                    class=" rounded-xl px-4 py-2 bg-gradient-to-r  from-red-300 via-pink-400 to-red-500 hover:from-red-800 hover:via-pink-400 hover:to-red-600  transition-all duration-300 ease-in-out bg-clip-text text-transparent "><small
                                        class="blue-text-gradient font-bold mr-2 text-start ml-2">//</small><span>Home</span></a>
                            </li>
                            <li><a href="#" class=" rounded-xl px-4 py-2 hover:text-gray-400 "><small
                                        class="blue-text-gradient font-bold mr-2 text-start ml-2">//</small><span>Analytics</span></a>
                            </li>
                            <li><a href="#" class=" rounded-xl px-4 py-2 hover:text-gray-400 "><small
                                        class="blue-text-gradient font-bold mr-2 text-start ml-2">//</small><span>Reports</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="resource " x-data="{ show: true }">
                        <div x-on:click="show=!show" class="flex items-center justify-between hover:text-gray-300">
                            <h3
                                class="font-semibold text-gray-100 italic bg-gradient-to-r  from-blue-700 via-sky-400 to-blue-500 hover:from-blue-800 hover:via-sky-400 hover:to-blue-600  transition-all duration-300 ease-in-out bg-clip-text text-transparent">
                                Blog</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="blue" class="w-4 h-4 text-white hover:text-gray-100">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>

                        </div>
                        <ul x-show="show" class="ml-2 space-y-4 py-2   divide-blue-800">
                            <li><a href="{{ route('blog.admin.index') }}" class=" rounded-xl px-4 py-2 hover:text-gray-400 "><small
                                        class="blue-text-gradient font-bold mr-2 text-start ml-2">//</small><span>Posts</span></a>
                            </li>
                            <li><a href="#" class=" rounded-xl px-4 py-2 hover:text-gray-400 "><small
                                        class="blue-text-gradient font-bold mr-2 text-start ml-2">//</small><span>Categories</span></a>
                            </li>
                            <li><a href="#" class=" rounded-xl px-4 py-2 hover:text-gray-400 "><small
                                        class="blue-text-gradient font-bold mr-2 text-start ml-2">//</small><span>Authors</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="resource" x-data="{ show: true }">
                        <div x-on:click="show=!show" class="flex items-center justify-between ">
                            <h3
                                class="font-semibold text-gray-100 italic bg-gradient-to-r  from-blue-700 via-sky-400 to-blue-500 hover:from-blue-800 hover:via-sky-400 hover:to-blue-600  transition-all duration-300 ease-in-out bg-clip-text text-transparent">
                                Shop</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="blue" class="w-4 h-4 text-white hover:text-gray-100 ">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>

                        </div>
                        <ul x-show="show" class="ml-2 space-y-4 py-2">
                            <li><a href="#" class=" rounded-xl px-4 py-2 hover:text-gray-400 "><small
                                        class="blue-text-gradient font-bold mr-2 text-start ml-2">//</small><span>Products</span></a>
                            </li>
                            <li><a href="#" class=" rounded-xl px-4 py-2 hover:text-gray-400 "><small
                                        class="blue-text-gradient font-bold mr-2 text-start ml-2">//</small><span>Orders</span></a>
                            </li>
                            <li><a href="#" class=" rounded-xl px-4 py-2 hover:text-gray-400 "><small
                                        class="blue-text-gradient font-bold mr-2 text-start ml-2">//</small><span>Customers</span></a>
                            </li>
                            <li><a href="#" class=" rounded-xl px-4 py-2 hover:text-gray-400 "><small
                                        class="blue-text-gradient font-bold mr-2 text-start ml-2">//</small><span>Categories</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </aside>
        <main class="px-12">
            {{ $slot }}
        </main>
    </div>
    <livewire:scripts />
</body>

</html>
