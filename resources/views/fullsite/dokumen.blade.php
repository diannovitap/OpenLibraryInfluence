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
            <h1 class="text-3xl font-bold">DOKUMEN</h1>
            <p class="text-[#FF4500]"><a href="{{ route('katalog.fullsite') }}">Beranda</a> <span
                    class="text-[#585654]">/</span> <a href="{{ route('dokumen.fullsite') }}">Dokumen</a></p>
        </div>
        <div class="bg-[#F4F4F4] px-10 pt-10 pb-20 mt-10 rounded-md">
            <h1 class="text-2xl font-bold text-center">Dokumen</h1>
            <div class="flex justify-between mt-5 gap-10">

                <select id="countries"
                    class="bg-gray-50 border font-medium border-[#F0AD4E] text-gray-900 text-sm rounded-lg focus:ring-[#F0AD4E] focus:border-[#F0AD4E] block w-4/12 px-2.5 py-1">
                    <option selected>Semua Workflow</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
                <select id="countries"
                    class="bg-gray-50 border font-medium border-[#F0AD4E] text-gray-900 text-sm rounded-lg focus:ring-[#F0AD4E] focus:border-[#F0AD4E] block w-4/12 px-2.5 py-1">
                    <option selected>Semua Jenis Pustaka</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
                <select id="countries"
                    class="bg-gray-50 border font-medium border-[#F0AD4E] text-gray-900 text-sm rounded-lg focus:ring-[#F0AD4E] focus:border-[#F0AD4E] block w-4/12 px-2.5 py-1">
                    <option selected>Semua Status</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
                <select id="countries"
                    class="bg-gray-50 border font-medium border-[#F0AD4E] text-gray-900 text-sm rounded-lg focus:ring-[#F0AD4E] focus:border-[#F0AD4E] block w-4/12 px-2.5 py-1">
                    <option selected>Semua Tanggal Pembuatan</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
            </div>
            <div class="flex justify-end gap-5 items-center mt-4">
                <div class="flex items-center bg-white border border-[#757575]   w-2/12 px-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#757575" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <input class="border-0 focus:ring-0 bg-transparent py-1 text-[#757575] w-full" placeholder="Search">
                </div>
                <button class="bg-white px-3 py-1 border border-[#07559F] rounded-lg">New Record</button>
            </div>
            <div>

                <div class="flex gap-1">
                    Prev
                    <button class="bg-white px-3 border border-[#F0AD4E] rounded-md">1</button>
                    <button class="bg-[#F0AD4E] px-3 rounded-md">2</button>
                    <button class="bg-white px-3 border border-[#F0AD4E] rounded-md">3</button>
                    Next
                </div>
                <div class="">

                    <div class="relative overflow-x-auto sm:rounded-lg mt-5">
                        <table class="w-full text-sm text-left">
                            <thead class="text-xs uppercase bg-[#F0AD4E]">
                                <tr>
                                    <th scope="col" class="px-6 py-3 ">
                                        <div class="flex items-center gap-1">
                                            Pembuat
                                            <i class="fa-solid fa-sort-down -mt-2"></i>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Workflow
                                            <a href="#">
                                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 flex justify-center">
                                        <div class="flex items-center">
                                            Judul
                                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        <div class="flex items-center">
                                            Subject
                                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        <div class="flex items-center">
                                            Jenis
                                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        <div class="flex items-center">
                                            Permission
                                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        <div class="flex items-center">
                                            State
                                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        <div class="flex items-center">
                                            Status
                                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 ">
                                        <div class="flex items-center">
                                            Action
                                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                                </svg></a>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="p-5 align-top">
                                <tr class="bg-white text-sm">
                                    <td scope="row"
                                        class="px-3 py-4">
                                        <p>ARIF FIRDAUS NASAPOLA</p>
                                        <p>2023-02-12 17:44:44</p>
                                        <p>ID : 55325</p>
                                    </td>
                                    <td class="px-3 py-4">
                                    Skripsi, Thesis & Tugas Akhir
                                    </td>
                                    <td class="px-3 py-4">
                                    Analisis Kesenjangan Kualitas Layanan Teknologi Informasi Dari Perspektif Pengguna Layanan (Studi Kasus Open Library Telkom University)
                                    </td>
                                    <td class="px-3 py-4">
                                    Machine Learning
                                    </td>
                                    <td class="px-3 py-4">
                                    Karya Ilmiah - Skripsi (S1) - Reference
                                    </td>
                                    <td class="px-3 py-4 flex justify-center">
                                        <img src="/assets/permission.png" alt="Photo of Permission">
                                    </td>
                                    <td class="px-3 py-4">
                                    Metadata Approve for Catalog & Journal Publish Externalas Mahasiswa
                                    </td>
                                    <td class="px-3 py-4">
                                        <button class="border border-[#F0AD4E] px-3 rounded-md">On Going</button>
                                    </td>
                                    <td class="px-3 py-4">
                                        <button class="border border-[#07559F] px-3 rounded-md">Detail</button>
                                    </td>
                                </tr>
                                <tr class="bg-white text-sm">
                                    <td scope="row"
                                        class="px-3 py-4">
                                        <p>ARIF FIRDAUS NASAPOLA</p>
                                        <p>2023-02-12 17:44:44</p>
                                        <p>ID : 55325</p>
                                    </td>
                                    <td class="px-3 py-4">
                                    Skripsi, Thesis & Tugas Akhir
                                    </td>
                                    <td class="px-3 py-4">
                                    Analisis Kesenjangan Kualitas Layanan Teknologi Informasi Dari Perspektif Pengguna Layanan (Studi Kasus Open Library Telkom University)
                                    </td>
                                    <td class="px-3 py-4">
                                    Machine Learning
                                    </td>
                                    <td class="px-3 py-4">
                                    Karya Ilmiah - Skripsi (S1) - Reference
                                    </td>
                                    <td class="px-3 py-4 flex justify-center">
                                        <img src="/assets/permission.png" alt="Photo of Permission">
                                    </td>
                                    <td class="px-3 py-4">
                                    Metadata Approve for Catalog & Journal Publish Externalas Mahasiswa
                                    </td>
                                    <td class="px-3 py-4">
                                        <button class="border border-[#F0AD4E] px-3 rounded-md">On Going</button>
                                    </td>
                                    <td class="px-3 py-4">
                                        <button class="border border-[#07559F] px-3 rounded-md">Detail</button>
                                    </td>
                                </tr>
                                <tr class="bg-white text-sm">
                                    <td scope="row"
                                        class="px-3 py-4">
                                        <p>ARIF FIRDAUS NASAPOLA</p>
                                        <p>2023-02-12 17:44:44</p>
                                        <p>ID : 55325</p>
                                    </td>
                                    <td class="px-3 py-4">
                                    Skripsi, Thesis & Tugas Akhir
                                    </td>
                                    <td class="px-3 py-4">
                                    Analisis Kesenjangan Kualitas Layanan Teknologi Informasi Dari Perspektif Pengguna Layanan (Studi Kasus Open Library Telkom University)
                                    </td>
                                    <td class="px-3 py-4">
                                    Machine Learning
                                    </td>
                                    <td class="px-3 py-4">
                                    Karya Ilmiah - Skripsi (S1) - Reference
                                    </td>
                                    <td class="px-3 py-4 flex justify-center">
                                        <img src="/assets/permission.png" alt="Photo of Permission">
                                    </td>
                                    <td class="px-3 py-4">
                                    Metadata Approve for Catalog & Journal Publish Externalas Mahasiswa
                                    </td>
                                    <td class="px-3 py-4">
                                        <button class="border border-[#F0AD4E] px-3 rounded-md">On Going</button>
                                    </td>
                                    <td class="px-3 py-4">
                                        <button class="border border-[#07559F] px-3 rounded-md">Detail</button>
                                    </td>
                                </tr>
                                <tr class="bg-white text-sm">
                                    <td scope="row"
                                        class="px-3 py-4">
                                        <p>ARIF FIRDAUS NASAPOLA</p>
                                        <p>2023-02-12 17:44:44</p>
                                        <p>ID : 55325</p>
                                    </td>
                                    <td class="px-3 py-4">
                                    Skripsi, Thesis & Tugas Akhir
                                    </td>
                                    <td class="px-3 py-4">
                                    Analisis Kesenjangan Kualitas Layanan Teknologi Informasi Dari Perspektif Pengguna Layanan (Studi Kasus Open Library Telkom University)
                                    </td>
                                    <td class="px-3 py-4">
                                    Machine Learning
                                    </td>
                                    <td class="px-3 py-4">
                                    Karya Ilmiah - Skripsi (S1) - Reference
                                    </td>
                                    <td class="px-3 py-4 flex justify-center">
                                        <img src="/assets/permission.png" alt="Photo of Permission">
                                    </td>
                                    <td class="px-3 py-4">
                                    Metadata Approve for Catalog & Journal Publish Externalas Mahasiswa
                                    </td>
                                    <td class="px-3 py-4">
                                        <button class="border border-[#F0AD4E] px-3 rounded-md">On Going</button>
                                    </td>
                                    <td class="px-3 py-4">
                                        <button class="border border-[#07559F] px-3 rounded-md">Detail</button>
                                    </td>
                                </tr>
                                <tr class="bg-white text-sm">
                                    <td scope="row"
                                        class="px-3 py-4">
                                        <p>ARIF FIRDAUS NASAPOLA</p>
                                        <p>2023-02-12 17:44:44</p>
                                        <p>ID : 55325</p>
                                    </td>
                                    <td class="px-3 py-4">
                                    Skripsi, Thesis & Tugas Akhir
                                    </td>
                                    <td class="px-3 py-4">
                                    Analisis Kesenjangan Kualitas Layanan Teknologi Informasi Dari Perspektif Pengguna Layanan (Studi Kasus Open Library Telkom University)
                                    </td>
                                    <td class="px-3 py-4">
                                    Machine Learning
                                    </td>
                                    <td class="px-3 py-4">
                                    Karya Ilmiah - Skripsi (S1) - Reference
                                    </td>
                                    <td class="px-3 py-4 flex justify-center">
                                        <img src="/assets/permission.png" alt="Photo of Permission">
                                    </td>
                                    <td class="px-3 py-4">
                                    Metadata Approve for Catalog & Journal Publish Externalas Mahasiswa
                                    </td>
                                    <td class="px-3 py-4">
                                        <button class="border border-[#F0AD4E] px-3 rounded-md">On Going</button>
                                    </td>
                                    <td class="px-3 py-4">
                                        <button class="border border-[#07559F] px-3 rounded-md">Detail</button>
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

