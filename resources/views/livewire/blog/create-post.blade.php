<div class="max-w-5xl mx-auto mt-8 space-y-5 ">
    <h2 class="bg-blue-500 rounded-xl px-4 py-2 text-center font-semibold">Here where You Can Create A New Articles (You
        can use the bar above to markdown the articles ) </h2>
    <div class="w-full">
        <x-forms.input-label for="title" :value="__('Article Title')" />
        <x-forms.input-textarea wireState="title" areaHeight="6" />
        <x-forms.input-error :messages="$errors->get('title')" class="mb-2" />
    </div>
    <div class="flex items-center h-full justify-between space-x-2">
        <x-forms.select-menu :items="$categories" :wireState="$category" selected="category" />
        <x-forms.input-error :messages="$errors->get('category')" class="mb-2" />

        <x-forms.select-menu :items="$levels" :wireState="$level" selected="level" />
        <x-forms.input-error :messages="$errors->get('level')" class="mb-2" />

        <x-forms.select-menu :items="$statuses" :wireState="$status" selected="status" />
        <x-forms.input-error :messages="$errors->get('status')" class="mb-2" />
    </div>
    <div>
        <label for="body" class="px-2 my-1 block text-gray-400"> The Content of the body :</label>
        <x-forms.input-textarea wireState="title" areaHeight="30" />
        <x-forms.input-error :messages="$errors->get('body')" class="mb-2" />

    </div>
    <x-forms.submit-button>save and see the preview of the draft articles</x-forms.submit-button>

</div>
