<div class="overflow-x-auto">
    <div class="relative  shadow-md sm:rounded-xl mt-12">
        <div class="flex items-center justify-between">
            <x-forms.input-text wire:model.live="search" placeholder="search for specific record " />
            <div class="flex justify-between items-center space-x-3">
                {{-- <x-create-new-resource uri="blog.create" text="new " /> --}}
                {{-- <a href="{{ route('blog.edit',$post) }}" class="blue-gradient   text-gray-200 font-bold dark:text-gray-900   rounded-xl px-4 py-1 w-full text-md text-center">{{ $text }}</a> --}}

            </div>
        </div>
        <x-table.table wire:loading.class.delay.200ms="opacity-50">
            <x-slot name="head">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        view
                    </th>
                    <th scope="col" class="px-6 py-3">
                        delete
                    </th>
                    <th scope="col" class="px-6 py-3">
                        title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        excerpt
                    </th>
                    <th scope="col" class="px-6 py-3">
                        category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        level
                    </th>
                    <th scope="col" class="px-6 py-3">
                        status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        created_at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        updated_at
                    </th>
                    <th scope="col" class="px-6 py-3">
                        published_at
                    </th>

                </tr>
            </x-slot>
            <x-slot name="body">
                @forelse ($posts as $post)

                    <x-table.row>
                        <x-table.cell class="">
                            <a href="{{ route('admin.blog.show',$post->slug) }}" class="flex items-center cursor-pointer  space-x-2 red-text-gradient">
                                <span class="text-orange-400 font-semibold">view</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="orange" class="w-4 h-4 ">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </a>
                        </x-table.cell>
                        <x-table.cell class="">
                            <a href="{{ route('blog.show', $post->slug) }}"class="flex space-x-2">
                                <span class="text-red-500 font-semibold">delete</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                  </svg>
                                  
                            </a>
                        </x-table.cell>
                        <x-table.cell class="">{{ $post->title }}</x-table.cell>
                        <x-table.cell class="">{{ $post->excerpt }}</x-table.cell>
                        <x-table.cell class="">{{ $post->category->name }}</x-table.cell>
                        <x-table.cell class="{{ $post->level->classes }}">{{ $post->level->name }}</x-table.cell>
                        <x-table.cell>
                            <div
                                class="bg-{{ $post->status_color }}-200 text-{{ $post->status_color }}-800 px-2 py-1  rounded-full">
                                {{ $post->status->name }}</div>
                        </x-table.cell>
                        <x-table.cell class="">{{ $post->created_at->format('M, d Y') }}</x-table.cell>
                        <x-table.cell class="">{{ $post->updated_at->format('M, d Y') }}</x-table.cell>
                        <x-table.cell class="">{{ $post->published_at ?? 'not yet' }}</x-table.cell>
                    </x-table.row>
                @empty
                    <x-table.row>
                        <x-table.cell colspan="8">
                            <div class="items-center justify-center w-full">
                                no result found for "{{ $search }}"
                            </div>
                        </x-table.cell>
                    </x-table.row>
                @endforelse

            </x-slot>
        </x-table.table>
        <div>
            {{ $posts->links() }}
        </div>
    </div>
</div>
