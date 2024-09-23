@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen flex justify-center">
    <div class="w-full max-w-md bg-white p-6 rounded-lg">

        <!-- Header -->
        <!-- Header -->
        <div class="flex items-center mb-4">
            <button class="text-gray-600 hover:text-gray-900" onclick="window.location.href='/setpassword'">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <h1 class="ml-2 text-lg text-gray-800">Back</h1>
            <div class="w-full">
                <h1 class="text-lg font-semibold ml-24 text-gray-800">Profile</h1>
            </div>
        </div>


        <!-- Profile Picture -->
        <div class="flex justify-center mb-6 relative">
            <div class="w-24 h-24 bg-gray-300 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4a4 4 0 100 8 4 4 0 000-8zm0 6a6 6 0 100 12 6 6 0 000-12z" />
                </svg>
            </div>
            <button class="absolute bottom-0 right-[9.5rem] bg-[#0F9BAE] text-white p-1 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-4.586 4.586a2 2 0 01-2.828 0l-1.172-1.172a2 2 0 010-2.828l4.586-4.586a2 2 0 012.828 0l1.172 1.172a2 2 0 010 2.828zM15 7h.01" />
                </svg>
            </button>
        </div>

        <!-- Profile Form -->
        <form action="#" class="space-y-4">
            <input type="text" placeholder="Full Name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">

            <div class="flex items-center border rounded-md overflow-hidden">
                <div class="flex items-center px-2">
                    <img src="{{ asset('assets/indonesia.png') }}" alt="Country Flag" class="w-6 h-auto">
                    <select class="border-none focus:outline-none">
                        <option value="+62">+62</option>
                    </select>
                </div>
                <input type="tel" placeholder="Your mobile number" class="w-full px-4 py-2 focus:outline-none">
            </div>


            <input type="email" placeholder="Email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
            <input type="text" placeholder="Street" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">

            <select class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                <option>City</option>
                <option>New York</option>
                <option>Los Angeles</option>
            </select>

            <select class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500">
                <option>District</option>
                <option>District 1</option>
                <option>District 2</option>
            </select>

            <!-- Buttons -->
            <div class="flex justify-between space-x-4 mt-4">
                <button class="border border-[#0F9BAE] text-[#0F9BAE] py-2 px-4 rounded-md w-full hover:bg-gray-100 transition duration-300">
                    Cancel
                </button>
                <button class="bg-[#0F9BAE] text-white py-2 px-4 rounded-md w-full hover:bg-teal-600 transition duration-300">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
