<div class="max-w-4xl mx-auto space-x-8 flex justify-around items-center mt-8 text-gray-400">
    <!-- categories -->
    {{-- @dd($categories) --}}
    <div
        class="relative flex w-1/4 lg:inline-flex items-center bg-gray-50 border   border-gray-400 dark:border-blue-800  dark:bg-gray-900 rounded-xl">
        <select
            class="flex-1 appearance-none bg-gray-50 dark:bg-gray-900 rounded-xl py-2 pl-3 pr-9 text-sm font-semibold overflow-hidden">
            <option value="category" disabled selected>Category
            </option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }} <span>(23)</span></option>
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
        <input type="text"
            class="dark:bg-gray-900 bg-indigo-50  w-full dark:placeholder-gray-700 text-opacity-40 flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold rounded-xl"
            placeholder="Quick Search / press ctrl+K">
        <x-icons.search-icon />
    </div>

</div>
