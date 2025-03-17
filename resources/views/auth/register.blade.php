<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- PB Logo -->
     <div class="flex justify-center mt-6">
        <img src="{{ asset('images/pblogo.png') }}" alt="PB Logo" width="35">
    </div>

    <!-- "Create an account" Section -->
    <div class="flex flex-col items-center text-center mt-4 w-full">
        <h2 class="font-bold text-xl">Create an account</h2>
        <p class="text-gray-500 text-sm">Enter your details below to create your account</p>
    </div>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" 
            placeholder="Full name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" 
            placeholder="email@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" 
                            placeholder="Password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" 
                            placeholder="Confirm password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="w-full flex justify-center text-center">
                {{ __('Create account') }}
            </x-primary-button>
        </div>
        <!-- Already have an account? Log in) -->
<div class="mt-4 flex justify-center">
    <p class="text-sm text-gray-600 text-center">
        Already have an account?  
        <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Log in</a>
    </p>
</div>
    </form>
</x-guest-layout>
