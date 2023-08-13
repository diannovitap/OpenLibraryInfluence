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
            <h1 class="text-3xl font-bold">KATALOG</h1>
            <p class="text-[#FF4500]"><a href="{{ route('katalog.fullsite') }}">Beranda</a> <span class="text-[#585654]">/</span> <a
                    href="{{ route('katalog.fullsite') }}">Katalog</a></p>
        </div>
        <div class="bg-[#F4F4F4] px-10 pt-10 pb-20 mt-10 rounded-md">
            <h1 class="text-2xl font-bold text-center">Katalog</h1>
            <div class="flex justify-between items-center mt-5">
                <div class="flex gap-3">
                    <div class="flex items-center bg-white border border-[#FF4500] rounded-md h-fit px-1">
                        <input class="bg-transparent border-0 focus:ring-0 -my-1" type="text" placeholder="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                    <button data-modal-target="staticModal" data-modal-toggle="staticModal"
                        class="bg-[#FF4500] text-white px-2 py-1 rounded-md h-fit">Advance Search</button>

                    <!-- Main modal -->
                    <div id="staticModal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden  w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div class="flex items-start justify-between p-4 rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-center text-gray-900">
                                        Pencarian Detail Katalog
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="staticModal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <form action="">
                                        <div class="">
                                            <x-input-label class="font-bold" for="jeniskatalog"
                                                :value="__('Jenis Katalog')" />

                                            <select class="w-full text-sm rounded-md border border-[#F0AD4E]"
                                                name="jeniskatalog" id="jeniskatalog">
                                                <option value="">Pilih Jenis Katalog</option>
                                                <option value="Karya Ilmiah - Skripsi - Reference">Karya Ilmiah - Skripsi S1 - Reference</option>
                                                <option value="Karya Ilmiah - Skripsi - Reference">Karya Ilmiah - Skripsi S1 - Reference</option>
                                                <option value="Karya Ilmiah - Skripsi - Reference">Karya Ilmiah - Skripsi S1 - Reference</option>
                                            </select>
                                        </div>
                                        <div class="mt-2">
                                            <x-input-label class="font-bold" for="nokatalog"
                                                :value="__('No. Katalog')" />
                                            <input id="nokatalog"
                                                class="block text-sm mt-1 w-full border border-[#F0AD4E] rounded-md"
                                                type="text" name="nokatalog" :value="old('nokatalog')" required
                                                autofocus autocomplete="nokatalog" placeholder="No. Katalog" />
                                            <x-input-error :messages="$errors->get('nokatalog')" class="mt-2" />
                                        </div>
                                        <div class="mt-2">
                                            <x-input-label class="font-bold" for="judulkatalog"
                                                :value="__('Judul Katalog')" />
                                            <input id="judulkatalog"
                                                class="block text-sm mt-1 w-full border border-[#F0AD4E] rounded-md"
                                                type="text" name="judulkatalog" :value="old('judulkatalog')" required
                                                autofocus autocomplete="judulkatalog" placeholder="Judul Katalog" />
                                            <x-input-error :messages="$errors->get('nokatalog')" class="mt-2" />
                                        </div>
                                        <div class="mt-2">
                                            <x-input-label class="font-bold" for="pengarang" :value="__('Pengarang')" />
                                            <input id="pengarang"
                                                class="block text-sm mt-1 w-full border border-[#F0AD4E] rounded-md"
                                                type="text" name="pengarang" :value="old('pengarang')" required
                                                autofocus autocomplete="pengarang" placeholder="Username" />
                                            <x-input-error :messages="$errors->get('pengarang')" class="mt-2" />
                                        </div>
                                        <div class="mt-2">
                                            <x-input-label class="font-bold" for="penerbit" :value="__('Peneribit')" />
                                            <input id="penerbit"
                                                class="block text-sm mt-1 w-full border border-[#F0AD4E] rounded-md"
                                                type="text" name="penerbit" :value="old('penerbit')" required autofocus
                                                autocomplete="penerbit" placeholder="Username" />
                                            <x-input-error :messages="$errors->get('penerbit')" class="mt-2" />
                                        </div>
                                        <div class="mt-2">
                                            <x-input-label class="font-bold" for="penyuntingan"
                                                :value="__('Penyunting/Pembimbing')" />
                                            <input id="penyuntingan"
                                                class="block text-sm mt-1 w-full border border-[#F0AD4E] rounded-md"
                                                type="text" name="penyuntingan" :value="old('penyuntingan')" required
                                                autofocus autocomplete="penyuntingan"
                                                placeholder="Nama Penyunting / Nama Pembimbing" />
                                            <x-input-error :messages="$errors->get('penyuntingan')" class="mt-2" />
                                        </div>
                                        <div class="mt-2">
                                            <x-input-label class="font-bold" for="Subjek" :value="__('Subjek')" />
                                            <input id="Subjek"
                                                class="block text-sm mt-1 w-full border border-[#F0AD4E] rounded-md"
                                                type="text" name="Subjek" :value="old('Subjek')" required autofocus
                                                autocomplete="Subjek" placeholder="Username" />
                                            <x-input-error :messages="$errors->get('Subjek')" class="mt-2" />
                                        </div>
                                        <div class="mt-2">
                                            <x-input-label class="font-bold" for="=kodeklarifikasi"
                                                :value="__('Kode Klasifikasi')" />
                                            <input id="=kodeklarifikasi"
                                                class="block text-sm mt-1 w-full border border-[#F0AD4E] rounded-md"
                                                type="text" name="=kodeklarifikasi" :value="old('=kodeklarifikasi')"
                                                required autofocus autocomplete="=kodeklarifikasi"
                                                placeholder="Kode Klasifikasi Katalog" />
                                            <x-input-error :messages="$errors->get('=kodeklarifikasi')" class="mt-2" />
                                        </div>
                                        <div class="mt-2">
                                            <x-input-label class="font-bold" for="lokasi" :value="__('Lokasi')" />

                                            <select class="w-full text-sm rounded-md border border-[#F0AD4E]"
                                                name="lokasi" id="lokasi">
                                                <option value="">Lokasi</option>
                                                <option value="Bandung">Bandung</option>
                                                <option value="Jakarta">Jakarta</option>
                                                <option value="Purwokerto">Purwokerto</option>
                                            </select>
                                        </div>
                                        <x-input-label class="font-bold mt-1" for="lokasi"
                                            :value="__('Tanggal Masuk')" />
                                        <div class="mt-2 flex justify-between">
                                            <div class="">
                                                <x-input-label class="font-bold" for="lokasi" :value="__('Dari :')" />
                                                <div class="relative max-w-sm">
                                                    <!-- <x-input-label class="font-bold" for="lokasi" :value="__('Dari :')" /> -->
                                                    <div
                                                        class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none mt-1">
                                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 20 20">
                                                            <path
                                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                        </svg>
                                                    </div>
                                                    <input datepicker type="text"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                                                        placeholder="Select date">
                                                </div>
                                            </div>
                                            <div class="">
                                                <x-input-label class="font-bold" for="lokasi" :value="__('Sampai :')" />

                                                <div class="relative max-w-sm">
                                                    <!-- <x-input-label class="font-bold" for="lokasi" :value="__('Sampai :')" /> -->
                                                    <div
                                                        class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none mt-1">
                                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="currentColor" viewBox="0 0 20 20">
                                                            <path
                                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                        </svg>
                                                    </div>
                                                    <input datepicker type="text"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                                                        placeholder="Select date">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end gap-7 mt-3">
                                            <button
                                                class="border border-[#FF4500] py-2 px-4 rounded-md">Bersihkan</button>
                                            <a class="bg-[#FF4500] py-2 px-8 text-white rounded-md" href="{{route('katalog.fullsite')}}">Cari</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <button
                    class="bg-white border w-fit border-[#0E9302] flex items-center gap-2 h-fit font-bold py-1 px-2 rounded-md">
                    <p>Permintaan Katalog</p>
                </button>
            </div>
            <div class="grid grid-cols-2 mt-5 gap-8">
                <div class="flex gap-3">

                    <div class="bg-white p-1 w-4/12">
                        <img class="w-full" src="/assets/telucollection.png" alt="Photo of Tel-U Collection">
                    </div>
                    <div class="w-8/12">
                        <div class="text text-[#07559F] font-medium">
                            Pengaruh Efisiensi Operasional, Tata Kelola Perusahaan, dan Intellectual Capital Terhadap
                            Nilai Perusahaan (Studi pada Perusahaan Indeks Saham IDX BUMN20 Tahun 2018-2021)
                        </div>
                        <div class="my-1 text-sm">

                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <p>DEKRI ARDIANSYAH</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                </svg>
                                <p>Universitas Telkom, Akuntansi, 2023</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                </svg>
                                <p>Auditing</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                                <p>Karya Ilmiah - Skripsi (S1) - Reference - Non-Sirkulasi</p>
                            </div>
                        </div>
                        <p class="italic text-sm">Accounting and Finance</p>

                        <div class="mt-2 text-sm">
                            <p>Tersedia 1 koleksi</p>
                            <p class="text-[#07559F]">Tersedia 21 file download</p>
                        </div>
                        <a href="{{ route('katalogdetail.fullsite') }}">
                            <button class="py-1 px-7 border-2 border-[#07559F] rounded-md mt-2">Detail</button>
                        </a>
                    </div>
                </div>
                <div class="flex gap-3">

                    <div class="bg-white p-1 w-4/12">
                        <img class="w-full" src="/assets/telucollection.png" alt="Photo of Tel-U Collection">
                    </div>
                    <div class="w-8/12">
                        <div class="text text-[#07559F] font-medium">
                            Pengaruh Efisiensi Operasional, Tata Kelola Perusahaan, dan Intellectual Capital Terhadap
                            Nilai Perusahaan (Studi pada Perusahaan Indeks Saham IDX BUMN20 Tahun 2018-2021)
                        </div>
                        <div class="my-1 text-sm">

                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <p>DEKRI ARDIANSYAH</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                </svg>
                                <p>Universitas Telkom, Akuntansi, 2023</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                </svg>
                                <p>Auditing</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                                <p>Karya Ilmiah - Skripsi (S1) - Reference - Non-Sirkulasi</p>
                            </div>
                        </div>
                        <p class="italic text-sm">Accounting and Finance</p>

                        <div class="mt-2 text-sm">
                            <p>Tersedia 1 koleksi</p>
                            <p class="text-[#07559F]">Tersedia 21 file download</p>
                        </div>
                        <a href="{{ route('katalogdetail.fullsite') }}">
                            <button class="py-1 px-7 border-2 border-[#07559F] rounded-md mt-2">Detail</button>
                        </a>
                    </div>
                </div>
                <div class="flex gap-3">

                    <div class="bg-white p-1 w-4/12">
                        <img class="w-full" src="/assets/telucollection.png" alt="Photo of Tel-U Collection">
                    </div>
                    <div class="w-8/12">
                        <div class="text text-[#07559F] font-medium">
                            Pengaruh Efisiensi Operasional, Tata Kelola Perusahaan, dan Intellectual Capital Terhadap
                            Nilai Perusahaan (Studi pada Perusahaan Indeks Saham IDX BUMN20 Tahun 2018-2021)
                        </div>
                        <div class="my-1 text-sm">

                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <p>DEKRI ARDIANSYAH</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                </svg>
                                <p>Universitas Telkom, Akuntansi, 2023</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                </svg>
                                <p>Auditing</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                                <p>Karya Ilmiah - Skripsi (S1) - Reference - Non-Sirkulasi</p>
                            </div>
                        </div>
                        <p class="italic text-sm">Accounting and Finance</p>

                        <div class="mt-2 text-sm">
                            <p>Tersedia 1 koleksi</p>
                            <p class="text-[#07559F]">Tersedia 21 file download</p>
                        </div>
                        <a href="{{ route('katalogdetail.fullsite') }}">
                            <button class="py-1 px-7 border-2 border-[#07559F] rounded-md mt-2">Detail</button>
                        </a>
                    </div>
                </div>
                <div class="flex gap-3">

                    <div class="bg-white p-1 w-4/12">
                        <img class="w-full" src="/assets/telucollection.png" alt="Photo of Tel-U Collection">
                    </div>
                    <div class="w-8/12">
                        <div class="text text-[#07559F] font-medium">
                            Pengaruh Efisiensi Operasional, Tata Kelola Perusahaan, dan Intellectual Capital Terhadap
                            Nilai Perusahaan (Studi pada Perusahaan Indeks Saham IDX BUMN20 Tahun 2018-2021)
                        </div>
                        <div class="my-1 text-sm">

                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <p>DEKRI ARDIANSYAH</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                </svg>
                                <p>Universitas Telkom, Akuntansi, 2023</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                </svg>
                                <p>Auditing</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                                <p>Karya Ilmiah - Skripsi (S1) - Reference - Non-Sirkulasi</p>
                            </div>
                        </div>
                        <p class="italic text-sm">Accounting and Finance</p>

                        <div class="mt-2 text-sm">
                            <p>Tersedia 1 koleksi</p>
                            <p class="text-[#07559F]">Tersedia 21 file download</p>
                        </div>
                        <a href="{{ route('katalogdetail.fullsite') }}">
                            <button class="py-1 px-7 border-2 border-[#07559F] rounded-md mt-2">Detail</button>
                        </a>
                    </div>
                </div>
                <div class="flex gap-3">

                    <div class="bg-white p-1 w-4/12">
                        <img class="w-full" src="/assets/telucollection.png" alt="Photo of Tel-U Collection">
                    </div>
                    <div class="w-8/12">
                        <div class="text text-[#07559F] font-medium">
                            Pengaruh Efisiensi Operasional, Tata Kelola Perusahaan, dan Intellectual Capital Terhadap
                            Nilai Perusahaan (Studi pada Perusahaan Indeks Saham IDX BUMN20 Tahun 2018-2021)
                        </div>
                        <div class="my-1 text-sm">

                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <p>DEKRI ARDIANSYAH</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                </svg>
                                <p>Universitas Telkom, Akuntansi, 2023</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                </svg>
                                <p>Auditing</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                                <p>Karya Ilmiah - Skripsi (S1) - Reference - Non-Sirkulasi</p>
                            </div>
                        </div>
                        <p class="italic text-sm">Accounting and Finance</p>

                        <div class="mt-2 text-sm">
                            <p>Tersedia 1 koleksi</p>
                            <p class="text-[#07559F]">Tersedia 21 file download</p>
                        </div>
                        <a href="{{ route('katalogdetail.fullsite') }}">
                            <button class="py-1 px-7 border-2 border-[#07559F] rounded-md mt-2">Detail</button>
                        </a>
                    </div>
                </div>
                <div class="flex gap-3">

                    <div class="bg-white p-1 w-4/12">
                        <img class="w-full" src="/assets/telucollection.png" alt="Photo of Tel-U Collection">
                    </div>
                    <div class="w-8/12">
                        <div class="text text-[#07559F] font-medium">
                            Pengaruh Efisiensi Operasional, Tata Kelola Perusahaan, dan Intellectual Capital Terhadap
                            Nilai Perusahaan (Studi pada Perusahaan Indeks Saham IDX BUMN20 Tahun 2018-2021)
                        </div>
                        <div class="my-1 text-sm">

                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <p>DEKRI ARDIANSYAH</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                </svg>
                                <p>Universitas Telkom, Akuntansi, 2023</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                </svg>
                                <p>Auditing</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                                <p>Karya Ilmiah - Skripsi (S1) - Reference - Non-Sirkulasi</p>
                            </div>
                        </div>
                        <p class="italic text-sm">Accounting and Finance</p>

                        <div class="mt-2 text-sm">
                            <p>Tersedia 1 koleksi</p>
                            <p class="text-[#07559F]">Tersedia 21 file download</p>
                        </div>
                        <a href="{{ route('katalogdetail.fullsite') }}">
                            <button class="py-1 px-7 border-2 border-[#07559F] rounded-md mt-2">Detail</button>
                        </a>
                    </div>
                </div>
                <div class="flex gap-3">

                    <div class="bg-white p-1 w-4/12">
                        <img class="w-full" src="/assets/telucollection.png" alt="Photo of Tel-U Collection">
                    </div>
                    <div class="w-8/12">
                        <div class="text text-[#07559F] font-medium">
                            Pengaruh Efisiensi Operasional, Tata Kelola Perusahaan, dan Intellectual Capital Terhadap
                            Nilai Perusahaan (Studi pada Perusahaan Indeks Saham IDX BUMN20 Tahun 2018-2021)
                        </div>
                        <div class="my-1 text-sm">

                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <p>DEKRI ARDIANSYAH</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                </svg>
                                <p>Universitas Telkom, Akuntansi, 2023</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                </svg>
                                <p>Auditing</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                                <p>Karya Ilmiah - Skripsi (S1) - Reference - Non-Sirkulasi</p>
                            </div>
                        </div>
                        <p class="italic text-sm">Accounting and Finance</p>

                        <div class="mt-2 text-sm">
                            <p>Tersedia 1 koleksi</p>
                            <p class="text-[#07559F]">Tersedia 21 file download</p>
                        </div>
                        <a href="{{ route('katalogdetail.fullsite') }}">
                            <button class="py-1 px-7 border-2 border-[#07559F] rounded-md mt-2">Detail</button>
                        </a>
                    </div>
                </div>
                <div class="flex gap-3">

                    <div class="bg-white p-1 w-4/12">
                        <img class="w-full" src="/assets/telucollection.png" alt="Photo of Tel-U Collection">
                    </div>
                    <div class="w-8/12">
                        <div class="text text-[#07559F] font-medium">
                            Pengaruh Efisiensi Operasional, Tata Kelola Perusahaan, dan Intellectual Capital Terhadap
                            Nilai Perusahaan (Studi pada Perusahaan Indeks Saham IDX BUMN20 Tahun 2018-2021)
                        </div>
                        <div class="my-1 text-sm">

                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>
                                <p>DEKRI ARDIANSYAH</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                </svg>
                                <p>Universitas Telkom, Akuntansi, 2023</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                                </svg>
                                <p>Auditing</p>
                            </div>
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                </svg>
                                <p>Karya Ilmiah - Skripsi (S1) - Reference - Non-Sirkulasi</p>
                            </div>
                        </div>
                        <p class="italic text-sm">Accounting and Finance</p>

                        <div class="mt-2 text-sm">
                            <p>Tersedia 1 koleksi</p>
                            <p class="text-[#07559F]">Tersedia 21 file download</p>
                        </div>
                        <a href="{{ route('katalogdetail.fullsite') }}">
                            <button class="py-1 px-7 border-2 border-[#07559F] rounded-md mt-2">Detail</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex gap-16 mt-10 p-10 justify-between">
            <div class="w-8/12">
                <h1 class="text-2xl font-bold text-[#B22222]">Review</h1>
                <div class="grid grid-cols-2 gap-8 mt-3">
                    <div>

                        <div class="flex items-center gap-2">
                            <img src="/assets/profilereview.png" alt="Photo of Profile">
                            <p class="font-bold">Muhammad Arya</p>
                        </div>
                        <p class="font-semibold text-[#07559F]">Akuntansi Keuangan Menengah 1: Berbasis PSAK</p>
                        <div class="flex items-center gap-3">

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>
                            <div class="text-[#938C8C]">
                                20/05/2023
                            </div>

                        </div>
                        <div class="text-[#938C8C]">“Sangat memuaskan untuk mencari jurnal referensi tugas besar saya. Banyak pilihan jurnal
                            yang bagus top markotop...”</div>
                    </div>
                    <div>

                        <div class="flex items-center gap-2">
                            <img src="/assets/profilereview.png" alt="Photo of Profile">
                            <p class="font-bold">Muhammad Arya</p>
                        </div>
                        <p class="font-semibold text-[#07559F]">Akuntansi Keuangan Menengah 1: Berbasis PSAK</p>
                        <div class="flex items-center gap-3">

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>
                            <div class="text-[#938C8C]">
                                20/05/2023
                            </div>

                        </div>
                        <div class="text-[#938C8C]">“Sangat memuaskan untuk mencari jurnal referensi tugas besar saya. Banyak pilihan jurnal
                            yang bagus top markotop...”</div>
                    </div>
                    <div>

                        <div class="flex items-center gap-2">
                            <img src="/assets/profilereview.png" alt="Photo of Profile">
                            <p class="font-bold">Muhammad Arya</p>
                        </div>
                        <p class="font-semibold text-[#07559F]">Akuntansi Keuangan Menengah 1: Berbasis PSAK</p>
                        <div class="flex items-center gap-3">

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>
                            <div class="text-[#938C8C]">
                                20/05/2023
                            </div>

                        </div>
                        <div class="text-[#938C8C]">“Sangat memuaskan untuk mencari jurnal referensi tugas besar saya. Banyak pilihan jurnal
                            yang bagus top markotop...”</div>
                    </div>
                    <div>

                        <div class="flex items-center gap-2">
                            <img src="/assets/profilereview.png" alt="Photo of Profile">
                            <p class="font-bold">Muhammad Arya</p>
                        </div>
                        <p class="font-semibold text-[#07559F]">Akuntansi Keuangan Menengah 1: Berbasis PSAK</p>
                        <div class="flex items-center gap-3">

                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFD233"
                                    class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                        clip-rule="evenodd" />
                                </svg>

                            </div>
                            <div class="text-[#938C8C]">
                                20/05/2023
                            </div>

                        </div>
                        <div class="text-[#938C8C]">“Sangat memuaskan untuk mencari jurnal referensi tugas besar saya. Banyak pilihan jurnal
                            yang bagus top markotop...”</div>
                    </div>
                </div>
            </div>
            <div class="">
                    <h1 class="text-2xl font-bold text-[#B22222] text-left">Subjek Populer</h1>
                <ul class="mt-3">
                    <li>WEB PROGRAMMING (1806)</li>
                    <li>Transmisi Telkom (1285)</li>
                    <li>#N/A (1268)</li>
                    <li>SCIENCE FICTION (1228)</li>
                    <li>ACCOUNTING (1191)</li>
                    <li>NOVELS (1172)</li>
                    <li>ARTIFICIAL INTELLIGENCE (1133)</li>
                    <li>Rekayasa Perangkat Lunak (1131)</li>
                    <li>Informatika Teori dan Pemrograman (1013)</li>
                    <li>Jaringan Multimedia (952)</li>
                </ul>
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
