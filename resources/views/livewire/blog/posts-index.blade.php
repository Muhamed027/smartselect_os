<div>
    <div class="max-w-4xl mx-auto space-x-8 flex justify-around items-center mt-8 text-gray-400">
        <!-- categories -->
        <div class="relative flex w-1/4 lg:inline-flex items-center bg-gray-200 dark:bg-gray-900 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Category
                </option>
                <option value="personal">Personal</option>
                <option value="business">Business</option>
            </select>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red"
                class="w-4 h-4 transform right-2  absolute dark:text-gray-200 pointer-events-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>

        </div>
        <!-- Other Filters -->
        <div class="relative flex w-1/4 lg:inline-flex items-center bg-gray-200 dark:bg-gray-900 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red"
                class="w-4 h-4 transform right-2  absolute dark:text-gray-200 pointer-events-none">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </div>

        <!-- Search -->
        <div class="relative w-1/2 rounded-xl bg-gray-200 ">
            <input type="text"
                class="dark:bg-gray-900 bg-indigo-50  w-full dark:placeholder-gray-700 text-opacity-40 flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold rounded-xl"
                placeholder="Quick Search / press ctrl+K">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red"
                class="w-8 h-8 absolute right-2 px-1 top-1 text-gray-700">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
        </div>

    </div>
    <main class="mt-8 gap-12 flex">
        <aside
            class=" hidden overflow-y-auto   lg:sticky lg:top-20  lg:flex lg:justify-start lg:items-start lg:flex-col w-1/4 pb-10 px-8  h-full lg  space-y-2   ">
            <a href="{{ route('blog.create') }}"
                class="bg-blue-500 hover:bg-blue-600 rounded-xl px-4 py-1 w-full text-md text-center" wire:navigate>Add
                new Article</a>
            <h2 class="text-blue-950 font-semibold ml-2 dark:text-gray-400 ">Articles:</h2>
            <x-blog.aside-posts />
        </aside>
        <div class="w-3/4 pb-10 px-8 space-y-4 mt-8 ">
            @if ($posts->count())
                <x-blog.featured :post="$posts[0]" />
                @if ($posts->count() > 1)
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 gap-y-4">
                        @foreach ($posts->skip(1) as $post)
                            <x-blog.post-card :post="$post" />
                        @endforeach
                    </div>
                @endif
            @endif
            <div class="text-black">{{ $posts->links() }}</div>
        </div>
    </main>
</div>
