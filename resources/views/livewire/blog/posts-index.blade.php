<div>
    <x-filters :categories="$categories" />
    <main class="mt-8 gap-12 flex">
        <aside
            class=" hidden overflow-y-auto   lg:sticky lg:top-20  lg:flex lg:justify-start lg:items-start lg:flex-col w-1/4 pb-10 px-8  h-full lg  space-y-2   ">
            @admin
                <x-create-new-resource uri="blog.create" text="Add new Article" />
            @endadmin
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
                <div class="text-black dark:text-white">{{ $posts->links() }}</div>
            @endif
        </div>
    </main>
</div>
