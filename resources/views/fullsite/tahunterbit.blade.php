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
            <h1 class="text-3xl font-bold">TAHUN TERBIT</h1>
            <p class="text-[#FF4500]"><a href="{{ route('katalog.fullsite') }}">Beranda</a> <span
                    class="text-[#585654]">/</span> <a href="{{ route('tahunterbit.fullsite') }}">Tahun Terbit</a>
            </p>
        </div>
        <div class="bg-[#F4F4F4] px-10 pt-10 pb-20 mt-10 rounded-md">
            <h1 class="text-2xl font-bold text-center">Tahun Terbit Katalog</h1>
            <div class="mt-8 grid grid-cols-6 gap-x-20 gap-y-6 px-20">

                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">0 (963)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1900 (1)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1919 (6)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1939 (1)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1941 (1)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1950 (1)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1951 (1)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1954 (1)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1955 (1)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1956 (1)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1957 (1)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1959 (1)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1960 (1)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1961 (2)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1963 (10)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1964 (70)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1965 (42)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1966 (39)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1967 (33)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1968 (25)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1969 (18)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1970 (38)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1971 (45)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1972 (43)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1973 (109)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1974 (37)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1975 (56)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1976 (47)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1977 (47)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1978 (87)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1979 (92)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1980 (137)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1981 (180)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1982 (139)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1983 (163)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1984 (264)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1985 (277)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1986 (368)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1987 (444)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1988 (512)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1989 (726)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1990 (1296)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1991 (922)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1992 (840)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1993 (704)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1994 (769)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1995 (1107)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1996 (816)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1997 (821)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1998 (680)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">1999 (969)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2000 (1424)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2001 (1341)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2002 (1556)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2003 (1737)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2004 (2272)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2005 (2512)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2006 (3062)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2007 (3297)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2008 (3602)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2009 (3845)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2010 (4345)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2011 (5263)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2012 (5276)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2013 (7725)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2014 (6553)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2015 (5297)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2016 (5139)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2017 (7298)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2018 (6817)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2019 (9594)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2020 (9008)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2021 (9261)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2022 (6225)</button>
                <button class="bg-white border border-[#F0AD4E] font-medium rounded-md">2023 (4181)</button>
                
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

