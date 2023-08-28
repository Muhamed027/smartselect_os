<div class="overflow-x-auto">
    <div class="relative  shadow-md sm:rounded-xl mt-12">
        <div>
            <x-forms.input-text wire:model.live="search" placeholder="search for specific record "/>
            
        </div>
        <x-table.table>
            <x-slot name="head">
                <tr>
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
                {{-- @dd($posts) --}}
                @foreach ($posts as $post)
                    <x-table.row>
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
                @endforeach
            </x-slot>
        </x-table.table>
        <div>
            {{ $posts->links() }}
        </div>
    </div>
</div>
