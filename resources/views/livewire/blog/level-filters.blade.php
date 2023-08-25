<nav class="flex items-center justify-between px-4 dark:text-gray-500 dark:bg-gray-950 text-gray-500 text-xs">
    <ul class="flex uppercase font-semibold border-b-4 border-gray-500 pb-3  space-x-3">
        <li>
            <a wire:click.prevent="setLevel('All')" href="#"
                class=" border-b-4 border-gray-500 pb-3 ease-in duration-150 hover:text-blue-600 hover:border-blue-600 px-2 {{ $level === 'All' ? 'border-blue-500 text-blue-500' : '' }}">All
                levels({{ $levelCount['all_levels'] }})

            </a>
        </li>
        <li>
            <a wire:click.prevent="setLevel('beginner')" href="#"
                class="transition border-b-4 border-gray-500 pb-3 ease-in duration-150 hover:text-yellow-800 hover:border-yellow-800 px-2 {{ $level === 'beginner' ? 'border-yellow-800 text-yellow-800' : '' }}">beginners({{ $levelCount['beginner'] }})
            </a>
        </li>
        <li>
            <a wire:click.prevent="setLevel('intermediate')" href="#"
                class="transition border-b-4 border-gray-500 pb-3 ease-in duration-150  hover:text-blue-800 hover:border-blue-800 px-2 {{ $level === 'intermediate' ? 'border-blue-800 text-blue-800' : '' }}">intermediate({{ $levelCount['intermediate'] }})
            </a>
        </li>
    </ul>
    <ul class="flex uppercase font-semibold border-b-4 border-gray-500  pb-3 space-x-3">
        <li><a wire:click.prevent="setLevel('advanced')" href="#"
                class="transition border-b-4 border-gray-500 pb-3 ease-in duration-150  hover:text-green-800 hover:border-green-800 px-2 {{ $level === 'advanced' ? 'border-green-800 text-green-800' : '' }}">advanced({{ $levelCount['advanced'] }})
            </a></li>
        <li><a wire:click.prevent="setLevel('expert')" href="#"
                class="transition border-b-4 border-gray-500 pb-3 ease-in duration-150  hover:text-orange-800 hover:border-orange-800 px-2 {{ $level==='expert' ? 'border-orange-800 text-orange-800':'' }}">expert({{ $levelCount['expert'] }})
            </a></li>
    </ul>
</nav>
