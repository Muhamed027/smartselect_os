<div class="max-w-5xl mx-auto mt-8 space-y-5 ">
    <h2 class="bg-blue-500 rounded-xl px-4 py-2 text-center font-semibold">Here where You Can Create A New Articles (You
        can use the bar above to markdown the articles ) </h2>
    <div class="w-full">
        <x-forms.input-label for="title" :value="__('Article Title :')" />
        <x-forms.input-textarea wireState="title" areaHeight="4" />
        <x-forms.input-error :messages="$errors->get('title')" class="mb-2" />
    </div>
    <div class="flex items-center h-full justify-between space-x-2">
        <div class="w-full">
            <x-forms.input-label for="categories" :value="__('categories :')" />
            <select wire:model.live="category" name="category" id="category" required class='select-menu'>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" class="select-option">{{ $category->name }}</option>
                @endforeach
            </select>
            <x-forms.input-error :messages="$errors->get('category')" class="mb-2" />
        </div>

        <div class="w-full">
            <x-forms.input-label for="levels" :value="__('levels :')" />
            <select wire:model.live="level" name="level" id="level" required class='select-menu'>
                @foreach ($levels as $level)
                    <option value="{{ $level->id }}" class="select-option">{{ $level->name }}</option>
                @endforeach
            </select>
            <x-forms.input-error :messages="$errors->get('level')" class="mb-2" />
        </div>
    </div>
    <div class="w-full">
        <x-forms.input-label for="excerpt" :value="__('Article excerpt :')" />
        <x-forms.input-textarea wireState="excerpt" areaHeight="4" />
        <x-forms.input-error :messages="$errors->get('excerpt')" class="mb-2" />
    </div>
    <div>
        <x-forms.input-label for="title" :value="__('the Content of the body :')" />
        <x-forms.input-textarea wireState="body" areaHeight="4"  />
        <x-forms.input-error :messages="$errors->get('body')" class="mb-2" />

    </div>
    <x-forms.submit-button>save and see the preview of the draft articles</x-forms.submit-button>

</div>
