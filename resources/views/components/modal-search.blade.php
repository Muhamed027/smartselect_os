@props(['search_result', 'search_result_count'])

<div x-data="{ isOpen: false }"
     x-on:open-search-modal.window="isOpen=true, $nextTick(()=>$refs.search_field.focus())"
     x-show="isOpen"
     x-cloak
     class="z-10"
    aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div x-transition.opacity.2000ms
        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
    </div>
    <div x-transition.opacity.2000ms
        class="fixed inset-x-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

            <div
                class="relative transform overflow-hidden rounded-lg dark:bg-gray-900 bg-white text-gray-900 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl">
                <div class="relative dark:bg-gray-900 bg-white text-gray-900 px-2 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <button class="absolute top-1 right-1  text-gray-300" x-on:click="isOpen=false, $dispatch('search_modal_closed')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                    </button>
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center w-full sm:ml-0 sm:mt-0 sm:text-left">

                            <div
                                class="relative w-full rounded-xl bg-gray-50 dark:bg-gray-900 border  border-gray-400 dark:border-blue-800 focus:ring-none">
                                <input wire:model.live="search" type="search" x-ref="search_field"
                                    class="dark:bg-gray-900   w-full dark:placeholder-gray-700 text-opacity-40 flex-appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold rounded-xl"
                                    placeholder="Quick Search / press ctrl+K">
                                <x-icons.search-icon />
                            </div>
                            <div class="text-xs flex  w-full px-4 pt-2 text-center items-center justify-center ">there
                                is {{ $search_result_count }} result found </div>
                            <div class="mt-2 max-h-[320px] overflow-y-auto">
                                <ul class="space-y-2">
                                    @foreach ($search_result as $result)
                                        {{-- @dump($search_resul) --}}
                                        <li class="rounded-md px-1 py-1 border dark:border-pink-800 border-gray-300">
                                            <div class="flex space-x-2">
                                                <div class="h-full w-[40px]">
                                                    <img src="{{ asset('images/illustration-1.png') }}"
                                                        class="w-16 h-16 object-cover flex items-center justify-center rounded-md mr-2 "
                                                        alt="">
                                                </div>
                                                <div>
                                                    <h4 class="text-sm text-start line-clamp-1 hover:underline"><a
                                                            href="{{ route('blog.show', $result['slug']) }}">
                                                            {{ $result['title'] }} </a></h4>
                                                    <div class="px-2 py-1 text-xs">
                                                        {{ $result['excerpt'] }}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dark:bg-gray-900 bg-white px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">

                    <button type="button" x-on:click="isOpen=false"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-gray-800 px-3 py-2 text-sm font-semibold text-gray-300 shadow-sm ring-1 ring-inset ring-gray-900 hover:bg-gray- sm:mt-0 sm:w-auto">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
