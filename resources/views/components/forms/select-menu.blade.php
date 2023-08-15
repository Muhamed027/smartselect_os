@props(['items','wireState','selected'])
<select wire:model.live="{{ $wireState }}" name="category" id="category" required
    {{ $attributes->merge(['class'=>'dark:bg-gray-800 bg-indigo-50  w-full dark:placeholder-gray-700 text-opacity-40 hover:cursor-pointer appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold rounded-xl']) }}>
    <option  disabled selected> pick  a {{ $selected }}</option>
    @foreach ($items as $item)
    <option value="{{ $item->id }}" class="hover:cursor-pointer">{{ $item->name }}</option>
    @endforeach
</select>