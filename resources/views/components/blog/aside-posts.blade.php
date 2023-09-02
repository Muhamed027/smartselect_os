<ul class="space-y-2">
    @foreach ($posts as $post)
        <li>
            <a href="{{ route('blog.show', $post->slug) }}"
                class=" relative bg-gray-50  hover:bg-gray-200 dark:hover:border-solid transition-all duration-400 border border-gray-400  dark:border-blue-800  px-4 py-1 dark:text-gray-400 rounded-lg line-clamp-2 dark:bg-gray-900 dark:hover:bg-gray-950 {{$post->isActive() ? ' aside-post aside-post- dark:bg-gray-950 bg-gray-400  dark:border-blue-800 dark:border-solid':'' }}" style="transition: .3s;">
                {{ $post->title }}
            </a>
        </li>
    @endforeach
</ul>
