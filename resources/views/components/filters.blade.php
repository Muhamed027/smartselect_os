<div class="max-w-4xl mx-auto space-x-8 flex justify-around items-center mt-8 text-gray-400">
    <!-- categories -->
    <div class="relative flex w-1/4 lg:inline-flex items-center bg-gray-200 dark:bg-gray-900 rounded-xl">
        <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
            <option value="category" disabled selected>Category
            </option>
            <option value="personal">Personal</option>
            <option value="business">Business</option>
        </select>
        <x-icons.arrow-chevron/>
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
        <x-icons.arrow-chevron/>
    </div>

    <!-- Search -->
    <div class="relative w-1/2 rounded-xl bg-gray-200 ">
        <input type="text"
            class="dark:bg-gray-900 bg-indigo-50  w-full dark:placeholder-gray-700 text-opacity-40 flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold rounded-xl"
            placeholder="Quick Search / press ctrl+K">
        <x-icons.search-icon/>
    </div>

</div>