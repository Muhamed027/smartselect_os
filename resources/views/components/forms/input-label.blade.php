@props(['value'])

<label {{ $attributes->merge(['class'=>'px-2 my-1 block text-gray-400 ']) }} >{{ $value ?? $slot }}</label>
