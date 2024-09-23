@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen">

    {{-- start --}}
    {{-- HalamanLogin --}}
    <div class="w-full min-h-screen sm:h-screen max-w-sm p-4 sm:p-6 bg-white rounded-lg flex flex-col justify-between mx-auto">
        <div>
            <!-- Gambar Illustration -->
            <div class="mb-4 sm:mb-6">
                <img src="{{ asset('assets/bglogin.png') }}" alt="Illustration" class="w-full h-auto object-contain">
            </div>

            <!-- Judul -->
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 mb-2 text-center">Welcome</h1>

            <!-- Sub Judul -->
            <p class="text-gray-500 mb-4 sm:mb-6 text-center">Have a better sharing experience</p>
        </div>

        <div class="w-full flex flex-col gap-4">
            <!-- Tombol Create an Account -->
            <button onclick="window.location.href='/register'" class="bg-[#0F9BAE] text-white py-3 px-4 rounded-md w-full hover:bg-teal-600 transition duration-300">
                Create an account
            </button>

            <!-- Tombol Log In -->
            <button class="border border-[#0F9BAE] text-[#0F9BAE] py-3 px-4 rounded-md w-full hover:bg-[#0F9BAE] hover:text-white transition duration-300">
                Log In
            </button>
        </div>


    </div>
    {{-- end --}}

</div>
@endsection
