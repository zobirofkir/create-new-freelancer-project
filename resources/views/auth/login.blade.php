<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="background-color: purple;">

<x-guest-layout>
    <!-- Navbar -->
    <nav class="bg-gray-800 p-4" style="background-color: purple;">
        <div class="container mx-auto flex items-center justify-between">
            <div class="text-white text-2xl font-semibold">
               <a href="{{ url('/') }}">C.M.N</a> 
            </div>
            <div class="flex items-center space-x-4">
                <a href="{{ url('/register') }}" class="text-white" style="font-weight: 900;">Register</a>
            </div>
        </div>
    </nav>

    <x-authentication-card>
    <x-slot name="logo">
        <x-authentication-card-logo />
    </x-slot>

    <x-validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4">
            <x-label for="email" style="color: purple;" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        </div>

        <div class="mb-4">
            <x-label for="password" style="color: purple;" value="{{ __('Password') }}" />
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="mb-4">
            <label for="remember_me" class="flex items-center">
                <x-checkbox id="remember_me" name="remember" />
                <span style="color: purple;" class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a style="color: purple;" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-button class="ml-4" style="color: white; background: purple;" >
                {{ __('Log in') }}
            </x-button>
        </div>
    </form>
</x-authentication-card>
    
    <!-- Copyright Footer -->
    <footer class="text-center py-4 text-gray-500" style="color: white;">
        &copy; 2023 C.M.N. All rights reserved.
    </footer>
</x-guest-layout>

</body>
</html>
