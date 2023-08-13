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
            <h1 class="text-3xl font-bold">LAPORAN MAGANG & KP</h1>
            <p class="text-[#FF4500]"><a href="{{ route('katalog.fullsite') }}">Beranda</a> <span
                    class="text-[#585654]">/</span> <a href="{{ route('laporan.fullsite') }}">Laporan Magang & KP</a>
            </p>
        </div>
        <div class="bg-[#F4F4F4] px-10 pt-10 pb-20 mt-10 rounded-md">
            <h1 class="text-2xl font-bold text-center">Laporan Magang & KP</h1>
            <div class="flex flex-col items-end gap-3">

                <div class="flex justify-end mt-5 gap-5 w-3/12">

                    <select id="countries"
                        class="w-2/5 bg-gray-50 border font-medium border-[#F0AD4E] text-gray-900 text-sm rounded-lg focus:ring-[#F0AD4E] focus:border-[#F0AD4E] block px-2.5 py-1">
                        <option selected>Unggah</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                    <button class="bg-white px-3 py-1 border border-[#07559F] rounded-lg w-3/5">Tambah Data</button>

                </div>

                <div class="flex items-center bg-white border w-3/12 border-[#757575] px-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#757575" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <input class="border-0 focus:ring-0 bg-transparent py-1 text-[#757575] w-full" placeholder="Search">
                </div>
            </div>
            <div>

                <div class="flex gap-1">
                    Prev
                    <button class="bg-white px-3 border border-[#F0AD4E] rounded-md">1</button>
                    <button class="bg-[#F0AD4E] px-3 rounded-md">2</button>
                    <button class="bg-white px-3 border border-[#F0AD4E] rounded-md">3</button>
                    Next
                </div>

                <div>

                    <div class="relative overflow-x-auto sm:rounded-lg mt-5">
                        <table class="w-full text-sm text-left">
                            <thead class="text-xs uppercase bg-[#F0AD4E]">
                                <tr>
                                    <th scope="col" class="px-6 py-3 ">
                                        Jenis Laporan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        NIM
                                    </th>
                                    <th scope="col" class="px-6 py-3 flex justify-center">
                                        Mahasiswa
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Program Studi
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Judul Laporan
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Dosen Pembimbing
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Perusahaan
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Bidang Industri
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Alamat
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Pembimbing Lapangan
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Pendidikan
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        Kontak
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white text-sm align-top">
                                    <td scope="row" class="px-3 py-4">
                                        KP
                                    </td>
                                    <td class="px-3 py-4">
                                        1202194043
                                    </td>
                                    <td class="px-3 py-4">
                                        DIAN NOVITASARI PUSPITANINGRUM
                                    </td>
                                    <td class="px-3 py-4">
                                        S1 Sistem Informasi
                                    </td>
                                    <td class="px-3 py-4">
                                        Perancangan Aplikasi Pembuatan Penomoran Surat Otomatis Berbasis Web Menggunakan
                                        Framework Laravel di PT Dayamitra Telekomunikasi TBk. (Mitratel) Regional Office
                                        Jawa Barat
                                    </td>
                                    <td class="px-3 py-4 flex justify-center">
                                        ARI FAJAR SANTOSO
                                    </td>
                                    <td class="px-3 py-4">
                                        PT Dayamitra Telekomunikasi TBk. (Mitratel) Regional Office Jawa Barat
                                    </td>
                                    <td class="px-3 py-4">
                                        Pembangunan Infrastruktur Telekomunikasi
                                    </td>
                                    <td class="px-3 py-4">
                                        Gedung Graha Telkom Lt 2 Jl. Japati No.1 Kelurahan Sadang Serang, Kecamatan
                                        Coblong, Kota Bandung, Jawa Barat 40133
                                    </td>
                                    <td class="px-3 py-4">Dian Nugraha
                                        Officer Performance Project Deployment & OM Jabar
                                    </td>
                                    <td class="px-3 py-4">
                                        S1
                                    </td>
                                    <td class="px-3 py-4">
                                        081224322222 dian.nugraha@mitratel.co.id
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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

