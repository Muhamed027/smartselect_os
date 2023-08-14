<x-layouts.app>
    <main class="mt-8 gap-12 flex">
        <aside
            class=" hidden overflow-y-auto   lg:sticky lg:top-20  lg:flex lg:justify-start lg:items-start lg:flex-col w-1/4 pb-10 px-8  h-full lg  space-y-2   ">
            <h2 class="text-blue-950 font-semibold ml-2 dark:text-indigo-100 ">Articles:</h2>
            <x-blog.aside-posts />
        </aside>
        <div class="w-3/4 pb-10 px-8 space-y-4 mt-8 ">
            <a href="{{ route('blog.index') }}" class="flex items-center space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>

                <span class="hover:underline "> back to posts </span>
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
                            class="px-3 py-1 border dark:border-orange-700 border-red-400 text-orange-400 rounded-full dark:bg-orange-400 hover:dark:bg-orange-500 dark:text-black text-xs uppercase font-semibold"
                            style="font-size: 10px">{{ $post->category->name }}</a>
                    </div>
                    <div>&bull;</div>
                    <div>
                        <span class="mr-4">level :</span>
                        <a href="#"
                            class="px-3 py-1 border dark:border-red-700 border-red-600 text-red-600  rounded-full dark:bg-red-400  dark:hover:bg-blue-500 dark:text-black text-xs uppercase font-semibold"
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
