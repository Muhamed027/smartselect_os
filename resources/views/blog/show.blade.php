<x-layouts.app>
    <main class="mt-8 gap-12 flex">
        <aside
            class=" hidden overflow-y-auto   lg:sticky lg:top-20  lg:flex lg:justify-start lg:items-start lg:flex-col w-1/4 pb-10 px-8  h-full lg  space-y-2   ">
            <h2 class="text-blue-950 font-semibold ml-2 dark:text-indigo-100 ">Popular Articles:</h2>
            <x-blog.aside-posts />
        </aside>
        <div class="w-3/4 pb-10 px-8 space-y-4 mt-8 ">
            {{-- @dump(url()->previous())
            @dump(url()->full()) --}}
            <a href="{{ $backUrl }}" class="flex items-center space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
                <span class="hover:underline "> back to posts(Or go back with choosen categories and filters ) </span>
            </a>
            <!-- featured introduction  -->
            <div class="">
                <img src="{{ asset('images/blog-featured.jpeg') }}" alt="the featured image " class="rounded-xl">
                <h2 class="text-3xl font-bold mx-3 my-4">{{ $post->title }} </h2>
                <div class="flex lg:justify-between mx-3 my-4 text-gray-500">
                    <span>Published : {{ $post->created_at }}</span>
                    <div>&bull;</div>
                    <div>
                        <span class="mr-4">Category :</span>
                        <a href="#"
                            class="px-3 py-1 border rounded-full hover:opacity-50 text-xs uppercase font-semibold {{ $post->category->classes }}"
                            style="font-size: 10px">{{ $post->category->name }}</a>
                    </div>
                    <div>&bull;</div>
                    <div>
                        <span class="mr-4">level :</span>
                        <a href="#"
                            class="px-3 py-1 border rounded-full hover:opacity-50 text-xs uppercase font-semibold {{ $post->level->classes }}"
                            style="font-size: 10px">{{ $post->level->name }}</a>
                    </div>
                </div>
            </div>
            <div class="rich-editor m-4">
             {{ $post->body }}
            </div>
        </div>
    </main>

</x-layouts.app>
