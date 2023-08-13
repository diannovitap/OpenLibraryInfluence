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
            <p class="text-[#FF4500]"><a href="{{route('katalog.fullsite')}}">Beranda</a> <span class="text-[#585654]">/</span> <a
                    href="{{ route('informasi.fullsite') }}">Informasi</a></p>
        </div>
        <div class="bg-[#F4F4F4] px-10 pt-10 pb-20 mt-10 rounded-md">
            <h1 class="text-2xl font-bold text-center">Informasi</h1>

            <div class="relative overflow-x-auto sm:rounded-lg mt-10">
                <table class="w-full text-sm text-left">
                    <thead class="text-xs uppercase bg-[#F0AD4E]">
                        <tr>
                            <th scope="col" class="px-6 py-3  text-center">
                                Judul
                            </th>
                            <th scope="col" class="px-6 py-3 text-center">
                                Berita
                            </th>
                            <th scope="col" class="px-6 py-3 w-2/12 text-center">
                                Tanggal
                            </th>
                    </thead>
                    <tbody>
                        <tr class="bg-white text-sm border-b border-[#938C8C]">
                            <td scope="row" class="px-4 py-4">
                                <a href="{{route('informasi-layanan.fullsite')}}">Layanan Document Delivery
                                    Service</a>
                            </td>
                            <td class="px-4 py-4">
                                Document delivery service (DDS) Document delivery service (DDS) adalah layanan...
                            </td>
                            <td class="px-4 py-4 text-center">
                                30 June 2023
                            </td>
                        </tr>
                        <tr class="bg-white text-sm border-b border-[#938C8C]">
                            <td scope="row" class="px-4 py-4">
                                <a href="{{route('informasi-telkatika.fullsite')}}">User Guide Author dan Reviewer
                                    Jurnal TELKATIKA</a>
                            </td>
                            <td class="px-4 py-4">
                                User Guide Submit Jurnal TELKATIKA untuk Author User Guide Jurnal...
                            </td>
                            <td class="px-4 py-4 text-center">
                                30 June 2023
                            </td>
                        </tr>
                        <tr class="bg-white text-sm border-b border-[#938C8C]">
                            <td scope="row" class="px-4 py-4">
                                <a href="{{route('informasi-peminjamanbuku.fullsite')}}">Peminjaman Buku melalui
                                    Delivery Service</a>
                            </td>
                            <td class="px-4 py-4">
                                Silahkan untuk mengisi form Peminjaman terlebih dahulu melalui tautan: bit.ly/...
                            </td>
                            <td class="px-4 py-4 text-center">
                                30 June 2023
                            </td>
                        </tr>
                        <tr class="bg-white text-sm border-b border-[#938C8C]">
                            <td scope="row" class="px-4 py-4">
                                <a href="{{route('informasi-openlibrary.fullsite')}}">Open Library Book Review
                                    Competition</a>
                            </td>
                            <td class="px-4 py-4">
                                Open Library Book Review Competition Hadiah Lomba Juara 1 : Trofi,...
                            </td>
                            <td class="px-4 py-4 text-center">
                                30 June 2023
                            </td>
                        </tr>
                        <tr class="bg-white text-sm border-b border-[#938C8C]">
                            <td scope="row" class="px-4 py-4">
                                <a href="{{route('informasi-sbkp.fullsite')}}">Surat Bebas Kewajiban Perpustakaan
                                    (SBKP)</a>
                            </td>
                            <td class="px-4 py-4">
                                Surat Bebas Kewajiban Perpustakaan (SBKP) 1. Sosialisasi Tugas Akhir Mahasiswa...
                            </td>
                            <td class="px-4 py-4 text-center">
                                30 June 2023
                            </td>
                        </tr>
                        <tr class="bg-white text-sm border-b border-[#938C8C]">
                            <td scope="row" class="px-4 py-4">
                                <a href="{{route('informasi-similarity.fullsite')}}">Fasilitas Cek Similarity,
                                    iThenticate dan Turnitin</a>
                            </td>
                            <td class="px-4 py-4">

                            </td>
                            <td class="px-4 py-4 text-center">
                                30 June 2023
                            </td>
                        </tr>
                        <tr class="bg-white text-sm border-b border-[#938C8C]">
                            <td scope="row" class="px-4 py-4">
                                <a href="{{route('informasi-standar.fullsite')}}">Standar Layanan Open Library</a>
                            </td>
                            <td class="px-4 py-4">
                                Standar Layanan Open Library
                            </td>
                            <td class="px-4 py-4 text-center">
                                30 June 2023
                            </td>
                        </tr>
                        <tr class="bg-white text-sm border-b border-[#938C8C]">
                            <td scope="row" class="px-4 py-4">
                                <a href="{{route('informasi-electronicbook.fullsite')}}">Cara Akses Koleksi
                                    Electronic Book Open Library</a>
                            </td>
                            <td class="px-4 py-4">
                                TUTORIAL CARA AKSES KOLEKSI ELECTRONIC BOOK OPEN LIBRARY
                            </td>
                            <td class="px-4 py-4 text-center">
                                30 June 2023
                            </td>
                        </tr>
                        <tr class="bg-white text-sm border-b border-[#938C8C]">
                            <td scope="row" class="px-4 py-4">
                                <a href="{{route('informasi-assistive.fullsite')}}">Layanan Assistive Technology</a>
                            </td>
                            <td class="px-4 py-4">
                                Infografis Assistive Technology Service Layanan ini memiliki fitur yang dapat...
                            </td>
                            <td class="px-4 py-4 text-center">
                                30 June 2023
                            </td>
                        </tr>
                        <tr class="bg-white text-sm border-b border-[#938C8C] pb-10">
                            <td scope="row" class="px-4 py-4">
                                <a href="{{route('informasi-scopus.fullsite')}}"> Cara Akses Scopus</a>
                            </td>
                            <td class="px-4 py-4">
                                Mulai tanggal 1 September 2022, seluruh Civitas Akademika Tel-U...
                            </td>
                            <td class="px-4 py-4 text-center">
                                30 June 2023
                            </td>
                        </tr>
                        <tr class="bg-white text-sm">
                            <td></td>
                            <td></td>
                            <td colspan="3" class="px-4 py-4 gap-2 justify-end margin-">

                                Prev
                                <button class="bg-white px-3 border border-[#F0AD4E] rounded-md">1</button>
                                <button class="bg-[#F0AD4E] px-3 rounded-md">2</button>
                                <button class="bg-white px-3 border border-[#F0AD4E] rounded-md">3</button>
                                Next
                            </td>
                        </tr>
                    </tbody>
                </table>
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

