<div class="rounded-3xl mt-12 max-w-md mx-auto w-full dark:bg-[#0d131d] mb-28">
    <div class="dark:text-white">
        <div class="font-bold text-lg uppercase italic text-center  "><a href="{{ route('home') }}"><span
            class="font-bold blue-text-gradient ">Smart</span><span
            class="red-text-gradient">Select</span></a>
</div>
        <h2 class="mt-6 text-3xl font-extrabold text-center leading-9">
            Create a new account
        </h2>

        <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
            Or
            <a href="{{ route('user.login') }}" class="font-medium text-indigo-600  transition ease-in-out duration-150">
                sign in to your account
            </a>
        </p>
    </div>
    <div class="px-4 py-8 mx-auto rounded-3xl shadow-[#0d131d] shadow-xl max-w-md">
        @if (session()->has('success'))
            <p class="bg-green-600 opacity-90 text-xs font-semibold h-12 items-center flex text-center justify-center">{{ session('success') }}</p>
        @endif
        <form wire:submit.prevent="register">
            <div class="mb-2">
                <label for="username" class="text-white">username :</label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.live="username" type="text" autofocus required id="username" name="username"
                        class="w-full py-1 bg-[#18273f] px-3 rounded-lg text-white">
                </div>
                @error('username')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="email" class="text-white">email :</label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.live="email" type="text" required id="email" name="email"
                        class="w-full py-1 bg-[#18273f] px-3 rounded-lg text-white">
                </div>
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password" class="text-white">password :</label>
                <div>
                    <input wire:model.live="password" type="password" required id="password" name="password"
                        class="w-full py-1 bg-[#18273f] px-3 rounded-lg text-white">
                </div>
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="confirm_password" class="text-white">confirm password :</label>
                <div>
                    <input wire:model.live="confirm_password" type="password" required id="confirm_password"
                        name="confirm_password" class="w-full py-1 bg-[#18273f] px-3 rounded-lg text-white">
                </div>
                @error('confirm_password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <button type="submit" wire:loading.class="bg-indigo-800"
                        class="flex justify-center disabled w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Sign in
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>

