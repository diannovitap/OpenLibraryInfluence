<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="/assets/logo.png">

        <title>{{ config('Oplib', 'Oplib') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
        <style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap');
</style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-inter">
        <div class="min-h-screen">
            @include('layouts.fullsitenavigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
    <div class="p-16">

        <div>
            <h1 class="text-3xl font-bold">INFORMASI</h1>
            <p class="text-[#FF4500]"><a href="{{ route('katalog.fullsite') }}">Beranda</a> <span
                    class="text-[#585654]">/</span> <a href="{{ route('informasi.fullsite') }}">Informasi</a> <span
                    class="text-[#585654]">/</span> <span class="text-[#938C8C]">Detail</span>
            </p>
        </div>
        <div class="bg-[#F4F4F4] px-10 pt-10 pb-20 mt-10 rounded-md">
            <h1 class="text-2xl font-bold text-center">Standar Layanan Open Library</h1>
            <div class="flex gap-10 mt-10">
                <div class="bg-white rounded-lg w-9/12 p-5">
                    <h1 class="text-xl font-bold">Standar Layanan Open Library</h1>
                    <div class="flex justify-center mt-10">
                        <img src="/assets/standar.png" alt="Photo of Standar Layanan Open Library">
                    </div>
                </div>
                <div class="w-3/12">
                    <div>
                        <div class="bg-[#F0AD4E] py-2 text-center font-medium rounded-t-lg">Timestampable</div>
                        <div class="bg-white py-3 font-medium rounded-b-lg">
                            <div class="flex">
                                <p class="text-center w-1/2 mb-3">Created</p>
                                <p class="text-center w-1/2">02 June 2023</p>
                            </div>
                            <div class="flex">
                                <p class="text-center w-1/2">Updated</p>
                                <p class="text-center w-1/2">02 June 2023</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <div class="bg-[#F0AD4E] py-2 text-center font-medium rounded-t-lg">Berita</div>
                        <div class="bg-white py-3 font-medium rounded-b-lg">
                            <ul class="text-sm p-3">
                                <li class="leading-tight">Newsletter Open Library edisi bulan Mei dapat diunduh disini
                                </li>
                                <li class="mt-3 leading-tight">Open Library Book Review Competition Hadiah Lomba Juara 1
                                    : Trofi,...</li>
                                <li class="mt-3 leading-tight">Surat Bebas Kewajiban Perpustakaan (SBKP) 1. Sosialisasi
                                    Tugas Akhir Mahasiswa...</li>
                                <li class="mt-3 leading-tight">Telkom University Open Library Telkom University Open
                                    Library adalah brand...</li>
                                <li class="mt-3 leading-tight">Dalam rangka melaksanakan ketentuan Pasal 46 Ayat (2)
                                    Undang-Undang...</li>
                                <li class="mt-3 leading-tight">Open Library Digital Reading AreaPada Digital Reading
                                    Area, Open...</li>
                                <li class="mt-3 leading-tight">Infografis Assistive Technology Service Layanan ini
                                    memiliki fitur yang dapat...</li>
                                <li class="mt-3 leading-tight">Newsletter Open Library edisi bulan April dapat diunduh
                                    disini</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#F0AD4E]">
        <h1 class="flex items-center justify-center text-2xl font-bold text-white" style="height: 10vh;">
            Copyright@2023 - Telkom University Open Library</h1>
    </div>
    </main>
        </div>
    </body>
</html>

