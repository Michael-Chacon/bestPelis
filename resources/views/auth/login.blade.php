<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" novalidate class="text-white">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" class="text-white"/>
            <x-text-input id="email" class="block mt-1 w-full text-black" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-white" />

            <x-text-input id="password" class="block mt-1 w-full text-black" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="mb-3 mt-3">
            <label for="remember_me" class="">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-300">{{ __('Remember me') }}</span>
            </label>
        </div>
        <div class="flex justify-between items-center mb-5">
            <div>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-300 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
            <div>
                <a href="{{ route('register') }}" class="text-sm focus:ring-offset-2 underline"> Registrarme </a>
            </div>

        </div>
        <x-primary-button class="w-full ">
            <span class="text-center">
                {{ __('Log in') }}
            </span>
        </x-primary-button>
    </form>
</x-guest-layout>
