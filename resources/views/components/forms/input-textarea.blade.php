@props(['wireState', 'areaHeight'])
<textarea wire:model.live="{{ $wireState }}" name="{{ $wireState }}" id="{{ $wireState }}"
    {{ $attributes->merge(['class' => 'dark:bg-gray-800 bg-indigo-50  w-full dark:placeholder-gray-700 text-opacity-40 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold rounded-xl']) }}
    id="" cols="30" rows="{{ $areaHeight }}"></textarea>
