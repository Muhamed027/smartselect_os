<div class="max-w-6xl mx-auto">
    {{-- filters --}}
    <div class="max-w-4xl mx-auto space-x-8 flex justify-around items-center mt-8 text-gray-400">
        <!-- categories -->
        <div
            class="relative hidden md:flex md:w-1/4 lg:inline-flex items-center bg-gray-200 dark:bg-gray-900 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Category
                </option>
                <option value="personal">Personal</option>
                <option value="business">Business</option>
            </select>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="w-4 h-4 transform right-2  absolute dark:text-gray-200 pointer-events-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>

        </div>
        <!-- Other Filters -->
        <div
            class="relative hidden md:flex md:w-1/4 lg:inline-flex items-center bg-gray-200 dark:bg-gray-900 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor"
                class="w-4 h-4 transform right-2  absolute dark:text-gray-200 pointer-events-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </div>

        <!-- Search -->
        <div class="relative hidden lg:flex md:3/4 md:w-1/2 rounded-xl bg-gray-200 ">
            <input type="text"
                class="dark:bg-gray-900 bg-indigo-50  w-full dark:placeholder-gray-700 text-opacity-40 flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold rounded-xl"
                placeholder="Quick Search / press ctrl+K">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-8 h-8 absolute right-2 px-1 top-1 text-gray-700">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </div>

    </div>
    <!-- products section -->
    <main class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-around mt-8 gap-12 ">
        <!-- product card -->
        @foreach (range(1, 20) as $product)
            <div class="space-y-2  border-dashed rounded-xl shadow-lg duration-200 hover:shadow-[#18273F]"
                style="width: 16rem; height: 22rem;">
                <img src="{{ asset('images/illustration-2.png') }}" class="rounded-xl" alt="the product image ">
                <div class="space-y-2  ">
                    <div class="mx-2">
                        <div class="flex font-semibold justify-between m-1">
                            <h4 class="">Macbook pro Max</h4>
                            <small class="text-orange-300">77.99$</small>
                        </div>
                        <div class="flex font-semibold justify-between">
                            from : <span>Apple</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center space-x-2">
                        <button
                            class="flex items-center justify-between dark:bg-[#18273F] hover:dark:bg-[#1a2c4a] bg-gray-200 hover:bg-gray-300 rounded-lg px-3 py-2 w-1/3 ">
                            <span> buy</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                            </svg>

                        </button>
                        <button
                            class=" flex items-center justify-between dark:bg-[#18273F] hover:dark:bg-[#1a2c4a] bg-gray-200 hover:bg-gray-300 rounded-lg px-3 py-2 w-2/3 ">
                            <span>Add To Cart</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>

                        </button>
                    </div>
                    <button
                        class=" flex justify-center items-center space-x-4 w-full dark:bg-[#18273F] hover:dark:bg-[#1a2c4a] bg-gray-200 text-center hover:bg-gray-300 px-3 py-2 rounded-b-xl">
                        <span class="text-center ">See details</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>
        @endforeach

    </main>
</div>
