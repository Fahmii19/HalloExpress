@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen flex justify-center">
    <div class="w-full max-w-md bg-white p-6 rounded-lg">

        <!-- Header -->
        <div class="flex items-center mb-4">
            <button class="text-gray-600 hover:text-gray-900" onclick="window.location.href='/'">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <h1 class="ml-2 text-lg text-gray-800">Back</h1>
        </div>



        <!-- Header -->
        <div class="flex items-center mb-4">
            <h1 class="ml-2 text-lg font-bold text-gray-800">Sign up with your email or phone number</h1>
        </div>

        <!-- Form Input Fields -->
        <form action="#" class="space-y-4">
            <input type="text" placeholder="Name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
            <input type="email" placeholder="Email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">

            <div class="flex items-center border rounded-md overflow-hidden">
                <div class="flex items-center px-2">
                    <img src="{{ asset('assets/indonesia.png') }}" alt="Country Flag" class="w-6 h-auto">
                    <select class="border-none focus:outline-none">
                        <option value="+62">+62</option>
                    </select>
                </div>
                <input type="tel" placeholder="Your mobile number" class="w-full px-4 py-2 focus:outline-none">
            </div>

            <select class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                <option>Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>

            <div class="flex items-start space-x-2">
                <input type="checkbox" class="mt-1 h-4 w-4 text-teal-500 focus:ring-teal-500 border-gray-300 rounded">
                <p class="text-xs text-gray-600">By signing up, you agree to the <a href="#" class="text-teal-500 hover:underline">Terms of service</a> and <a href="#" class="text-teal-500 hover:underline">Privacy policy</a>.</p>
            </div>

            <!-- Register Button -->
            <button type="button" onclick="window.location.href='/verifikasi'" class="bg-[#0F9BAE] text-white py-3 rounded-md w-full hover:bg-teal-600 transition duration-300">
                Login
            </button>
        </form>

        <!-- Divider -->
        <div class="flex items-center my-4">
            <div class="flex-grow border-t border-gray-300"></div>
            <span class="mx-4 text-gray-500">or</span>
            <div class="flex-grow border-t border-gray-300"></div>
        </div>

        <!-- Social Sign Up Buttons -->
        <div class="space-y-2">
            <button class="flex items-center justify-center w-full border rounded-md py-2 hover:bg-gray-100 transition duration-300">
                <img src="{{ asset('assets/gmail.png') }}" alt="Google Icon" class="w-5 h-auto mr-2"> Sign up with Gmail

            </button>
            <button class="flex items-center justify-center w-full border rounded-md py-2 hover:bg-gray-100 transition duration-300">
                <img src="{{ asset('assets/facebook.png') }}" alt="Facebook Icon" class="w-5 h-auto mr-2"> Sign up with Facebook

            </button>
            <button class="flex items-center justify-center w-full border rounded-md py-2 hover:bg-gray-100 transition duration-300">
                <img src="{{ asset('assets/apple.png') }}" alt="Apple Icon" class="w-5 h-auto mr-2"> Sign up with Apple

            </button>
        </div>

        <!-- Already have an account -->

        <div class="mt-4 text-center">
            <button onclick="window.location.href='/'">

                <p class="text-gray-600">
                    Already have an account?
                    <div class="text-teal-500 hover:underline">Sign in</div>
                </p>
            </button>

        </div>


    </div>
</div>
@endsection
