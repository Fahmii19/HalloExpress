@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen flex justify-center">
    <div class="w-full max-w-md bg-white rounded-lg">


        <div class="relative h-[100vh] z-10 bg-slate-50 w-full">
            <div class="grid grid-cols-1 h-full">
                <div class="flex flex-col">
                    <!-- Tinggi Dari Judul - Screen Desktop -->
                    <div class="h-[10vh] w-full bg-white border-b dekstop-survey">
                        <div class="flex justify-between items-center h-full px-6">
                            <div class="-ml-2.5 grid grid-cols-2">
                                <!-- Nama Judul - Screen Desktop  -->
                                <div class="flex items-center justify-start">
                                    <a href="#" class="flex items-center">
                                        <img src="{{ asset('assets/images/logo_invest.png') }}" class="max-h-12 w-auto object-cover" alt="Logo Survey" />

                                        <span class="ml-2 text-3xl font-extrabold">Survey Aksesibilitas</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Start Menu Dropdown Login - Screen Desktop -->
                            <div class="flex items-center">
                                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-medium text-gray-900 rounded-full" type="button">
                                    <span class="sr-only">Open user menu</span>
                                    <div class="flex items-center justify-center p-1 border-2 border-gray-700 rounded-full shadow">
                                        <img class="w-6 h-6 rounded-full" src="{{ asset('assets/images/user.png') }}" alt="user photo" />

                                    </div>
                                </button>
                                <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600 mx-10">
                                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownAvatarNameButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
                                        </li>
                                    </ul>
                                    <div class="py-2">
                                        <a href="login.html" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Keluar</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Menu Dropdown Login - Screen Desktop -->
                        </div>
                    </div>

                    <!-- Start Konten Survey Aksesibilitas Mobile & Dekstop -->
                    <div class="container-survey-aksesibilitas h-full">
                        <div class="bg-slate-50 dekstop-survey px-0 py-5">
                            <!-- Survey Aksesibilitas - Screen Desktop -->
                            <div class="flex col justify-center mb-7 mt-4">
                                <div class="flex flex-col">
                                    <div class="w-10 h-10 flex justify-center items-center cursor-pointer relative">
                                        <img class="menu-icon" data-menu="1" src="{{ asset('assets/images/open_active.png') }}" alt="" />

                                    </div>
                                </div>
                            </div>
                            <!-- Rekap - Screen Desktop -->
                            <div class="flex col justify-center">
                                <div class="flex flex-col">
                                    <div class="w-10 h-10 flex justify-center items-center cursor-pointer relative">
                                        <img data-menu="2" class="menu-icon" src="{{ asset('assets/images/rekap.png') }}" alt="" />

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mapbox - Screen Mobile -->
                        <div id="mapAksesibilitas" class="map-container">

                            <!-- Konten - Screen Mobile -->
                            <div class="mobile-survey h-[90vh]">
                                <!-- Konten Rekap - Screen Mobile -->
                                <div id="rekapContainer" class="pb-[4vh] text-black pt-2 bg-slate-50 rounded-tl-[15px] rounded-tr-[15px] w-full h-[35vh] transition-all ease-in-out duration-300 table-rekap-hide absolute bottom-0 z-10 hidden">
                                    <div class="flex flex-col scroll_up_rekap">
                                        <div class="flex justify-center px-6 mb-3">
                                            <div class="w-7 h-1 bg-gray-300 rounded-full cursor-pointer sticky -top-2 z-10" id="toggleButtonRekap"></div>
                                        </div>
                                        <div class="mb-2 -mt-1 flex flex-col px-6">
                                            <div class="font-medium text-xl text-gray-700">Pesan</div>
                                        </div>
                                    </div>

                                    {{-- --}}
                                    <div class="flex flex-col px-6 py-2">

                                        <div class="relative mb-2">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M5 9a7 7 0 1 1 8 6.93V21a1 1 0 1 1-2 0v-5.07A7.001 7.001 0 0 1 5 9Zm5.94-1.06A1.5 1.5 0 0 1 12 7.5a1 1 0 1 0 0-2A3.5 3.5 0 0 0 8.5 9a1 1 0 0 0 2 0c0-.398.158-.78.44-1.06Z" clip-rule="evenodd" />
                                                </svg>


                                            </div>
                                            <input type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  " placeholder="Cari lokasi tujuan">
                                        </div>

                                        <div class="relative">
                                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">


                                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd" />
                                                </svg>




                                            </div>
                                            <input type="text" id="email-address-icon" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  " placeholder="Tujuan lokasi">
                                        </div>


                                        <div class="w-full flex justify-center mt-2.5">
                                            <button type="button" class="text-white text-md font-bold bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg w-full px-5 py-2.5 me-2 mb-2">Pesan sekarang</button>
                                        </div>




                                    </div>
                                    {{-- --}}
                                </div>

                                <!-- Konten Form - Screen Mobile  -->
                                <div class="pb-[4vh] text-black pt-2 bg-slate-50 rounded-tl-[15px] rounded-tr-[15px] w-full h-[45vh] transition-all ease-in-out duration-300 absolute bottom-0 z-10 form-input-akses hidden">
                                    <div class="flex flex-col scroll_up_form_input">
                                        <div class="flex justify-center px-6 mb-3">
                                            <div class="w-7 h-1 bg-gray-300 rounded-full cursor-pointer sticky -top-2 z-10" id="toggleButtonFormInput"></div>
                                        </div>

                                        <div class="mb-4 -mt-1 flex flex-col px-6">
                                            <div class="font-medium text-xl text-gray-700">
                                                Form Input
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Form - Screen Mobile  -->
                                    <div class="relative px-3 pb-11">
                                        <div class="flex flex-col mb-1">
                                            <div class="text-black bg-slate-50 w-full h-full transition-all ease-in-out duration-300 table-detail px-3 pb-5 mt-3">
                                                <div class="overflow-y-hidden h-[20vh] expand_input hide-scrollbar relative">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="lokasi" class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Nama Lokasi</label>
                                                            <input type="text" id="lokasi" name="lokasi" class="bg-white border border-gray-300 text-gray-900 text-sm block w-full h-10 p-2.5 outline-none border-1 focus:border-gray-700 focus:ring-0" required="" />
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="alamat" class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Alamat Lokasi</label>
                                                            <input type="text" id="alamat" name="alamat" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm block w-full h-10 p-2.5 outline-none border-1 focus:border-gray-700 focus:ring-0" value="Jalan manggis" readonly="" />
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="lebar" class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Lebar Jalan</label>
                                                            <input type="text" id="lebar" name="lebar" class="bg-white border border-gray-300 text-gray-900 text-sm block w-full h-10 p-2.5 outline-none border-1 focus:border-gray-700 focus:ring-0" required="" />
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="jenis" class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Jenis Jalan</label>
                                                            <select class="bg-white border border-gray-300 text-gray-900 text-sm block w-full h-10 px-2.5 py-1.5 outline-none border-1 focus:border-gray-700 focus:ring-0" name="jenis">
                                                                <option value="">Pilih</option>
                                                                <option value="">Permukaan</option>
                                                                <option value="">Underground</option>
                                                                <option value="">Di atas</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="kelas" class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Kelas Jalan</label>
                                                            <select class="bg-white border border-gray-300 text-gray-900 text-sm block w-full h-10 px-2.5 py-1.5 outline-none border-1 focus:border-gray-700 focus:ring-0" name="kelas">
                                                                <option value="">Pilih</option>
                                                                <option value="">Arteri</option>
                                                                <option value="">Kolektor</option>
                                                                <option value="">Lingkungan</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="kelas" class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Pedestrian</label>

                                                            <div class="grid grid-rows-2">
                                                                <div class="flex items-center">
                                                                    <input id="ada" type="radio" value="" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600" />
                                                                    <label for="ada" class="ml-2 text-sm">Ada</label>
                                                                </div>
                                                                <div class="flex items-center">
                                                                    <input id="tidak-ada" type="radio" value="" name="status" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600" />
                                                                    <label for="tidak-ada" class="ml-2 text-sm">Tidak Ada</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="max-w-screen-lg mx-auto grid grid-rows-2 mb-6">
                                                            <div class="grid grid-cols-2 gap-x-5 mb-2">
                                                                <div>
                                                                    <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Foto Depan</label>
                                                                    <div class="relative">
                                                                        <input type="file" id="fotoDepanInput" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer" accept="image/*" onchange="previewImage('fotoDepanInput', 'fotoDepanPreview')" />
                                                                        <label for="fotoDepanInput" class="cursor-pointer">
                                                                            <img id="fotoDepanPreview" class="w-auto h-5vh" src="{{ asset('assets/images/noimage.png') }}" alt="Tidak ada gambar" />

                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Foto Seberang</label>
                                                                    <div class="relative">
                                                                        <input type="file" id="fotoSeberangInput" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer" accept="image/*" onchange="previewImage('fotoSeberangInput', 'fotoSeberangPreview')" />
                                                                        <label for="fotoSeberangInput" class="cursor-pointer">
                                                                            <img id="fotoSeberangPreview" class="w-auto h-5vh" src="{{ asset('assets/images/noimage.png') }}" alt="Tidak ada gambar" />

                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="grid grid-cols-2 gap-x-5">
                                                                <div>
                                                                    <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Foto Kiri</label>
                                                                    <div class="relative">
                                                                        <input type="file" id="fotoKiriInput" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer" accept="image/*" onchange="previewImage('fotoKiriInput', 'fotoKiriPreview')" />
                                                                        <label for="fotoKiriInput" class="cursor-pointer">
                                                                            <img id="fotoKiriPreview" class="w-auto h-5vh" src="{{ asset('assets/images/noimage.png') }}" alt="Tidak ada gambar" />

                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Foto Kanan</label>
                                                                    <div class="relative">
                                                                        <input type="file" id="fotoKananInput" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer" accept="image/*" onchange="previewImage('fotoKananInput', 'fotoKananPreview')" />
                                                                        <label for="fotoKananInput" class="cursor-pointer">
                                                                            <img id="fotoKananPreview" class="w-auto h-5vh" src="{{ asset('assets/images/noimage.png') }}" alt="Tidak ada gambar" />

                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="flex justify-center mb-4">
                                                            <div class="">
                                                                <button id="btn_table_detail" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-0 font-medium rounded-full text-sm px-10 py-2.5 text-center">
                                                                    Simpan
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Konten Profil - Screen Mobile -->
                                <div class="pb-[4vh] text-black pt-2 bg-slate-50 rounded-tl-[15px] rounded-tr-[15px] w-full h-[45vh] transition-all ease-in-out duration-300 form-profil absolute bottom-0 z-10 hidden">
                                    <div class="flex flex-col scroll_up_rekap">
                                        <div class="flex justify-center px-6 mb-3">
                                            <div class="w-7 h-1 bg-gray-300 rounded-full cursor-pointer sticky -top-2 z-10" id="toggleButtonProfil"></div>
                                        </div>
                                        <div class="mb-4 -mt-1 flex flex-col px-6">
                                            <div class="font-medium text-xl text-gray-700">
                                                Saldo
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Profil - Screen Mobile  -->
                                    <div class="relative px-3 pb-11">
                                        <div class="flex flex-col mb-1">
                                            <div class="text-black bg-slate-50 w-full h-full transition-all ease-in-out duration-300 table-detail px-3 pb-5 mt-3">
                                                <div class="overflow-y-hidden h-[20vh] expand_profil hide-scrollbar relative">


                                                    {{--ok1 --}}
                                                    <div class="grid grid-cols-2 ">

                                                        <div>
                                                            <a class="inline-block rounded-xl border border-indigo-600 px-10 py-3 text-sm font-medium text-indigo-600 hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500" href="#">
                                                                Tarik Saldo
                                                            </a>
                                                        </div>
                                                        <div class="flex justify-end">
                                                            <a class="inline-block rounded-xl border border-indigo-600 px-10 py-3 text-sm font-medium text-indigo-600 hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500" href="#">
                                                                Topup Saldo
                                                            </a>
                                                        </div>

                                                    </div>

                                                    <div class="mx-auto max-w-3xl py-8 sm:px-6 sm:py-12 lg:px-8">
                                                        <div class="grid grid-cols-2 gap-10 sm:grid-cols-2 sm:items-center md:gap-8 px-1">

                                                            <div class="rounded-2xl border border-indigo-600 p-3 shadow-sm ring-1  bg-indigo-100 ring-indigo-600 sm:order-last sm:px-8 lg:p-12">
                                                                <div class="text-center">


                                                                    <p class="mt-2 sm:mt-4">
                                                                        <strong class="text-lg font-bold text-gray-900 sm:text-4xl">Rp. 504.000 </strong>

                                                                    </p>
                                                                </div>

                                                                <ul class="mt-1 space-y-2 text-center">

                                                                    <h2 class="text-lg font-medium text-gray-900">
                                                                        Saldo
                                                                    </h2>

                                                                </ul>

                                                            </div>


                                                            <div class="rounded-2xl border border-indigo-600 p-3 shadow-sm ring-1 ring-indigo-600 sm:order-last sm:px-8 lg:p-12 bg-indigo-100">
                                                                <div class="text-center">


                                                                    <p class="mt-2 sm:mt-4">
                                                                        <strong class="text-lg font-bold text-gray-900 sm:text-4xl">Rp. 1.000.000 </strong>

                                                                    </p>
                                                                </div>

                                                                <ul class="mt-1 space-y-2 text-center">

                                                                    <h2 class="text-lg font-medium text-gray-900">
                                                                        <div class="flex flex-col">
                                                                            <div>Pendapatan</div>
                                                                            <div class="-mt-2">Harian</div>
                                                                        </div>

                                                                    </h2>

                                                                </ul>

                                                            </div>



                                                            {{-- ok2 --}}
                                                        </div>
                                                    </div>


                                                    {{-- --}}

                                                    <article class="rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8 mb-3">
                                                        <div class="w-full ">
                                                            <div class="hidden sm:grid sm:size-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500" aria-hidden="true">
                                                                <div class="flex items-center gap-1">
                                                                    <span class="h-8 w-0.5 rounded-full bg-indigo-500"></span>
                                                                    <span class="h-6 w-0.5 rounded-full bg-indigo-500"></span>
                                                                    <span class="h-4 w-0.5 rounded-full bg-indigo-500"></span>
                                                                    <span class="h-6 w-0.5 rounded-full bg-indigo-500"></span>
                                                                    <span class="h-8 w-0.5 rounded-full bg-indigo-500"></span>
                                                                </div>
                                                            </div>

                                                            <div class="w-full">
                                                                <strong class="rounded border border-indigo-500 bg-indigo-500 px-3 py-1.5 text-[10px] font-medium text-white">
                                                                    Orderan #101
                                                                </strong>

                                                                <h3 class="mt-4 text-lg font-medium sm:text-xl">
                                                                    <a href="#" class="hover:underline"> Abdilah Iskandar Gunawan </a>

                                                                </h3>
                                                                <div class="grid grid-cols-3 text-gray-500">
                                                                    <div class="col-span-2">
                                                                        <div class="inline-flex">

                                                                            <p class="text-sm font-medium">20:48</p>
                                                                            <p class="text-sm font-medium">&nbsp;-&nbsp;</p>
                                                                            <p class="text-sm font-medium">21:00</p>
                                                                            <p class="text-sm font-medium">&nbsp;-&nbsp;</p>

                                                                            <div>7.32 km</div>


                                                                        </div>

                                                                    </div>
                                                                    <div class="text-green-500 font-bold text-right">
                                                                        Selesai
                                                                    </div>

                                                                </div>

                                                                <div class="mt-2 text-xs font-medium text-gray-500 sm:mt-0 flex flex-col">

                                                                    <div class="inline-flex">
                                                                        <svg class="w-3.5 h-3.5 mr-1 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12Zm0 0v6M9.5 9A2.5 2.5 0 0 1 12 6.5" />
                                                                        </svg>



                                                                        Jl Mawar Blok A71, Tapos, Kota Depok</div>
                                                                    <div class="inline-flex">

                                                                        <svg class="w-3.5 h-3.5 mr-1 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                                                                        </svg>


                                                                        Cibinong City Mall, Cibinong, Kab. Bogor</div>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </article>
                                                    <article class="rounded-xl bg-white p-4 ring ring-indigo-50 sm:p-6 lg:p-8">
                                                        <div class="w-full ">
                                                            <div class="hidden sm:grid sm:size-20 sm:shrink-0 sm:place-content-center sm:rounded-full sm:border-2 sm:border-indigo-500" aria-hidden="true">
                                                                <div class="flex items-center gap-1">
                                                                    <span class="h-8 w-0.5 rounded-full bg-indigo-500"></span>
                                                                    <span class="h-6 w-0.5 rounded-full bg-indigo-500"></span>
                                                                    <span class="h-4 w-0.5 rounded-full bg-indigo-500"></span>
                                                                    <span class="h-6 w-0.5 rounded-full bg-indigo-500"></span>
                                                                    <span class="h-8 w-0.5 rounded-full bg-indigo-500"></span>
                                                                </div>
                                                            </div>

                                                            <div class="w-full">
                                                                <strong class="rounded border border-indigo-500 bg-indigo-500 px-3 py-1.5 text-[10px] font-medium text-white">
                                                                    Orderan #101
                                                                </strong>

                                                                <h3 class="mt-4 text-lg font-medium sm:text-xl">
                                                                    <a href="#" class="hover:underline"> Abdilah Iskandar Gunawan </a>

                                                                </h3>
                                                                <div class="grid grid-cols-3 text-gray-500">
                                                                    <div class="col-span-2">
                                                                        <div class="inline-flex">

                                                                            <p class="text-sm font-medium">20:48</p>
                                                                            <p class="text-sm font-medium">&nbsp;-&nbsp;</p>
                                                                            <p class="text-sm font-medium">21:00</p>
                                                                            <p class="text-sm font-medium">&nbsp;-&nbsp;</p>

                                                                            <div>7.32 km</div>


                                                                        </div>

                                                                    </div>
                                                                    <div class="text-red-500 font-bold text-right">
                                                                        Tidak Selesai
                                                                    </div>

                                                                </div>

                                                                <div class="mt-2 text-xs font-medium text-gray-500 sm:mt-0 flex flex-col">

                                                                    <div class="inline-flex">
                                                                        <svg class="w-3.5 h-3.5 mr-1 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15a6 6 0 1 0 0-12 6 6 0 0 0 0 12Zm0 0v6M9.5 9A2.5 2.5 0 0 1 12 6.5" />
                                                                        </svg>



                                                                        Jl Mawar Blok A71, Tapos, Kota Depok</div>
                                                                    <div class="inline-flex">

                                                                        <svg class="w-3.5 h-3.5 mr-1 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.8 13.938h-.011a7 7 0 1 0-11.464.144h-.016l.14.171c.1.127.2.251.3.371L12 21l5.13-6.248c.194-.209.374-.429.54-.659l.13-.155Z" />
                                                                        </svg>


                                                                        Cibinong City Mall, Cibinong, Kab. Bogor</div>


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </article>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Menu Navigation - Mobile  -->

                            <div class="mobile-survey h-20 w-full flex items-center fixed bottom-0 px-6 bg-white shadow-3xl text-gray-400 cursor-pointer z-10 rounded-t-xl">
                                <div class="grid grid-cols-4 w-full h-full">


                                    <div class="flex justify-center items-center">
                                        <div class="inline-flex flex-col items-center justify-center">
                                            <div class="flex w-8 h-8 items-center justify-center btn_rekap border-b-4 border-transparent  transition duration-300 ">
                                                <img src="{{ asset('assets/images/home-button.png') }}" alt="" class="menu-image-rekap" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="flex justify-center items-center ">


                                        <div class="inline-flex flex-col items-center justify-center">
                                            <div class="flex w-8 h-8 items-center justify-center btn_profil">
                                                <img src="{{ asset('assets/images/wallet.png') }}" alt="" class="menu-image-profil" />

                                            </div>
                                        </div>


                                    </div>
                                    <div class="flex justify-center items-center ">
                                        <div class="inline-flex flex-col items-center justify-center">
                                            <div class="flex w-8 h-8 items-center justify-center btn_profil">
                                                <img src="{{ asset('assets/images/discount-label.png') }}" alt="" class="menu-image-profil" />

                                            </div>
                                        </div>

                                    </div>
                                    <div class="flex justify-center items-center ">

                                        <div class="inline-flex flex-col items-center justify-center">
                                            <div class="flex w-8 h-8 items-center justify-center btn_profil">
                                                <img src="{{ asset('assets/images/account.png') }}" alt="" class="menu-image-profil" />

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>





                        </div>

                        <!--  Screen Dekstop - Menu Survey Aksesibilitas -->
                        <div class="bg-slate-50 dekstop-survey px-9 pt-4 pb-5">
                            <div id="surveyScreen">
                                <div class="text-3xl font-extrabold mb-4">Tambah Data</div>

                                <div class="h-[78vh] overflow-y-auto hide-scrollbar">
                                    <form class="">
                                        <div class="mb-3">
                                            <label for="nama_lokasi" class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Nama Lokasi</label>
                                            <input type="text" id="nama_lokasi" name="nama_lokasi" class="bg-white border border-gray-300 text-gray-900 text-sm block w-full h-10 p-2.5 focus:ring-0 focus:border-gray-300" required="" placeholder="" value="Taman Tebet" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="lebar" class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Koordinat</label>
                                            <input type="text" id="lebar" name="lebar" class="bg-white border border-gray-300 text-gray-900 text-sm block w-full h-10 p-2.5 outline-none border-1 focus:border-gray-700 focus:ring-0" value="6.239090°S 106.855683°E" required="" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="alamat" class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Alamat</label>
                                            <input type="text" id="alamat" name="alamat" class="bg-white border border-gray-300 text-gray-900 text-sm block w-full h-10 p-2.5 outline-none border-1 focus:border-gray-700 focus:ring-0" required="" placeholder="Alamat" value="Tebet, Jakarta Selatan, DKI Jakarta, Indonesia" />
                                        </div>

                                        <div class="mb-3">
                                            <label for="lebar_jalan" class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Lebar Jalan</label>
                                            <input type="text" id="lebar_jalan" name="lebar_jalan" class="bg-white border border-gray-300 text-gray-900 text-sm block w-full h-10 p-2.5 outline-none border-1 focus:border-gray-700 focus:ring-0" required="" placeholder="Masukan lebar jalan" value="7000" />
                                        </div>

                                        <!-- Jenis Jalan section -->
                                        <div class="mb-3">
                                            <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide" for="jenis_jalan">Jenis Jalan</label>
                                            <div class="grid grid-cols-3">
                                                <div>
                                                    <input id="permukaan" type="radio" value="Permukaan" name="jenis_jalan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" />
                                                    <label for="permukaan" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Permukaan</label>
                                                </div>
                                                <div>
                                                    <input id="underground" type="radio" value="Underground" name="jenis_jalan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" />
                                                    <label for="underground" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Underground</label>
                                                </div>
                                                <div>
                                                    <input id="diatas" type="radio" value="Di atas" name="jenis_jalan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" checked />
                                                    <label for="diatas" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Di atas</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Kelas Jalan section -->
                                        <div class="mb-3">
                                            <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide" for="kelas_jalan">Kelas Jalan</label>
                                            <div class="grid grid-cols-3">
                                                <div>
                                                    <input id="arteri_kelas" type="radio" value="Arteri" name="kelas_jalan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" />
                                                    <label for="arteri_kelas" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Arteri</label>
                                                </div>
                                                <div>
                                                    <input checked id="lingkungan_kelas" type="radio" value="Lingkungan" name="kelas_jalan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" />
                                                    <label for="lingkungan_kelas" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Lingkungan</label>
                                                </div>
                                                <div>
                                                    <input id="kolektor_kelas" type="radio" value="Kolektor" name="kelas_jalan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" />
                                                    <label for="kolektor_kelas" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Kolektor</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Pedestrian section -->
                                        <div class="mb-3">
                                            <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide" for="pedestrian">Pedestrian</label>
                                            <div class="grid grid-cols-3">
                                                <div>
                                                    <input id="ada_pedestrian" type="radio" value="Ada" name="pedestrian" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" checked />
                                                    <label for="ada_pedestrian" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Ada</label>
                                                </div>
                                                <div>
                                                    <input id="tidak_ada_pedestrian" type="radio" value="Tidak Ada" name="pedestrian" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" />
                                                    <label for="tidak_ada_pedestrian" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Tidak Ada</label>
                                                </div>
                                                <div></div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="max-w-screen-lg mx-auto grid grid-rows-2 mb-4">
                                                <div class="grid grid-cols-2 gap-x-5 mb-2">
                                                    <div>
                                                        <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Foto Depan</label>
                                                        <div class="relative">
                                                            <input type="file" id="fotoDepanInput" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer" accept="image/*" onchange="previewImage('fotoDepanInput', 'fotoDepanPreview')" />
                                                            <label for="fotoDepanInput" class="cursor-pointer">
                                                                <img id="fotoDepanPreview" class="w-auto h-5vh" src="{{ asset('assets/images/noimage.png') }}" alt="Tidak ada gambar" />

                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Foto Seberang</label>
                                                        <div class="relative">
                                                            <input type="file" id="fotoSeberangInput" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer" accept="image/*" onchange="previewImage('fotoSeberangInput', 'fotoSeberangPreview')" />
                                                            <label for="fotoSeberangInput" class="cursor-pointer">
                                                                <img id="fotoSeberangPreview" class="w-auto h-5vh" src="{{ asset('assets/images/noimage.png') }}" alt="Tidak ada gambar" />

                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="grid grid-cols-2 gap-x-5">
                                                    <div>
                                                        <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Foto Kiri</label>
                                                        <div class="relative">
                                                            <input type="file" id="fotoKiriInput" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer" accept="image/*" onchange="previewImage('fotoKiriInput', 'fotoKiriPreview')" />
                                                            <label for="fotoKiriInput" class="cursor-pointer">
                                                                <img id="fotoKiriPreview" class="w-auto h-5vh" src="{{ asset('assets/images/noimage.png') }}" alt="Tidak ada gambar" />
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Foto Kanan</label>
                                                        <div class="relative">
                                                            <input type="file" id="fotoKananInput" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer" accept="image/*" onchange="previewImage('fotoKananInput', 'fotoKananPreview')" />
                                                            <label for="fotoKananInput" class="cursor-pointer">
                                                                <img id="fotoKananPreview" class="w-auto h-5vh" src="{{ asset('assets/images/noimage.png') }}" alt="Tidak ada gambar" />

                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="max-w-screen-lg mx-auto grid grid-rows-1">
                                                <div class="grid grid-cols-1">
                                                    <div class="flex justify-center">
                                                        <div class="">
                                                            <button id="btn_table_detail" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-0 font-medium rounded-full text-sm px-10 py-2.5 text-center">
                                                                Simpan
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <!--  Screen Dekstop - Menu Rekap - Dekstop -->
                            <div id="rekapScreen" class="" style="display: none">
                                <div class="grid grid-cols-2 mb-4">
                                    <!-- Nama Judul Rekap - Dekstop -->
                                    <div class="text-3xl font-extrabold">Rekap</div>
                                    <!-- Tombol Tutup Form - Dekstop -->
                                    <div class="flex items-end justify-end pr-2">
                                        <div class="relative inline-flex items-center justify-center w-7 h-7 overflow-hidden">
                                            <div class="w-10 h-10 flex justify-center items-center cursor-pointer relative btn_close_judul_table">
                                                <img src="{{ asset('assets/images/close_rekap.png') }}" alt="" />

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="h-[73vh] overflow-y-hidden hide-scrollbar change_height_rekap">
                                    <!-- Tombol Table - Masimal 10 kolom -->
                                    <div class="grid grid-rows-10 btn_open_tombol_table">
                                        <!-- Contoh 1 Benar lainnya dummy -->
                                        <div class="flex flex-col mb-2">
                                            <div class="text-black text-sm grid grid-cols-[1fr,60px] border rounded-md bg-white">
                                                <div class="flex justify-start items-center py-3 px-3 w-full btn_open_judul_table cursor-pointer" id="judulTable">
                                                    Taman Pondok Indah Pinggir Kali s
                                                </div>
                                                <div class="flex justify-end py-3 px-3">
                                                    <div class="w-[1.1rem] h-[1.1rem]">
                                                        <img src="{{ asset('assets/images/hapus.png') }}" alt="Delete" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="flex flex-col mb-2">
                                            <div class="text-black text-sm grid grid-cols-[1fr,60px] border rounded-md bg-white">
                                                <div class="flex justify-start items-center py-3 px-3 w-full btn_open_judul_table cursor-pointer" id="judulTable">
                                                    Taman Pondok Indah Pinggir Kali s
                                                </div>
                                                <div class="flex justify-end py-3 px-3">
                                                    <div class="w-[1.1rem] h-[1.1rem]">
                                                        <img src="{{ asset('assets/images/hapus.png') }}" alt="Delete" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex flex-col mb-2">
                                            <div class="text-black text-sm grid grid-cols-[1fr,60px] border rounded-md bg-white">
                                                <div class="flex justify-start items-center py-3 px-3 w-full btn_open_judul_table cursor-pointer" id="judulTable">
                                                    Taman Pondok Indah Pinggir Kali s
                                                </div>
                                                <div class="flex justify-end py-3 px-3">
                                                    <div class="w-[1.1rem] h-[1.1rem]">
                                                        <img src="{{ asset('assets/images/hapus.png') }}" alt="Delete" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="flex flex-col mb-2">
                                            <div class="text-black text-sm grid grid-cols-[1fr,60px] border rounded-md bg-white">
                                                <div class="flex justify-start items-center py-3 px-3 w-full btn_open_judul_table cursor-pointer" id="judulTable">
                                                    Taman Pondok Indah Pinggir Kali s
                                                </div>
                                                <div class="flex justify-end py-3 px-3">
                                                    <div class="w-[1.1rem] h-[1.1rem]">
                                                        <img src="{{ asset('assets/images/hapus.png') }}" alt="Delete" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="flex flex-col mb-2">
                                            <div class="text-black text-sm grid grid-cols-[1fr,60px] border rounded-md bg-white">
                                                <div class="flex justify-start items-center py-3 px-3 w-full btn_open_judul_table cursor-pointer" id="judulTable">
                                                    Taman Pondok Indah Pinggir Kali s
                                                </div>
                                                <div class="flex justify-end py-3 px-3">
                                                    <div class="w-[1.1rem] h-[1.1rem]">
                                                        <img src="{{ asset('assets/images/hapus.png') }}" alt="Delete" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="flex flex-col mb-2">
                                            <div class="text-black text-sm grid grid-cols-[1fr,60px] border rounded-md bg-white">
                                                <div class="flex justify-start items-center py-3 px-3 w-full btn_open_judul_table cursor-pointer" id="judulTable">
                                                    Taman Pondok Indah Pinggir Kali s
                                                </div>
                                                <div class="flex justify-end py-3 px-3">
                                                    <div class="w-[1.1rem] h-[1.1rem]">
                                                        <img src="{{ asset('assets/images/hapus.png') }}" alt="Delete" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="flex flex-col mb-2">
                                            <div class="text-black text-sm grid grid-cols-[1fr,60px] border rounded-md bg-white">
                                                <div class="flex justify-start items-center py-3 px-3 w-full btn_open_judul_table cursor-pointer" id="judulTable">
                                                    Taman Pondok Indah Pinggir Kali s
                                                </div>
                                                <div class="flex justify-end py-3 px-3">
                                                    <div class="w-[1.1rem] h-[1.1rem]">
                                                        <img src="{{ asset('assets/images/hapus.png') }}" alt="Delete" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="flex flex-col mb-2">
                                            <div class="text-black text-sm grid grid-cols-[1fr,60px] border rounded-md bg-white">
                                                <div class="flex justify-start items-center py-3 px-3 w-full btn_open_judul_table cursor-pointer" id="judulTable">
                                                    Taman Pondok Indah Pinggir Kali s
                                                </div>
                                                <div class="flex justify-end py-3 px-3">
                                                    <div class="w-[1.1rem] h-[1.1rem]">
                                                        <img src="{{ asset('assets/images/hapus.png') }}" alt="Delete" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="flex flex-col mb-2">
                                            <div class="text-black text-sm grid grid-cols-[1fr,60px] border rounded-md bg-white">
                                                <div class="flex justify-start items-center py-3 px-3 w-full btn_open_judul_table cursor-pointer" id="judulTable">
                                                    Taman Pondok Indah Pinggir Kali s
                                                </div>
                                                <div class="flex justify-end py-3 px-3">
                                                    <div class="w-[1.1rem] h-[1.1rem]">
                                                        <img src="{{ asset('assets/images/hapus.png') }}" alt="Delete" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                        <div class="flex flex-col mb-2">
                                            <div class="text-black text-sm grid grid-cols-[1fr,60px] border rounded-md bg-white">
                                                <div class="flex justify-start items-center py-3 px-3 w-full btn_open_judul_table cursor-pointer" id="judulTable">
                                                    Taman Pondok Indah Pinggir Kali s
                                                </div>
                                                <div class="flex justify-end py-3 px-3">
                                                    <div class="w-[1.1rem] h-[1.1rem]">
                                                        <img src="{{ asset('assets/images/hapus.png') }}" alt="Delete" />

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--  -->
                                    </div>

                                    <!-- Tombol Konten Table -->

                                    <div class="text-black bg-slate-50 w-full h-full transition-all ease-in-out duration-300 btn_open_konten_table hidden" id="kontenTable">
                                        <div class="overflow-y-auto h-full hide-scrollbar relative">
                                            <form class="">
                                                <!--  -->
                                                <div class="mb-3">
                                                    <label for="nama_lokasi" class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Nama Lokasi</label>
                                                    <input type="text" id="nama_lokasi" name="nama_lokasi" class="bg-white border border-gray-300 text-gray-900 text-sm block w-full h-10 p-2.5 focus:ring-0 focus:border-gray-300" required="" placeholder="" value="Taman Pondok Indah Pinggir Kali s" />
                                                </div>

                                                <div class="mb-3">
                                                    <label for="lebar" class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Koordinat</label>
                                                    <input type="text" id="lebar" name="lebar" class="bg-white border border-gray-300 text-gray-900 text-sm block w-full h-10 p-2.5 outline-none border-1 focus:border-gray-700 focus:ring-0" value="6.239090°S 106.855683°E" required="" />
                                                </div>

                                                <div class="mb-3">
                                                    <label for="alamat" class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Alamat</label>
                                                    <input type="text" id="alamat" name="alamat" class="bg-white border border-gray-300 text-gray-900 text-sm block w-full h-10 p-2.5 outline-none border-1 focus:border-gray-700 focus:ring-0" required="" placeholder="Alamat" value="Pluit, Jakarta Utara, DKI Jakarta, Indonesia" />
                                                </div>

                                                <div class="mb-3">
                                                    <label for="lebar_jalan" class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Lebar Jalan</label>
                                                    <input type="text" id="lebar_jalan" name="lebar_jalan" class="bg-white border border-gray-300 text-gray-900 text-sm block w-full h-10 p-2.5 outline-none border-1 focus:border-gray-700 focus:ring-0" required="" placeholder="Masukan lebar jalan" value="7000" />
                                                </div>

                                                <!-- Jenis Jalan section -->
                                                <div class="mb-3">
                                                    <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide" for="jenis_jalan">Jenis Jalan</label>
                                                    <div class="grid grid-cols-3">
                                                        <div>
                                                            <input id="permukaan" type="radio" value="Permukaan" name="jenis_jalan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" />
                                                            <label for="permukaan" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Permukaan</label>
                                                        </div>
                                                        <div>
                                                            <input id="underground" type="radio" value="Underground" name="jenis_jalan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" />
                                                            <label for="underground" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Underground</label>
                                                        </div>
                                                        <div>
                                                            <input id="diatas" type="radio" value="Di atas" name="jenis_jalan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" checked />
                                                            <label for="diatas" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Di atas</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Kelas Jalan section -->
                                                <div class="mb-3">
                                                    <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide" for="kelas_jalan">Kelas Jalan</label>
                                                    <div class="grid grid-cols-3">
                                                        <div>
                                                            <input id="arteri_kelas" type="radio" value="Arteri" name="kelas_jalan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" />
                                                            <label for="arteri_kelas" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Arteri</label>
                                                        </div>
                                                        <div>
                                                            <input checked id="lingkungan_kelas" type="radio" value="Lingkungan" name="kelas_jalan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" />
                                                            <label for="lingkungan_kelas" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Lingkungan</label>
                                                        </div>
                                                        <div>
                                                            <input id="kolektor_kelas" type="radio" value="Kolektor" name="kelas_jalan" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" />
                                                            <label for="kolektor_kelas" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Kolektor</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Pedestrian section -->
                                                <div class="mb-3">
                                                    <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide" for="pedestrian">Pedestrian</label>
                                                    <div class="grid grid-cols-3">
                                                        <div>
                                                            <input id="ada_pedestrian" type="radio" value="Ada" name="pedestrian" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" checked />
                                                            <label for="ada_pedestrian" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Ada</label>
                                                        </div>
                                                        <div>
                                                            <input id="tidak_ada_pedestrian" type="radio" value="Tidak Ada" name="pedestrian" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:outline-none focus:ring-0" />
                                                            <label for="tidak_ada_pedestrian" class="ml-2 text-sm font-medium text-gray-900 tracking-wide">Tidak Ada</label>
                                                        </div>
                                                        <div></div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="max-w-screen-lg mx-auto grid grid-rows-2 mb-4">
                                                        <div class="grid grid-cols-2 gap-x-5 mb-2">
                                                            <div>
                                                                <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Foto Depan</label>
                                                                <div class="relative">
                                                                    <input type="file" id="fotoDepanInput" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer" accept="image/*" onchange="previewImage('fotoDepanInput', 'fotoDepanPreview')" />
                                                                    <label for="fotoDepanInput" class="cursor-pointer">
                                                                        <img id="fotoDepanPreview" class="w-auto h-5vh" src="{{ asset('assets/images/noimage.png') }}" alt="Tidak ada gambar" />

                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Foto Seberang</label>
                                                                <div class="relative">
                                                                    <input type="file" id="fotoSeberangInput" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer" accept="image/*" onchange="previewImage('fotoSeberangInput', 'fotoSeberangPreview')" />
                                                                    <label for="fotoSeberangInput" class="cursor-pointer">
                                                                        <img id="fotoSeberangPreview" class="w-auto h-5vh" src="{{ asset('assets/images/noimage.png') }}" alt="Tidak ada gambar" />

                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="grid grid-cols-2 gap-x-5">
                                                            <div>
                                                                <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Foto Kiri</label>
                                                                <div class="relative">
                                                                    <input type="file" id="fotoKiriInput" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer" accept="image/*" onchange="previewImage('fotoKiriInput', 'fotoKiriPreview')" />
                                                                    <label for="fotoKiriInput" class="cursor-pointer">
                                                                        <img id="fotoKiriPreview" class="w-auto h-5vh" src="{{ asset('assets/images/noimage.png') }}" alt="Tidak ada gambar" />

                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <label class="block mb-1 text-sm font-medium text-gray-900 tracking-wide">Foto Kanan</label>
                                                                <div class="relative">
                                                                    <input type="file" id="fotoKananInput" class="opacity-0 absolute inset-0 w-full h-full cursor-pointer" accept="image/*" onchange="previewImage('fotoKananInput', 'fotoKananPreview')" />
                                                                    <label for="fotoKananInput" class="cursor-pointer">
                                                                        <img id="fotoKananPreview" class="w-auto h-5vh" src="{{ asset('assets/images/noimage.png') }}" alt="Tidak ada gambar" />

                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="max-w-screen-lg mx-auto grid grid-rows-1">
                                                        <div class="grid grid-cols-1">
                                                            <div class="flex justify-center">
                                                                <div class="">
                                                                    <button id="btn_table_detail" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-0 font-medium rounded-full text-sm px-10 py-2.5 text-center">
                                                                        Simpan
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Navigation  dihiden sementara-->
                                <div class="w-full hide_nagivation_table pt-3">
                                    <!-- Pagination -->

                                    <nav class="flex items-center justify-center" aria-label="Table navigation">
                                        <ol class="flex justify-center gap-1 text-xs font-medium">
                                            <li>
                                                <a href="#" class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
                                                    <span class="sr-only">Prev Page</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                            </li>

                                            <li class="block h-8 w-8 rounded border-blue-600 bg-blue-600 text-center leading-8 text-white">
                                                1
                                            </li>

                                            <li>
                                                <a href="#" class="block h-8 w-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                                                    2
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="block h-8 w-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                                                    3
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="block h-8 w-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                                                    4
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="block h-8 w-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900">
                                                    5
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180">
                                                    <span class="sr-only">Next Page</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Konten Survey Aksesibilitas Mobile & Dekstop -->
                </div>
            </div>
        </div>



    </div>
</div>
@endsection
