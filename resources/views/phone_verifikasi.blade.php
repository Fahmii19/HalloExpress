@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen flex justify-center">
    <div class="w-full max-w-md bg-white p-6 rounded-lg border border-red-500 flex flex-col justify-between">

        <div>

            <!-- Header -->
            <div class="flex items-center mb-4 ">
                <button class="text-gray-600 hover:text-gray-900" type="button" onclick="window.location.href='/register'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <h1 class="ml-2 text-lg text-gray-800">Backk</h1>
            </div>


            <!-- Verification Heading -->
            <div class="text-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Verifivation email or phone number</h2>
            </div>

            <!-- OTP Input Fields -->
            <div class="flex flex-col space-y-4">
                <input type="email" placeholder="Email or phone number" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">

            </div>

        </div>

        <div class="w-full h-full grid grid-row-2">
            <!-- Spacing for button placement -->
            <div class="mt-6">
                <!-- Verify Button -->
                <!-- Verify Button -->
                <button type="button" onclick="window.location.href='/setpassword'" class="bg-[#0F9BAE] text-white py-3 rounded-md w-full hover:bg-teal-600 transition duration-300">
                    Verify
                </button>
            </div>

        </div>
    </div>
</div>
@endsection
