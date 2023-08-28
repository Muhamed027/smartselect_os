@if ($paginator->hasPages())
    <div class="flex items-center justify-center my-2">
        
        @if ( ! $paginator->onFirstPage())
            {{-- First Page Link --}}
            <a
            class="mx-1 px-4 py-2  border-1  border-gray-700 text-gray-700 font-bold text-center  hover:border-gray-700 rounded-lg  cursor-pointer"
            wire:click="gotoPage(1)"
            >
            <span><< </span>
            </a>
            @if($paginator->currentPage() > 2)
            {{-- Previous Page Link --}}
            <a
                class="mx-1 px-4 py-2  border-1  border-gray-700 text-gray-700 font-bold text-center  hover:border-gray-400 rounded-lg  cursor-pointer"
                wire:click="previousPage"
            >
            <
            </a>
            @endif
        @endif

        <!-- Pagination Elements -->
        @foreach ($elements as $element)
            <!-- Array Of Links -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    <!--  Use three dots when current page is greater than 3.  -->
                    @if ($paginator->currentPage() > 3 && $page === 2)
                        <div class="text-gray-700 mx-1 flex items-center">
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                        </div>
                    @endif

                    <!--  Show active page two pages before and after it.  -->
                    @if ($page == $paginator->currentPage())
                        <span class="mx-1 px-4 py-2 border-1  border-gray-700  text-gray-700 font-bold text-center  hover:border-gray-700-800 rounded-lg  cursor-pointer">{{ $page }}</span>
                    @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2)
                        <a class="mx-1 px-4 py-2 border-1  border-gray-700-900 text-gray-900 font-bold text-center hover:text-gray-400 rounded-lg  cursor-pointer" wire:click="gotoPage({{$page}})">{{ $page }}</a>
                    @endif

                    <!--  Use three dots when current page is away from end.  -->
                    @if ($paginator->currentPage() < $paginator->lastPage() - 2  && $page === $paginator->lastPage() - 1)
                        <div class="text-gray-700 mx-1 flex items-center ">
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                            <span class="font-bold">.</span>
                        </div>
                    @endif
                @endforeach
            @endif
        @endforeach
        
        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            @if($paginator->lastPage() - $paginator->currentPage() >= 2)
                <a class="mx-1 px-4 py-2  border-1  border-gray-700-900 text-gray-700 font-bold text-center  hover:border-gray-700 rounded-lg  cursor-pointer"
                wire:click="nextPage"
                rel="next">
                >
                </a>
            @endif
            <a
                class="mx-1 px-4 py-2 border-1  border-gray-700-900 text-gray-700 font-bold text-center  hover:border-gray-700-400 rounded-lg  cursor-pointer"
                wire:click="gotoPage({{ $paginator->lastPage() }})"
            >
            <span>>>    </span>
            </a>
        @endif
    </div>
@endif