<div>
    <div class="max-w-4xl mx-auto space-x-8 flex justify-around items-center mt-8 text-gray-400">
        <!-- categories -->
        {{-- @dd($categories) --}}
        <div
            class="relative flex w-1/4 lg:inline-flex items-center bg-gray-50 border   border-gray-400 dark:border-blue-800  dark:bg-gray-900 rounded-xl">
            <select wire:model.live.debounce.100ms="category"
                class="flex-1 appearance-none bg-gray-50 dark:bg-gray-900 rounded-xl py-2 pl-3 pr-9 text-sm font-semibold overflow-y-hidden">
                <option value="All"  selected> <span class="text-gray-700 overflow-y-hidden">Categories</span> : All({{ $categoryCount['all_categories'] }})
                </option>
                @foreach ($categories as $category)
                    <option value="{{ $category->name }}" class="overflow-y-hidden">{{ $category->name }}<span>({{ $categoryCount[str_replace('-','_',str_replace(' ','_',strtolower($category->name)))] }})</span></option>
                @endforeach
    
            </select>
            <x-icons.arrow-chevron />
        </div>
        <!-- Other Filters -->
        <div
            class="relative flex w-1/4 lg:inline-flex items-center bg-gray-50 border hover:bg-gray-200  border-gray-400 dark:border-blue-800 dark:bg-gray-900 rounded-xl">
            <select
                class="flex-1 appearance-none bg-gray-50 dark:bg-gray-900 rounded-xl py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Other Filters
                </option>
                <option value="foo">Foo
                </option>
                <option value="bar">Bar
                </option>
            </select>
            <x-icons.arrow-chevron />
        </div>
    
        <!-- Search -->
        <div class="relative w-1/2 rounded-xl bg-gray-50 dark:bg-gray-900 border  border-gray-400 dark:border-blue-800">
            <input wire:model.live="search" type="search"
                class="dark:bg-gray-900 bg-indigo-50  w-full dark:placeholder-gray-700 text-opacity-40 flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold rounded-xl"
                placeholder="Quick Search / press ctrl+K">
            <x-icons.search-icon />
        </div>
    
    </div>
    <main class="mt-8 gap-12 flex">
        <aside
            class=" hidden overflow-y-auto   lg:sticky lg:top-20  lg:flex lg:justify-start lg:items-start lg:flex-col w-1/4 pb-10 px-8  h-full lg  space-y-2   ">
            @admin
                <x-create-new-resource uri="blog.create" text="Add new Article" />
            @endadmin
            <h2 class="text-blue-950 font-semibold ml-2 dark:text-gray-400 ">Articles:</h2>
            <x-blog.aside-posts />
        </aside>
        <div class="w-3/4 pb-4 px-8 space-y-12 mt-4 ">
            <nav
                class="flex items-center justify-between px-4 dark:text-gray-500 dark:bg-gray-950 text-gray-500 text-xs">
                <ul class="flex uppercase font-semibold border-b-4 border-gray-500 pb-3  space-x-3">
                    <li>
                        <a wire:click.prevent="setLevel('All')" href="#"
                            class=" border-b-4 border-gray-500 pb-3 ease-in duration-150 hover:text-white px-2 {{ $level === 'All' ? 'border-blue-600 text-white' : '' }}">All
                            levels({{ $levelCount['all_levels'] }})

                        </a>
                    </li>
                    <li>
                        <a wire:click.prevent="setLevel('beginner')" href="#"
                            class="transition border-b-4 border-gray-500 pb-3 ease-in duration-150 hover:text-white px-2 {{ $level === 'beginner' ? 'border-blue-600 text-white' : '' }}">beginners({{ $levelCount['beginner'] }})
                        </a>
                    </li>
                    <li>
                        <a wire:click.prevent="setLevel('intermediate')" href="#"
                            class="transition border-b-4 border-gray-500 pb-3 ease-in duration-150  hover:text-white px-2 {{ $level === 'intermediate' ? 'border-blue-600 text-white' : '' }}">intermediate({{ $levelCount['intermediate'] }})
                        </a>
                    </li>
                </ul>
                <ul class="flex uppercase font-semibold border-b-4 border-gray-500  pb-3 space-x-3">
                    <li><a wire:click.prevent="setLevel('advanced')" href="#"
                            class="transition border-b-4 border-gray-500 pb-3 ease-in duration-150  hover:text-white px-2 {{ $level === 'advanced' ? 'border-blue-600 text-white' : '' }}">advanced({{ $levelCount['advanced'] }})
                        </a></li>
                    <li><a wire:click.prevent="setLevel('expert')" href="#"
                            class="transition border-b-4 border-gray-500 pb-3 ease-in duration-150  hover:text-white px-2 {{ $level === 'expert' ? 'border-blue-600 text-white' : '' }}">expert({{ $levelCount['expert'] }})
                        </a></li>
                </ul>
            </nav>
            <div class="space-y-4">
                @if ($posts->count())
                    <x-blog.featured :post="$posts[0]" />
                    @if ($posts->count() > 1)
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 gap-y-4">
                            @foreach ($posts->skip(1) as $post)
                                <x-blog.post-card :post="$post" />
                            @endforeach
                        </div>
                    @endif
                    <div class="text-black dark:text-white">{{ $posts->appends(request()->query())->links() }}</div>
                @else
                there is no result      
                @endif
            </div>
        </div>
    </main>
</div>
