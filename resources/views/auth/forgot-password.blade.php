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

        <div class="mb-4 text-sm text-gray-600" style="color: purple;">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" style="color: purple;" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button style="color: white; background: purple;">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
<footer class="text-center py-4 text-gray-500" style="color: white;">
        &copy; 2023 C.M.N. All rights reserved.
</footer>

    </body>
</html>

