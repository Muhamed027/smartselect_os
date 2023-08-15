<header
    class="flex sticky z-30  top-0 backdrop-blur-lg   justify-between border-b border-blue-950 items-center w-full  px-4 py-2 text-md rounded-b-xl font-semibold">
    <div class="flex items-center space-x-4">
        <div class="flex relative space-x-32 items-center">
            <div class="font-semibold ">
                <div class="font-bold text-lg uppercase italic"><a href="{{ route('home') }}"><span
                            class="font-bold text-blue-600 ">Savvy</span><span class="text-red-600">Selection</span></a>
                </div>

            </div>
        </div>
        <div class="hidden lg:flex  items-center space-x-12">
            <ul class="flex space-x-4">
                <a href="{{ route('home') }}" class="px-4 py-1" >Home</a>
                <a href="{{ route('store.index') }}" class="dark:bg-gray-900 bg-gray-200 rounded-lg px-4 py-1"
                    >products</a>
                <a href="{{ route('blog.index') }}" class="px-4 py-1 rounded-lg" >blog</a>
            </ul>
        </div>
    </div>
    <div class="hidden lg:flex users space-x-4">
        @guest
            <a href="{{ route('user.login') }}">login</a>
            <a href="{{ route('user.register') }}">Register</a>
        @endguest
        @auth
            <form action="/logout" method="post">
                @csrf
                <button type="submit"> log Out </button>
            </form>
            <a href="">{{ Auth::user()->username }}</a>
            <a href="/profile">
                <img src="{{ asset('images/lary-head.svg') }}" alt="">
            </a>
        @endauth
    </div>
    <!-- mobile menu  -->

    <div class="relative lg:hidden ">
        <span class="absolute right-0 -top-3 lg:hidden ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5">
                </path>
            </svg>
        </span>
    </div>

</header>
