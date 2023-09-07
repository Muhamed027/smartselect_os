<article
    class="transition-colors duration-300 dark:bg-gray-900 dark:hover:bg-gray-950  dark:border-blue-800   bg-gray-50 hover:bg-gray-200   border border-gray-400   rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 space-y-12 lg:mr-8 ">
            <div class="overflow-hidden rounded-xl">
                <img src="{{ asset('/images/illustration-1.png') }}" alt="Blog Post illustration"
                    class="rounded-xl border dark:border-indigo-200 hover:border-indigo-300 hover:scale-105 overflow-hidden transition-all ease-in-out hover:rotate-1 duration-300">
            </div>
            <div class="hidden md:flex justify-between ">
                <img src="{{ asset('/images/illustration-1.png') }}" alt="Blog Post illustration"
                    class="rounded-xl w-24 h-24 border dark:border-indigo-200 border-indigo-950 hover:border-gray-200 hover:scale-105 transition-all ease-in-out duration-150">
                <img src="{{ asset('/images/illustration-1.png') }}"
                    class="rounded-xl w-24 h-24 border border-indigo-200 hover:border-indigo-300 hover:scale-105 transition-all ease-in-out duration-150">
                <img src="{{ asset('/images/illustration-1.png') }}"
                    class="rounded-xl w-24 h-24 border border-indigo-200 hover:border-indigo-300 hover:scale-105 transition-all ease-in-out duration-150">

            </div>
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <a href="{{ route('blog.index',['level'=>$post->level->name]) }}"
                        class="px-3 py-1 border rounded-full hover:opacity-50 text-xs uppercase font-semibold {{ $post->level->classes }}"
                        style="font-size: 10px">{{ $post->level->name }}</a>
                    <a href="{{ route('blog.index',['category'=>$post->category->name])}}"
                        class="px-3 py-1  border rounded-full hover:opacity-50 text-xs uppercase font-semibold {{ $post->category->classes }}"
                        style="font-size:10px">{{ $post->category->name }}</a>
                </div>
                <div class="mt-4">
                    <a href="{{ route('blog.show',$post->slug) }}" class="text-3xl hover:underline transition-all duration-300 cursor-pointer line-clamp-3">
                        {{ $post->title }}
                    </a>

                    <span class="mt-2 block text-gray-400 text-xs">
                        Published <time> {{ $post->created_at->diffForHumans() }} </time>
                    </span>
                </div>
            </header>

            <div class="text-sm mt-2 line-clamp-6">
                <p>
                  {{ $post->excerpt }}
                </p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="./images/lary-head.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">{{ $post->author->username }}<small class="text-green-500 "> [{{ $post->author->is_admin ? 'admin': '' }}] </small></h5>

                        <h6>{!! $post->author->role !!}</h6>
                    </div>
                </div>

                <div class="hidden lg:block">
                    <a href="{{ route('blog.show',$post->slug) }}"
                        class="transition-colors duration-300 text-xs font-semibold dark:bg-gray-700  dark:hover:bg-gray-600   bg-gray-300 hover:bg-gray-400 rounded-full py-2 px-8">Read
                        More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
