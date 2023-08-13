<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oplib</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/assets/logo.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap');

    </style>
</head>


<body class="font-inter">
<section class="h-screen bg-no-repeat bg-center"
        style="background-image: url('/assets/oplib.png'); background-color: rgba(255, 255, 255, 0.7); background-size: cover;">

        <div class="absolute top-0 h-screen w-full" style="background-color: rgba(255, 255, 255, 0.5)">
            @include('layouts.navigation')
            <div class="text-right absolute top-1/2 right-24 font-bold">
                <h1 class="text-6xl font-bold text-white">BUDAYAKAN<br>
                    <svg class="-mr-6" viewbox="0 0 10 2">
                        <text x="2.4" y="1" text-anchor="right" font-size="1.3" fill="none" stroke-width=".025"
                            stroke="#FF4500" font-family="sans-serif">MEMBACA</text>
                    </svg></h1>
                <a href="{{route('tentangkami.index')}}"><button class="border-2 border-[#FF4500] text-white p-2 -mt-3">TENTANG KAMI</button></a>
            </div>
        </div>

    </section>


    <section class="h-fit min-h-screen bg-[#F0AD4E] p-10">
        <div>

            <div class="flex items-center justify-between">
                <h1 class="text-4xl font-bold text-white">KATALOG</h1>
                <div class="flex gap-3">
                    <div class="flex items-center bg-white rounded-md w-fit h-fit px-1">
                        <input class="bg-transparent border-0 focus:ring-0 -my-1" type="text" placeholder="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>
                    <button data-modal-target="staticModal" data-modal-toggle="staticModal"
                        class="bg-[#FF4500] text-white px-2 py-1 rounded-md h-fit">Advance Search</button>

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
                                                <option value="Karya Ilmiah - Skripsi - Reference">Karya Ilmiah -
                                                    Skripsi S1 - Reference</option>
                                                <option value="Karya Ilmiah - Skripsi - Reference">Karya Ilmiah -
                                                    Skripsi S1 - Reference</option>
                                                <option value="Karya Ilmiah - Skripsi - Reference">Karya Ilmiah -
                                                    Skripsi S1 - Reference</option>
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
                                            <x-input-label class="font-bold" for="penerbit" :value="__('Penerbit')" />
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
                                                <option value="Tel-U Gedung FKB">Tel-U Gedung FKB</option>
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
                                            <a class="bg-[#FF4500] py-2 px-8 text-white rounded-md"
                                                href="{{route('katalog.detail')}}">Cari</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-sm font-bold mt-3">134 results (page 1/27)</p>

        </div>
        <div class="grid grid-cols-3 mt-5 gap-10">
            <div class="flex gap-3 bg-white px-3 py-7 rounded-md">
                <img class="w-7/12" src="/assets/buku.png" alt="">
                <div class="">
                    <h1 class="text-2xl text-[#07559F]">Sistem Informasi Manajemen</h1>

                    <div class="my-1">

                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            <p>Hari Sulaksono, S.E., M.M.</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                            </svg>
                            <p>Deepublish, 2020</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>

                            <p>Machine Learning</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                            </svg>

                            <p>Book - Circulation (Dapat Dipinjam)</p>
                        </div>

                    </div>

                    <p class="italic">Machine Learning</p>

                    <div class="mt-2">
                        <p>Tersedia 1 koleksi</p>
                        <p class="text-[#07559F]">Tersedia 1 file download</p>
                    </div>
                    <a href="{{ route('katalog.detail') }}">
                        <button class="py-1 px-7 border-2 border-[#07559F] rounded-md mt-2">Detail</button>
                    </a>
                </div>
            </div>
            <div class="flex gap-3 bg-white px-3 py-7 rounded-md">
                <img class="w-7/12" src="/assets/buku.png" alt="">
                <div class="">
                    <h1 class="text-2xl text-[#07559F]">Sistem Informasi Manajemen</h1>

                    <div class="my-1">

                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            <p>Hari Sulaksono, S.E., M.M.</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                            </svg>
                            <p>Deepublish, 2020</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>

                            <p>Machine Learning</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                            </svg>

                            <p>Book - Circulation (Dapat Dipinjam)</p>
                        </div>

                    </div>

                    <p class="italic">Machine Learning</p>

                    <div class="mt-2">
                        <p>Tersedia 1 koleksi</p>
                        <p class="text-[#07559F]">Tersedia 1 file download</p>
                    </div>
                    <a href="{{ route('katalog.detail') }}">
                        <button class="py-1 px-7 border-2 border-[#07559F] rounded-md mt-2">Detail</button>
                    </a>
                </div>
            </div>
            <div class="flex gap-3 bg-white px-3 py-7 rounded-md">
                <img class="w-7/12" src="/assets/buku.png" alt="">
                <div class="">
                    <h1 class="text-2xl text-[#07559F]">Sistem Informasi Manajemen</h1>

                    <div class="my-1">

                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            <p>Hari Sulaksono, S.E., M.M.</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                            </svg>
                            <p>Deepublish, 2020</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>

                            <p>Machine Learning</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                            </svg>

                            <p>Book - Circulation (Dapat Dipinjam)</p>
                        </div>

                    </div>

                    <p class="italic">Machine Learning</p>

                    <div class="mt-2">
                        <p>Tersedia 1 koleksi</p>
                        <p class="text-[#07559F]">Tersedia 1 file download</p>
                    </div>
                    <a href="{{ route('katalog.detail') }}">
                        <button class="py-1 px-7 border-2 border-[#07559F] rounded-md mt-2">Detail</button>
                    </a>
                </div>
            </div>
            <div class="flex gap-3 bg-white px-3 py-7 rounded-md">
                <img class="w-7/12" src="/assets/buku.png" alt="">
                <div class="">
                    <h1 class="text-2xl text-[#07559F]">Sistem Informasi Manajemen</h1>

                    <div class="my-1">

                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            <p>Hari Sulaksono, S.E., M.M.</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                            </svg>
                            <p>Deepublish, 2020</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>

                            <p>Machine Learning</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                            </svg>

                            <p>Book - Circulation (Dapat Dipinjam)</p>
                        </div>

                    </div>

                    <p class="italic">Machine Learning</p>

                    <div class="mt-2">
                        <p>Tersedia 1 koleksi</p>
                        <p class="text-[#07559F]">Tersedia 1 file download</p>
                    </div>
                    <a href="{{ route('katalog.detail') }}">
                        <button class="py-1 px-7 border-2 border-[#07559F] rounded-md mt-2">Detail</button>
                    </a>
                </div>
            </div>
            <div class="flex gap-3 bg-white px-3 py-7 rounded-md">
                <img class="w-7/12" src="/assets/buku.png" alt="">
                <div class="">
                    <h1 class="text-2xl text-[#07559F]">Sistem Informasi Manajemen</h1>

                    <div class="my-1">

                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            <p>Hari Sulaksono, S.E., M.M.</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                            </svg>
                            <p>Deepublish, 2020</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>

                            <p>Machine Learning</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                            </svg>

                            <p>Book - Circulation (Dapat Dipinjam)</p>
                        </div>

                    </div>

                    <p class="italic">Machine Learning</p>

                    <div class="mt-2">
                        <p>Tersedia 1 koleksi</p>
                        <p class="text-[#07559F]">Tersedia 1 file download</p>
                    </div>
                    <a href="{{ route('katalog.detail') }}">
                        <button class="py-1 px-7 border-2 border-[#07559F] rounded-md mt-2">Detail</button>
                    </a>
                </div>
            </div>
            <div class="flex gap-3 bg-white px-3 py-7 rounded-md">
                <img class="w-7/12" src="/assets/buku.png" alt="">
                <div class="">
                    <h1 class="text-2xl text-[#07559F]">Sistem Informasi Manajemen</h1>

                    <div class="my-1">

                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                            <p>Hari Sulaksono, S.E., M.M.</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                            </svg>
                            <p>Deepublish, 2020</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                            </svg>

                            <p>Machine Learning</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                            </svg>

                            <p>Book - Circulation (Dapat Dipinjam)</p>
                        </div>

                    </div>

                    <p class="italic">Machine Learning</p>

                    <div class="mt-2">
                        <p>Tersedia 1 koleksi</p>
                        <p class="text-[#07559F]">Tersedia 1 file download</p>
                    </div>
                    <a href="{{ route('katalog.detail') }}">
                        <button class="py-1 px-7 border-2 border-[#07559F] rounded-md mt-2">Detail</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="font-medium w-fit mx-auto m-8">
            <button class="w-7 h-7 bg-white rounded-full">
                <i class="fa-solid fa-angles-left"></i>
            </button>
            <button class="w-7 h-7 bg-white rounded-full">
                1
            </button>
            <button class="w-9 h-9 bg-white rounded-full text-lg">
                2
            </button>
            <button class="w-7 h-7 bg-white rounded-full">
                3
            </button>
            <button class="w-7 h-7 bg-white rounded-full">
                <i class="fa-solid fa-angles-right"></i>
            </button>
        </div>
    </section>

    <section class="h-fit p-10 flex justify-between">
        <div class="w-3/12">
            <h1 class="text-2xl font-bold text-[#B22222]">News</h1>
            <ul class="mt-2">
                <li>
                    <p class="font-medium">Library Newsletter | Tel-U<br>Open Library, Juni 2023</p>
                    <div class="bg-[#F0AD4E] text-white font-semibold rounded-md w-fit px-2">
                        30 Juni 2023
                    </div>
                </li>
                <li class="mt-2">
                    <p class="font-medium">Library Newsletter | Tel-U Open Library, Juni 2023</p>
                    <div class="bg-[#F0AD4E] text-white font-semibold rounded-md w-fit px-2">
                        29 Mei 2023
                    </div>
                </li>
                <li class="mt-2">
                    <p class="font-medium">Layanan Digital Reading Area (Akses Kindle)</p>
                    <div class="bg-[#F0AD4E] text-white font-semibold rounded-md w-fit px-2">
                        25 Mei 2023
                    </div>
                </li>
                <li class="mt-2">
                    <p class="font-medium">Layanan Digital Reading Area (Akses Kindle)</p>
                    <div class="bg-[#F0AD4E] text-white font-semibold rounded-md w-fit px-2">
                        28 April 2023
                    </div>
                </li>
                <li class="mt-2">
                    <p class="font-medium">User Guide, Jenis Dokumen yang harus diupload di Open Library</p>
                    <div class="bg-[#F0AD4E] text-white font-semibold rounded-md w-fit px-2">
                        12 April 2023
                    </div>
                </li>
            </ul>
        </div>
        <div>
            <h1 class="text-2xl font-bold text-[#B22222]">Informasi Penting</h1>
            <div class="flex-col flex gap-2 font-medium mt-2">
                <div class="text-[#07559F]">
                    Peraturan Tel-U Open Library
                </div>
                <div class="text-[#07559F]">
                    Open Library Member Survival Guide
                </div>
                <div class="text-[#07559F]">
                    Formulir Pengajuan Bahan Pustaka
                </div>
                <div class="text-[#07559F]">
                    SK Logo dan Sistem Open Library
                </div>
                <div class="text-[#07559F]">
                    Kelas Literasi
                </div>
                <div class="text-[#07559F]">
                    Akses e-Journal menggunakan MyLOFT
                </div>
                <div class="text-[#07559F]">
                    Tata Cara Upload Bahan Ajar
                </div>
                <div class="text-[#07559F]">
                    Peminjaman Buku melalui Delivery Service
                </div>
                <div class="text-[#07559F]">
                    User Guide Author dan Reviewer Jurnal TELKATIKA
                </div>
                <div class="text-[#07559F]">
                    Layanan Document Delivery Service
                </div>
                <div class="text-[#07559F]">
                    Cara Akses Koleksi Electronic Book Open Library
                </div>
                <div class="text-[#07559F]">
                    Standar Layanan Open Library
                </div>
                <div class="text-[#07559F]">
                    Cara Akses Scopus
                </div>
                <div class="text-[#07559F]">
                    Fasilitas Cek Similarity, iThenticate dan Turnitin
                </div>
                <div class="text-[#07559F]">
                    Layanan Assistive Technology
                </div>
                <div class="text-[#07559F]">
                    Open Library Book Review Competition
                </div>
                <div class="text-[#07559F]">
                    Surat Bebas Kewajiban Perpustakaan (SBKP)
                </div>
            </div>
        </div>
        <div>
            <h1 class="text-2xl font-bold text-[#B22222]">E-Journal, E-book & Magazine</h1>
            <div class="flex gap-4 mt-2">
                <div>
                    <img src="/assets/ejournal.png" alt="Photo of E-Journal">
                </div>
                <div class="flex flex-col items-center gap-2">
                    <img src="/assets/ebook.png" alt="Photo of E-Book">
                    <img src="/assets/magazine.png" alt="Photo of Magazine">
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>

</html>
