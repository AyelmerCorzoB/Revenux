<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-6 text-center text-green-600" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="bg-red-700 shadow-lg rounded-lg px-8 pt-6 pb-8 mb-4">
        @csrf

        <!-- Email Address -->
        <div class="mb-6">
            <x-input-label for="email" class="block text-gray-700 text-sm font-bold mb-2" :value="__('Email')" />
            <x-text-input 
                id="email" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                type="email" 
                name="email" 
                :value="old('email')" 
                required 
                autofocus 
                autocomplete="username" 
            />
            <x-input-error :messages="$errors->get('email')" class="text-red-500 text-xs italic mt-2" />
        </div>

        <!-- Password -->
        <div class="mb-6">
            <x-input-label for="password" class="block text-gray-700 text-sm font-bold mb-2" :value="__('Password')" />
            <x-text-input 
                id="password" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                type="password" 
                name="password" 
                required 
                autocomplete="current-password" 
            />
            <x-input-error :messages="$errors->get('password')" class="text-red-500 text-xs italic mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mb-6">
            <label for="remember_me" class="flex items-center">
                <input 
                    id="remember_me" 
                    type="checkbox" 
                    class="form-checkbox h-4 w-4 text-blue-600 transition duration-150 ease-in-out" 
                    name="remember" 
                />
                <span class="ml-2 text-sm text-gray-700">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between">
            @if (Route::has('password.request'))
                <a 
                    class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" 
                    href="{{ route('password.request') }}"
                >
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>