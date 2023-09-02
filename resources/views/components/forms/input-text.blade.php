   @props([
    'placeholder'=>'',

   ])
   <div {{ $attributes->merge(['class'=>" w-1/4  mt-1 ml-1 relative rounded-xl shadow-sm"]) }}>
        <input
            {{$attributes->whereStartsWith('wire:model')}}
            id="{{$attributes->whereStartsWith('wire:model')->first()}}"
            type="text"
            class="form-input block  dark:bg-gray-800 bg- indigo-50 rounded-xl  w-full dark:placeholder-gray-700 text-opacity-40 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold rounded-xlsm:text-sm sm:leading-5"
            placeholder="{{$placeholder}}"
            aria-invalid="true"
            aria-describedby="email-error"
        />
    </div>