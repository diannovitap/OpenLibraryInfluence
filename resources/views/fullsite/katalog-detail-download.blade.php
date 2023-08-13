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
        <div class="">
            <h1 class="text-3xl font-bold">KATALOG</h1>
            <p class="text-[#FF4500]"><a href="{{ route('katalog.fullsite') }}">Beranda</a> <span
                    class="text-[#585654]">/</span> <a href="{{ route('katalog.fullsite') }}">Katalog</a> <span
                    class="text-[#585654]">/</span> <span class="text-[#938C8C]">Detail</span></p>
        </div>
        <div class="mt-10">
            <div class="bg-[#B22222] text-white text-xl font-bold py-5 pl-16 rounded-t-lg">
                Telkom University Open Library
            </div>
            <div class="bg-[#F4F4F4] px-10 pt-10 pb-20">
                <img src="/assets/dokumen.png" alt="Photo of Dokumen">
            </div>
            <div class="bg-[#B22222] text-white text-xl flex justify-center items-center gap-2 font-bold py-5 pl-16 rounded-b-lg">
                <img class="cursor-pointer" src="/assets/download/plus.png" alt="">
                <img class="cursor-pointer" src="/assets/download/minus.png" alt="">
                <img class="cursor-pointer" src="/assets/download/play.png" alt="">
                <img class="cursor-pointer" src="/assets/download/select.png" alt="">
                <img class="mx-1 cursor-pointer" src="/assets/download/save.png" alt="">
                <img class="cursor-pointer" src="/assets/download/list.png" alt="">
                <img class="mx-1 cursor-pointer" src="/assets/download/multiple.png" alt="">
                <img class="cursor-pointer" src="/assets/download/pdf.png" alt="">
                <img class="mx-1 cursor-pointer" src="/assets/download/volume.png" alt="">
                <img class="cursor-pointer" src="/assets/download/fullscreen.png" alt="">
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

