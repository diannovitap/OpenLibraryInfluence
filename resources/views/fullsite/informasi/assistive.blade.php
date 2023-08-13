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
                            class="text-[#585654]">/</span> <a href="{{ route('informasi.fullsite') }}">Informasi</a>
                        <span class="text-[#585654]">/</span> <span class="text-[#938C8C]">Detail</span>
                    </p>
                </div>
                <div class="bg-[#F4F4F4] px-10 pt-10 pb-20 mt-10 rounded-md">
                    <h1 class="text-2xl font-bold text-center">Layanan Assistive Technology</h1>
                    <div class="flex gap-10 mt-10">
                        <div class="bg-white rounded-lg w-9/12 px-12 py-5">
                            <h1 class="text-xl font-bold">Layanan Assistive Technology</h1>
                            <div class="mt-5 font-medium">
                                <p>Layanan ini memiliki fitur yang dapat mengubah bahan text bacaan menjadi bentuk
                                    audio,
                                    sehingga TelUtizen bisa membaca buku dan mendengarkan audionya secara bersamaan.
                                    Selain
                                    dapat memahami teks melalui fitur audio, layanan ini juga dapat membantu rekan-rekan
                                    yang
                                    memiliki gangguan penglihatan dalam memahami teks bacaan, khususnya pada platform
                                    digital.
                                </p>
                                <br>
                                <ul class="list-disc pl-5">

                                    <li><span class="font-bold">Assistive Technology Service</span> merupakan layanan
                                        pendukung
                                        literasi yang dapat digunakan
                                        untuk
                                        mengubah text e-book menjadi audio, sebagai alat bantu dalam memahami kata-kata
                                        asing
                                        (Bahasa Inggris), alat penunjang penelitian ilmiah, alat bantu pengecekan
                                        tulisan Bahasa
                                        inggris, serta dapat digunakan untuk user yg memiliki keterbatasan pada
                                        penglihatan (low
                                        vision).</li>
                                    <li><span class="font-bold">Text to Speech</span> : Fitur untuk mengubah teks
                                        dokumen atau
                                        buku elektronik yang dibaca atau
                                        diketik, menjadi audio yang dilengkapi dengan fitur highlight untuk memberikan
                                        tanda
                                        warna
                                        atau block pada teks yang tersedia.</li>
                                    <li><span class="font-bold">Check It</span> : Fitur yang dapat digunakan untuk
                                        memberikan
                                        ulasan penulisan tata bahasa,
                                        ejaan
                                        (fonetik), kapitalisasi, dan tanda baca pada penulisan teks bahasa Inggris.</li>
                                    <li><span class="font-bold">Audio Maker</span> : fitur yang dapat digunakan untuk
                                        mengonversi bentuk media teks menjadi
                                        audio
                                        yang dapat diunduh secara gratis</li>
                                    <li><span class="font-bold">Translator</span> : Fitur yang mampu menerjemahkan
                                        bentuk media
                                        teks kedalam berbagai bahasa.
                                    </li>

                                </ul>
                                <div class="flex justify-center gap-4 mt-5">
                                    <img src="/assets/assistive1.png" alt="Photo of Assistive Technology">
                                    <img src="/assets/assistive2.png" alt="Photo of Assistive Technology">
                                </div>
                                <div class="flex justify-center gap-4 my-4">
                                    <img src="/assets/assistive3.png" alt="Photo of Assistive Technology">
                                    <img src="/assets/assistive4.png" alt="Photo of Assistive Technology">
                                </div>

                            </div>
                        </div>
                        <div class="w-3/12">
                            <div>
                                <div class="bg-[#F0AD4E] py-2 text-center font-medium rounded-t-lg">Timestampable</div>
                                <div class="bg-white py-3 font-medium rounded-b-lg">
                                    <div class="flex">
                                        <p class="text-center w-1/2 mb-3">Created</p>
                                        <p class="text-center w-1/2">09 January 2023</p>
                                    </div>
                                    <div class="flex">
                                        <p class="text-center w-1/2">Updated</p>
                                        <p class="text-center w-1/2">23 May 2023</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10">
                                <div class="bg-[#F0AD4E] py-2 text-center font-medium rounded-t-lg">Berita</div>
                                <div class="bg-white py-3 font-medium rounded-b-lg">
                                    <ul class="text-sm p-3">
                                        <li class="leading-tight">Newsletter Open Library edisi bulan Mei dapat diunduh
                                            disini
                                        </li>
                                        <li class="mt-3 leading-tight">Open Library Book Review Competition Hadiah Lomba
                                            Juara 1
                                            : Trofi,...</li>
                                        <li class="mt-3 leading-tight">Surat Bebas Kewajiban Perpustakaan (SBKP) 1.
                                            Sosialisasi
                                            Tugas Akhir Mahasiswa...</li>
                                        <li class="mt-3 leading-tight">Telkom University Open Library Telkom University
                                            Open
                                            Library adalah brand...</li>
                                        <li class="mt-3 leading-tight">Dalam rangka melaksanakan ketentuan Pasal 46 Ayat
                                            (2)
                                            Undang-Undang...</li>
                                        <li class="mt-3 leading-tight">Open Library Digital Reading AreaPada Digital
                                            Reading
                                            Area, Open...</li>
                                        <li class="mt-3 leading-tight">Infografis Assistive Technology Service Layanan
                                            ini
                                            memiliki fitur yang dapat...</li>
                                        <li class="mt-3 leading-tight">Newsletter Open Library edisi bulan April dapat
                                            diunduh
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
