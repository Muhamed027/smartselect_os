<div class="rounded-3xl mt-12 max-w-md mx-auto w-full dark:bg-[#0d131d]">
    <div class="dark:text-white">
        <a href="{{ route('home') }}" class="flex justify-center pt-8">
            <span class="text-pink-700 uppercase font-bold">VOICE</span><span
                class="text-sky-700 uppercase font-bold">CASTS</span>
        </a>
        <h2 class="mt-6 text-3xl font-extrabold text-center leading-9">
            sign in to your account
        </h2>

        <p class="mt-2 text-sm text-center text-gray-600 leading-5 max-w">
            Or
            <a href="{{ route('user.register') }}" class="font-medium text-indigo-600  transition ease-in-out duration-150">
                Create a new account

            </a>
        </p>
    </div>
    <div class="px-4 py-8 mx-auto rounded-3xl shadow-[#0d131d] shadow-xl max-w-md">
        <form wire:submit.prevent="tryAuthenticateTheUser">
            <div class="mb-2">
                <label for="email" class="text-white">email :</label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model='email' type="text" autofocus id="email" name="email"
                        class="w-full py-1 bg-[#18273f] px-3 rounded-lg text-white">
                </div>
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password" class="text-white">password :</label>
                <div>
                    <input wire:model="password" type="text" autofocus id="password" name="password"
                        class="w-full py-1 bg-[#18273f] px-3 rounded-lg text-white">
                </div>
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <button type="submit" wire:loading.class="bg-indigo-800"
                        class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Sign in
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>
