<div x-data="{ show: false }" x-on:click.away="show=false" class="relative w-full">
    <div
        class="dark:bg-gray-800 bg-indigo-50  w-full dark:placeholder-gray-700 text-opacity-40 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold rounded-xl">

        <button x-on:click=" show = ! show ">levels</button>
    </div>
    <div x-show="show" class="absolute bg-gray-700 w-full rounded-xl mt-4space-y-2 divide-y-2 divide-gray-600 overflow-y-auto" style="display: none; max-height:400px">
        @foreach ($levels as $level)
            <a href="#" value="{{ $level->id }}" class="block px-2 py-1 hover:bg-gray-600 hover:rounded-xl">{{ $level->name }}</a>
        @endforeach
    </div>
</div>