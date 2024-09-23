@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen flex justify-center">
    <div class="w-full max-w-md bg-white p-6 rounded-lg">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <button class="text-gray-600 hover:text-gray-900" type="button" onclick="window.location.href='/verifikasi'">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <h1 class="ml-2 text-lg text-gray-800">Back</h1>
        </div>

        <!-- Title -->
        <div class="text-center mb-6">
            <h2 class="text-xl font-bold text-gray-800">Set password</h2>
            <p class="text-gray-500">Set your password</p>
        </div>

        <!-- Password Input Fields -->
        <form action="#" class="space-y-4">
            <!-- Password Field -->
            <div class="relative">
                <input type="password" placeholder="Enter Your Password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                <div class="absolute right-3 top-2.5 text-gray-500">
                    <img class="h-4 w-4" src="{{ asset('assets/hide.png') }}" alt="">
                </div>

            </div>

            <!-- Confirm Password Field -->
            <div class="relative">
                <input type="password" placeholder="Confirm Password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                <div class="absolute right-3 top-2.5 text-gray-500">
                    <img class="h-4 w-4" src="{{ asset('assets/hide.png') }}" alt="">
                </div>
            </div>

            <!-- Password Requirements -->
            <p class="text-xs text-gray-500">Atleast 1 number or a special character</p>

            <!-- Register Button -->
            <button type="button" onclick="window.location.href='/profile'" class="bg-[#0F9BAE] text-white py-3 rounded-md w-full hover:bg-teal-600 transition duration-300">
                Register
            </button>
        </form>
    </div>
</div>
@endsection
