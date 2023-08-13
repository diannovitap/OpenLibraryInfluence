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
                    <h1 class="text-3xl font-bold">TENTANG KAMI</h1>
                    <p class="text-[#FF4500]"><a href="/">Beranda</a> <span class="text-[#585654]">/</span> <a
                            href="{{ route('tentangkami.index') }}">Tentang Kami</a></p>
                </div>
                <div class="bg-[#F4F4F4] px-10 pt-10 pb-20 mt-10 rounded-md">
                    <h1 class="text-2xl font-bold text-center">Profil SDK & Perpustakaan</h1>
                    <div class="mt-5">
                        <div class="">
                            <h1 class="font-bold text-xl">Visi</h1>
                            <p>Menjadi leader dari pusat keilmuan dengan tata kelola berkelas dunia</p>
                        </div>
                        <div class="mt-5">
                            <h1 class="font-bold text-xl">Misi</h1>
                            <ul class="list-disc pl-5">
                                <li>Berperan aktif dalam melakukan akuisisi pengetahuan, mengelola pengetahuan, dan
                                    berbagi
                                    pengetahuan</li>
                                <li>Berperan aktif dalam meningkatkan minat baca dan tulis di masyarakat</li>
                                <li>Bekerja sama dengan semua institusi yang memiliki visi yang sama</li>
                            </ul>
                        </div>
                        <div class="mt-5">
                            <h1 class="font-bold text-xl">Open Library</h1>
                            <ul class="list-disc pl-5">
                                <li>Open untuk menerima semua jenis knowledge</li>
                                <li>Open untuk berbagi knowledge dengan knowledge management lain</li>
                                <li>Open untuk semua siapa pun yang ingin belajar</li>
                            </ul>
                        </div>
                        <div class="mt-5">
                            <h1 class="font-bold text-xl">Kontak:</h1>
                            <ul class="list-disc pl-5">
                                <li>Website: <a
                                        href="http://library.telkomuniversity.ac.id">http://library.telkomuniversity.ac.id</a>
                                </li>
                                <li>Katalog: <a
                                        href="http://openlibrary.telkomuniversity.ac.id">http://openlibrary.telkomuniversity.ac.id</a>
                                </li>
                                <li>Email: <a href="library@telkomuniversity.ac.id">library@telkomuniversity.ac.id</a>
                                </li>
                                <li>Facebook: <a
                                        href="https://www.facebook.com/TelkomOpenLibrary">https://www.facebook.com/TelkomOpenLibrary</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
