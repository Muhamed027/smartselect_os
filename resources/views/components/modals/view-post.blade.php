<div x-data="{ isOpen: false }"
     x-on:open-view-post-modal.window="isOpen=true"
     x-show="isOpen"
     x-cloak
     class="z-10 rounded-lg"
    aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div x-transition.opacity.2000ms
        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
    </div>
    <div x-transition.opacity.2000ms
        class="fixed inset-x-0 z-10 overflow-y-auto rounded-xl dark:text-gray-100">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            
            <div
                class="relative transform  rounded-lg dark:bg-gray-900 bg-white text-gray-900 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-5xl">
                <div class="relative rounded-xl  dark:bg-gray-900 bg-white dark:text-gray-100 text-gray-900 px-2 pb-4 pt-5 sm:p-6 sm:pb-4">     
                    <div class="flex space-x-3">
                        <button class="bg-gray-800   text-gray-500 font-bold   rounded-xl px-4 py-1 w-full text-md text-center">edit </button>
                        <button class="bg-gray-800   text-gray-500 font-bold  rounded-xl px-4 py-1 w-full text-md text-center">go to production   </button>
                    </div>              
                    <button class="absolute top-1 right-1 overflow-y-auto max-h-screen text-gray-300" x-on:click="isOpen=false, $dispatch('search_modal_closed')">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                    </button>
                    {{-- <div class="h-[500px] overflow-auto rounded-lg py-2">
                        {{ App\Models\Blog\Post::find() }}
                        <div class="">
                            <img src="{{ asset('images/blog-featured.jpeg') }}" alt="the featured image " class="rounded-xl">
                            <h2 class="text-3xl font-bold mx-3 my-4">{{ $post->title }} </h2>
                            <div class="flex lg:justify-between mx-3 my-4 text-gray-500">
                                <span>Published : {{ $post->created_at }}</span>
                                <div>&bull;</div>
                                <div>
                                    <span class="mr-4">Category :</span>
                                    <a href="#"
                                        class="px-3 py-1 border rounded-full hover:opacity-50 text-xs uppercase font-semibold {{ $post->category->classes }}"
                                        style="font-size: 10px">{{ $post->category->name }}</a>
                                </div>
                                <div>&bull;</div>
                                <div>
                                    <span class="mr-4">level :</span>
                                    <a href="#"
                                        class="px-3 py-1 border rounded-full hover:opacity-50 text-xs uppercase font-semibold {{ $post->level->classes }}"
                                        style="font-size: 10px">{{ $post->level->name }}</a>
                                </div>
                            </div>
                        </div>
                        <div class="rich-editor m-4">
                         {{ $post->body }}
                        </div>
                    </div> --}}
                 </div>
            </div>
        </div>
    </div>
</div>