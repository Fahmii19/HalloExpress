@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen flex justify-center">
    <div class="w-full max-w-md bg-white p-6 rounded-lg">
        <!-- Header -->
        <div class="flex items-center mb-4">
            <button class="text-gray-600 hover:text-gray-900">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <h1 class="ml-2 text-lg text-gray-800">Back</h1>
        </div>

        <!-- Verification Heading -->
        <div class="text-center mb-6">
            <h2 class="text-xl font-bold text-gray-800">Phone verification</h2>
            <p class="text-gray-500">Enter your OTP code</p>
        </div>

        <!-- OTP Input Fields -->
        <div class="flex justify-center gap-2 mb-4">
            <input type="text" maxlength="1" class="w-12 h-12 text-center border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 text-xl" autofocus>
            <input type="text" maxlength="1" class="w-12 h-12 text-center border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 text-xl">
            <input type="text" maxlength="1" class="w-12 h-12 text-center border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 text-xl">
            <input type="text" maxlength="1" class="w-12 h-12 text-center border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 text-xl">
        </div>

        <!-- Resend Link -->
        <div class="text-center mb-6">
            <p class="text-gray-600">Didn’t receive code? <a href="#" class="text-teal-500 hover:underline">Resend again</a></p>
        </div>

        <!-- Verify Button -->
        <button class="bg-[#0F9BAE] text-white py-3 rounded-md w-full hover:bg-teal-600 transition duration-300">
            Verify
        </button>
    </div>
</div>
@endsection
