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
        <div class="bg-[#F4F4F4] px-10 pt-10 pb-20 mt-10 rounded-md">
            <div class="flex justify-between">

                <div class="w-9/12">
                    <h1 class="text-xl font-bold">Pengaruh Efisiensi Operasional, Tata Kelola Perusahaan, dan
                        Intellectual Capital Terhadap Nilai Perusahaan (Studi pada Perusahaan Indeks Saham IDX BUMN20
                        Tahun 2018-2021)</h1>
                    <p class="text-lg font-medium">DEKRI ARDIANSYAH</p>
                </div>

            </div>
            <div class="flex gap-2">
                <div class="w-2/12">
                    <div class="bg-white p-1 w-fit">
                        <img class="w-full" src="/assets/telucollection.png" alt="Photo of Buku">
                    </div>
                </div>
                <div class="w-5/12">
                    <div
                        class="bg-white border w-fit border-[#F0AD4E] flex items-center gap-2 h-fit font-bold py-1 px-2 rounded-md">
                        <p>Informasi Umum</p>
                    </div>
                    <div class="mt-3">
                        <div class="leading-tight">
                            <p class="font-medium">Kode</p>
                            <p>23.04.3370</p>
                        </div>
                        <div class="leading-tight">
                            <p class="font-medium">Klasifikasi</p>
                            <p>657 - Accounting</p>
                        </div>
                        <div class="leading-tight">
                            <p class="font-medium">Jenis</p>
                            <p>Karya Ilmiah - Skripsi (S1) - Reference</p>
                        </div>
                        <div class="leading-tight">
                            <p class="font-medium">Subjek</p>
                            <p>Accounting And Finance, Financial Accounting,</p>
                        </div>
                    </div>
                </div>
                <div class="w-8/12 flex items-center gap-8">
                    <div class="w-1/2">
                        <div class="bg-[#F0AD4E] text-center font-bold py-1 rounded-t-md">
                            Pengarang
                        </div>
                        <div class="bg-white p-4 shadow-lg rounded-b-md h-32">
                            <div class="flex justify-between">
                                <p class="w-2/5 font-bold">Nama</p>
                                <p class="w-3/5 font-medium">DEKRI ARDIANSYAH</p>
                            </div>
                            <div class="flex justify-between ">
                                <p class="w-2/5 font-bold">Jenis</p>
                                <p class="w-3/5 font-medium">Perorangan</p>
                            </div>

                            <div class="flex justify-between font-medium">
                                <p class="w-2/5 font-bold">Penyunting</p>
                                <p class="w-3/5 font-medium">Leny Suzan</p>
                            </div>
                            <div class="flex justify-between font-medium">
                                <p class="w-2/5 font-bold">Penerjemah</p>
                                <p class="w-3/5 font-medium">-</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/2">

                        <div>
                            <div class="bg-[#F0AD4E] text-center font-bold py-1 rounded-t-md">
                                Penerbit
                            </div>
                            <div class="bg-white p-4 shadow-lg rounded-b-md h-32">
                                <div class="flex justify-between">
                                    <p class="w-2/5 font-bold">Nama</p>
                                    <p class="w-3/5 font-medium">Universitas Telkom, S1 Akuntansi</p>
                                </div>
                                <div class="flex justify-between ">
                                    <p class="w-2/5 font-bold">Kota</p>
                                    <p class="w-3/5 font-medium">Jakarta</p>
                                </div>

                                <div class="flex justify-between font-medium">
                                    <p class="w-2/5 font-bold">Tahun</p>
                                    <p class="w-3/5 font-medium">2022</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="bg-[#F0AD4E] text-center font-bold py-1 rounded-t-md">
                                Sirkulasi
                            </div>
                            <div class="bg-white p-4 shadow-lg rounded-b-md h-32">
                                <div class="flex justify-between">
                                    <p class="w-2/5 font-bold">Harga Sewa</p>
                                    <p class="w-3/5 font-medium">IDR 0,00</p>
                                </div>
                                <div class="flex justify-between ">
                                    <p class="w-2/5 font-bold">Denda Harian</p>
                                    <p class="w-3/5 font-medium">IDR 0,00</p>
                                </div>

                                <div class="flex justify-between font-medium">
                                    <p class="w-2/5 font-bold">Jenis</p>
                                    <p class="w-3/5 font-medium">Non-Sirkulasi</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="flex mt-3 gap-20">
                <div class="w-7/12">
                    <div
                        class="bg-white border w-fit border-[#F0AD4E] flex items-center gap-2 h-fit font-bold py-1 px-2 rounded-md">
                        <p>Informasi Lainnya</p>
                    </div>
                    <div class="mt-3">
                        <p>Abstraksi</p>
                        <div>
                            Perusahaan yang telah go public biasanya memiliki tujuan utama untuk meningkatkan nilai
                            pemegang saham, karena ini adalah indikator terbaik dari kesehatan bisnis. Salah satunya
                            nilai perusahaan, karena nilai perusahaan mendeskripsikan kondisi dan keadaan
                            perusahaan. Dengan begitu, semakin bagus nilai perusahaan maka menjadi nilai tambah
                            tersendiri bagi seorang investor. Nilai perusahaan dapat dipengaruhi oleh faktor
                            finansial dan faktor non finansial. Dalam penelitian ini efisiensi operasional merupakan
                            faktor finansial dan tata kelola perusahaan serta intellectual capital merupakan faktor
                            non finansial. Penelitian ini bertujuan untuk mengidentifikasi pengaruh efisiensi
                            operasional, intellectual capital, dan tata kelola perusahaan secara simultan dan
                            parsial terhadap nilai perusahaan. Penelitian ini menggunakan data kuantitatif. Populasi
                            dalam penelitian ini merupakan perusahaan dengan Indeks Saham IDX BUMN20 Tahun
                            2018-2021. Teknik purposive sampling digunakan dalam pengambilan sampel dan diperoleh 15
                            perusahaan dengan total sampel yang diamati sebanyak 60 sampel. Data dianalisis
                            menggunakan regresi data panel melalui software Eviews 12.
                        </div>
                    </div>
                </div>
                <div class="">
                    @auth
                    <a href="{{route('katalogdetaildownload.fullsite')}}">
                        <button
                        class="bg-white border border-[#0E9302] flex items-center gap-2 h-fit font-bold py-1 px-2 rounded-md">
                        <i class="fa-solid fa-download"></i>
                        <p>Download / Flippingbook</p>
                    </button>
                </a>
                    @else
                    <button data-modal-target="popup-modals" data-modal-toggle="popup-modals"
                        class="bg-white border border-[#0E9302] flex items-center gap-2 h-fit font-bold py-1 px-2 rounded-md">
                        <i class="fa-solid fa-download"></i>
                        <p>Download / Flippingbook</p>
                    </button>
                    <div id="popup-modals" tabindex="-1"
                        class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-lg max-h-full">
                            <div class="relative bg-white rounded-lg shadow border border-[#F0AD4E]">
                                <h3 class="text-xl font-semibold text-center my-4">
                                    Pengumuman
                                </h3>
                                <button type="button"
                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="popup-modals">
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-6">
                                    <h3 class="mb-5 font-normal">Dengan mengunduh berkas digital berikut, anda
                                        telah menyetujui untuk TIDAK menyebarluaskan, melakukan reproduksi, dan
                                        melakukan tindakan plagiat, atas isi berkas digital berikut tanpa seizin
                                        Universitas Telkom.
                                        <br><br>
                                        Terimakasih </h3>
                                    <div class="flex justify-end items-center">

                                        <button data-modal-hide="popup-modals" type="button"
                                            class="w-3/12 text-center border border-[#F0AD4E] focus:ring-4 focus:outline-none font-medium rounded-lg text-sm items-center py-2.5 mr-2">
                                            OK
                                        </button>
                                        <button data-modal-hide="popup-modals" type="button"
                                            class="w-3/12 text-white focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-[#F0AD4E] bg-[#F0AD4E] text-sm font-medium py-2.5">
                                            Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <ul class="mt-3">
                        <li class="leading-tight">
                            <a href="{{route('katalogdetaildownload.fullsite')}}"><p class="font-bold text-[#07559F]">A. Letter of Acceptance (LoA.pdf)</p></a>
                            belum pernah diunduh
                        </li>
                        <li class="leading-tight">
                        <a href="{{route('katalogdetaildownload.fullsite')}}"><p class="font-bold text-[#07559F]">B. Cover (cover.pdf)</p></a>
                            belum pernah diunduh
                        </li>
                        <li class="leading-tight">
                            <a href="{{route('katalogdetaildownload.fullsite')}}"><p class="font-bold text-[#07559F]">C. Disclaimer (disclaimer.pdf)</p></a>
                            belum pernah diunduh
                        </li>
                        <li class="leading-tight">
                            <a href="{{route('katalogdetaildownload.fullsite')}}"><p class="font-bold text-[#07559F]">D. Lembar Pengesahan (lembarpengesahan.pdf)</p></a>
                            belum pernah diunduh
                        </li>
                        <li class="leading-tight">
                            <a href="{{route('katalogdetaildownload.fullsite')}}"><p class="font-bold text-[#07559F]">E. Abstrak (abstraksi.pdf)</p></a>
                            belum pernah diunduh
                        </li>
                        <li class="leading-tight">
                            <a href="{{route('katalogdetaildownload.fullsite')}}"><p class="font-bold text-[#07559F]">F. Kata Pengantar (kpdi.pdf)</p></a>
                            belum pernah diunduh
                        </li>
                        <li class="leading-tight">
                            <a href="{{route('katalogdetaildownload.fullsite')}}"><p class="font-bold text-[#07559F]">G. BAB 1 (bab1.pdf)</p></a>
                            belum pernah diunduh
                        </li>
                        <li class="leading-tight">
                           <a href="{{route('katalogdetaildownload.fullsite')}}"><p class="font-bold text-[#07559F]">H. BAB 2 (bab2.pdf)</p></a>
                            belum pernah diunduh
                        </li>
                        <li class="leading-tight">
                            <a href="{{route('katalogdetaildownload.fullsite')}}"><p class="font-bold text-[#07559F]">I. BAB 3 (bab3.pdf)</p></a>
                            belum pernah diunduh
                        </li>
                        <li class="leading-tight">
                            <a href="{{route('katalogdetaildownload.fullsite')}}"><p class="font-bold text-[#07559F]">J. BAB 4 (bab4.pdf)</p></a>
                            belum pernah diunduh
                        </li>
                    </ul>
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

