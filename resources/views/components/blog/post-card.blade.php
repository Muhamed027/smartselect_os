<article
    class="transition-all  dark:bg-gray-900 dark:hover:bg-gray-950 border bg-gray-50 hover:bg-gray-200  border-gray-400  dark:border-blue-800   rounded-xl" style="transition: 0.5s ;">
    <div class="py-6 px-5">
        <div>
            <img src="{{ asset('/images/illustration-1.png') }}" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="mt-8 flex flex-col justify-between">
            <header>
                <div class="space-x-2">
                    <a href="#"
                        class="px-3 py-1 border   rounded-full hover:opacity-50 text-xs uppercase font-bold  {{ $post->level->classes }}"
                        style="font-size: 10px">{{ $post->level->name }}</a>
                    <a href="?category='caacaecea'"
                        class="px-3 py-1 border  rounded-full hover:opacity-50  text-xs uppercase font-Bold  {{ $post->category->classes }}"
                        style="font-size: 10px">{{ $post->category->name }}</a>
                </div>

                <div class="mt-4">
                    <a href="{{ route('blog.show', $post->slug) }}" class="text-3xl hover:underline line-clamp-3">
                        {{ $post->title }}
                        </h1>

                        <span class="mt-2 block text-gray-400 text-xs ">
                            Published <time>{{ $post->created_at->diffForHumans() }}</time>
                        </span>
                </div>
            </header>

            <div class="text-sm mt-4 line-clamp-2 no-underline">
                <p>
                    {{ $post->excerpt }}
                </p>
            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="{{ asset('images/lary-head.svg') }}" alt="Lary avatar">
                    <div class="ml-3 hover:underline-none">
                        <h5 class="font-bold dark:text-gray-100 text-gray-900">{{ $post->author->username }} <small class="text-green-500">
                                [{{ $post->author->is_admin ? 'admin' : '' }}] </small>
                        </h5>
                        <h6>{!! $post->author->role !!}</h6>
                    </div>
                </div>

                <div>
                    <a href="{{ route('blog.show',$post->slug) }}"
                        class="transition-colors duration-300 text-xs font-semibold dark:bg-gray-700  dark:hover:bg-gray-600   bg-gray-300 hover:bg-gray-400 rounded-full py-2 px-8">Read
                        More
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
