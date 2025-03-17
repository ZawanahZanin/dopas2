<x-guest-layout>
     <!-- PB Logo -->
     <div class="flex justify-center mt-6">
        <img src="{{ asset('images/pblogo.png') }}" alt="PB Logo" width="35">
    </div>

    <!-- "Log in to your account" -->
    <div class="flex flex-col items-center text-center mt-4 w-full">
        <h2 class="font-bold text-xl">Log in to your account</h2>
        <p class="text-gray-500 text-sm">Enter your email and password below to log in</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full border-gray-300 rounded-lg p-2" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
            placeholder="email@example.com"
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
        <div class="flex justify-between items-center">
                <!-- Password label -->
                <x-input-label for="password" :value="__('Password')" />

                <!-- Forgot your password link -->
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="Password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            

             <!-- Log In Button (Long Horizontal) -->
             <x-primary-button class="w-full flex justify-center text-center">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <!-- Sign Up Link Below Login Button -->
        <div class="mt-4 flex justify-center">
            <p class="text-sm text-gray-600 text-center">
  Don't have an account? 
        <a href="{{ route('register') }}" class="text-indigo-600 hover:underline">Sign up</a>
    </p>
    </div>
    </form> 
    
</x-guest-layout>
