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
                    class="text-[#585654]">/</span> <a href="{{ route('informasi.fullsite') }}">Informasi</a> <span
                    class="text-[#585654]">/</span> <span class="text-[#938C8C]">Detail</span>
            </p>
        </div>
        <div class="bg-[#F4F4F4] px-10 pt-10 pb-20 mt-10 rounded-md">
            <h1 class="text-2xl font-bold text-center">Open Library Book Review Competition</h1>
            <div class="flex gap-10 mt-10">
                <div class="bg-white rounded-lg w-9/12 px-12 py-5">
                    <h1 class="text-xl font-bold">Open Library Book Review Competition</h1>
                    <div class="mt-5 font-medium">

                        <div class="flex justify-center">
                            <img src="/assets/competition1.png" alt="Photo of Competition">
                        </div>
                        <div class="mt-5">
                            <p class="font-bold">Hadiah Lomba</p>
                            <br>
                            <ul class="list-disc pl-5">
                                <li>Juara 1 : Trofi, Sertifikat, Uang Pembinaan Rp 750.000,-</li>
                                <li> Juara 2 : Trofi, Sertifikat, Uang Pembinaan Rp 600.000,-</li>
                                <li>Juara 3 : Trofi, Sertifikat, Uang Pembinaan Rp 500.000,-</li>
                                <li>Juara terbaik 4 : Trofi, Sertifikat, Uang Pembinaan Rp350.000,-</li>
                            </ul>
                            <br>
                            <p class="font-bold">Timeline</p>
                            <br>
                            <ul class="list-disc pl-5">
                                <li>Pendaftaran dan Submit: 15 Juni - 14 Juli 2023</li>
                                <li>Penilaian: 17 Juli -19 Juli 2023</li>
                                <li>Pengumuman Pemenang : 20 Juli 2023</li>
                            </ul>
                            <br>
                            <p class="font-bold">Ketentuan peserta lomba:</p>
                            <br>
                            <li>Peserta merupakan civitas Telkom University (dibuktikan dengan Kartu Tanda
                                Mahasiswa/Pegawai/Staf)</li>
                            <li>Peserta melakukan pendaftaran secara online pada link berikut s.id/Bookreviewregister
                            </li>
                        </div>
                        <h1 class="text-lg font-bold text-center mt-5">Kriterian Penilaian</h1>
                        <div class="mt-5">

                            <div class="relative overflow-x-auto border border-[#938C8C]">
                                <table class="w-full text-sm text-left">
                                    <thead class="text-xs text-gray-700 uppercase border-b border-[#938C8C]">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                No.
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Aspek yang dinilai
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Deskripsi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                1.
                                            </td>
                                            <th class="px-6 py-4">
                                                Orisinalitas
                                            </th>
                                            <td class="px-6 py-4">
                                                Karya resensi tidak melewati ketentuan tingkat similarity maksimal 30%.
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                2.
                                            </td>
                                            <th class="px-6 py-4">
                                                Identitas Buku
                                            </th>
                                            <td class="px-6 py-4">
                                                Karya resensi memuat identitas yang mewakili profil buku.
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                3.
                                            </td>
                                            <th class="px-6 py-4">
                                                Judul Resensi
                                            </th>
                                            <td class="px-6 py-4">
                                                Judul resensi menarik, mengundang rasa ingin tahu, dan relevan dengan
                                                isi buku.
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                4.
                                            </td>
                                            <th class="px-6 py-4">
                                                Sinopsis
                                            </th>
                                            <td class="px-6 py-4">
                                                Karya resensi memuat ringkasan isi buku.
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                5.
                                            </td>
                                            <th class="px-6 py-4">
                                                Analisis
                                            </th>
                                            <td class="px-6 py-4">
                                                Karya resensi memuat poin-poin penting isi buku, hal-hal penting yang
                                                ditonjolkan dari buku, misal isi, struktur, dan pesan serta memuat
                                                sasaran isi buku (siapa pembacanya).
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                6.
                                            </td>
                                            <th class="px-6 py-4">
                                                Evaluasi
                                            </th>
                                            <td class="px-6 py-4">
                                                Karya resensi memuat kelebihan dan kekurangan buku
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                7.
                                            </td>
                                            <th class="px-6 py-4">
                                                Karya resensi memuat kelebihan dan kekurangan buku
                                            </th>
                                            <td class="px-6 py-4">
                                                Memuat Kesimpulan terhadap isi buku, kesan penulis resensi terhadap
                                                buku, dan ajakan/ imbauan tertentu
                                            </td>
                                        </tr>
                                        <tr class="bg-white">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                8.
                                            </td>
                                            <th class="px-6 py-4">
                                                Penggunaan Bahasa
                                            </th>
                                            <td class="px-6 py-4">
                                                Karya resensi ditulis dengan kaidah kebahasaan yang baik dan benar
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="mt-5 flex justify-center">
                            <img src="/assets/competition2.png" alt="Photo of Competition">
                        </div>
                        <p class="mt-5 text-center">Template Review dapat di unduh pada link berikut: <span
                                class="underline">s.id/Bookreview_Template</span>
                        </p>
                        <ul class="list-disc pl-5 leading-snug">
                            <li>Identitas Reviewer;</li>
                            <li>Identitas buku;</li>
                            <li>Orientasi (pembukaan resensi);</li>
                            <li>Sinopsis;</li>
                            <li>Analisis;</li>
                            <li>Evaluasi;</li>
                            <li>Penutup / kesimpulan.</li>
                        </ul>
                        <div class="mt-5">
                            <div class="relative overflow-x-auto border border-[#938C8C]">
                                <table class="w-full text-sm text-left">
                                    <thead class="text-xs text-gray-700 uppercase border-b border-[#938C8C]">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                No.
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Judul Buku
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Penulis
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Keterangan
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Link Katalog
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                1.
                                            </td>
                                            <th class="px-6 py-4">
                                                The Art Of Being Positive
                                            </th>
                                            <td class="px-6 py-4">
                                                Husna Widyani
                                            </td>
                                            <td class="px-6 py-4">
                                                Buku Cetak
                                            </td>
                                            <td class="px-6 py-4"><a
                                                    href="https://openlibrary.telkomuniversity.ac.id/pustaka/165966/the-art-of-being-positive.html"
                                                    target="_blank">
                                                    https://openlibrary.telkomuniversity.ac.id/pustaka/165966/the-art-of-being-positive.html
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                2.
                                            </td>
                                            <th class="px-6 py-4">
                                                Magnet Berpikir Positif: Tentang Bagaimana Meraih Keajaiban dan
                                                Kebahagiaan Bertubi-tubi dalam Hidup
                                            </th>
                                            <td class="px-6 py-4">
                                                Abhicandra Y. Salman
                                            </td>
                                            <td class="px-6 py-4">
                                                Buku Cetak
                                            </td>
                                            <td class="px-6 py-4"><a
                                                    href="https://openlibrary.telkomuniversity.ac.id/pustaka/168390/magnet-berpikir-positif-tentang-bagaimana-meraih-keajaiban-dan-kebahagiaan-bertubi-tubi-dalam-hidup.html"
                                                    target="_blank">
                                                    https://openlibrary.telkomuniversity.ac.id/pustaka/168390/magnet-berpikir-positif-tentang-bagaimana-meraih-keajaiban-dan-kebahagiaan-bertubi-tubi-dalam-hidup.html
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                3.
                                            </td>
                                            <th class="px-6 py-4">
                                                Dia Adalah Kakakku
                                            </th>
                                            <td class="px-6 py-4">
                                                Tere Liye
                                            </td>
                                            <td class="px-6 py-4">
                                                Buku Cetak
                                            </td>
                                            <td class="px-6 py-4"><a
                                                    href="https://openlibrary.telkomuniversity.ac.id/pustaka/181698/dia-adalah-kakakku.html"
                                                    target="_blank">
                                                    https://openlibrary.telkomuniversity.ac.id/pustaka/181698/dia-adalah-kakakku.html
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                4.
                                            </td>
                                            <th class="px-6 py-4">
                                                Computational Thinking: A beginner's guide to problem-solving and
                                                programming
                                            </th>
                                            <td class="px-6 py-4">
                                                Karl Beecher

                                            </td>
                                            <td class="px-6 py-4">
                                                Buku Cetak
                                            </td>
                                            <td class="px-6 py-4">
                                                Computational Thinking: A beginner's guide to problem-solving and
                                                programming
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                5.
                                            </td>
                                            <th class="px-6 py-4">
                                                Episode Hujan
                                            </th>
                                            <td class="px-6 py-4">
                                                Lucia Priandarini
                                            </td>
                                            <td class="px-6 py-4">
                                                Buku Cetak
                                            </td>
                                            <td class="px-6 py-4"><a
                                                    href="https://openlibrary.telkomuniversity.ac.id/pustaka/183081/episode-hujan.html"
                                                    target="_blank">
                                                    https://openlibrary.telkomuniversity.ac.id/pustaka/183081/episode-hujan.html
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                6.
                                            </td>
                                            <th class="px-6 py-4">
                                                Marketing Research Delivering Customer Insight
                                            </th>
                                            <td class="px-6 py-4">
                                                Alan Wilson
                                            </td>
                                            <td class="px-6 py-4">
                                                E-book
                                            </td>
                                            <td class="px-6 py-4"><a
                                                    href="https://openlibrary.telkomuniversity.ac.id/pustaka/196195/marketing-research-delivering-customer-insight.html"
                                                    target="_blank">
                                                    https://openlibrary.telkomuniversity.ac.id/pustaka/196195/marketing-research-delivering-customer-insight.html
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                7.
                                            </td>
                                            <th class="px-6 py-4">
                                                The Education of Young Entrepreneurs: Investing in The Young Minds to
                                                Face Their Future
                                            </th>
                                            <td class="px-6 py-4">
                                                Ratna Lindawati lubis
                                            </td>
                                            <td class="px-6 py-4">
                                                E-book
                                            </td>
                                            <td class="px-6 py-4"><a
                                                    href="https://openlibrary.telkomuniversity.ac.id/pustaka/185795/the-education-of-young-entrepreneurs-investing-in-the-young-minds-to-face-their-future.html"
                                                    target="_blank">
                                                    https://openlibrary.telkomuniversity.ac.id/pustaka/185795/the-education-of-young-entrepreneurs-investing-in-the-young-minds-to-face-their-future.html
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                8.
                                            </td>
                                            <th class="px-6 py-4">
                                                The Startup Community Way : Evolving an Entrepreneurial Ecosystem
                                            </th>
                                            <td class="px-6 py-4">
                                                Bard Feld, Ian Hathaway
                                            </td>
                                            <td class="px-6 py-4">
                                                E-book
                                            </td>
                                            <td class="px-6 py-4"><a
                                                    href="https://openlibrary.telkomuniversity.ac.id/pustaka/170091/the-startup-community-way-evolving-an-entrepreneurial-ecosystem.html"
                                                    target="_blank">
                                                    https://openlibrary.telkomuniversity.ac.id/pustaka/170091/the-startup-community-way-evolving-an-entrepreneurial-ecosystem.html
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                9.
                                            </td>
                                            <th class="px-6 py-4">
                                                Cybermedia: Explorations in Science, Sound, and Vision
                                            </th>
                                            <td class="px-6 py-4">
                                                Carol Vernallis
                                            </td>
                                            <td class="px-6 py-4">
                                                E-book
                                            </td>
                                            <td class="px-6 py-4"><a
                                                    href="https://openlibrary.telkomuniversity.ac.id/pustaka/183287/cybermedia-explorations-in-science-sound-and-vision.html"
                                                    target="_blank">
                                                    https://openlibrary.telkomuniversity.ac.id/pustaka/183287/cybermedia-explorations-in-science-sound-and-vision.html
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="bg-white border-b border-[#938C8C]">
                                            <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                                10.
                                            </td>
                                            <th class="px-6 py-4">
                                                AI for Learning
                                            </th>
                                            <td class="px-6 py-4">
                                                Carmel Kent, Benedict du Boulay
                                            </td>
                                            <td class="px-6 py-4">
                                                E-book
                                            </td>
                                            <td class="px-6 py-4"><a
                                                    href="https://openlibrary.telkomuniversity.ac.id/pustaka/195417/ai-for-learning.html"
                                                    target="_blank">
                                                    https://openlibrary.telkomuniversity.ac.id/pustaka/195417/ai-for-learning.html
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <ul class="list-disc pl-5 mt-5">
                            <li>Resensi ditulis dalam bahasa Indonesia sesuai dengan EYD dan aturan penulisan resensi
                                yang berlaku</li>
                            <li>Tulisan maksimal 3 halaman A4 (1000 – 1500 kata), tidak termasuk Cover dan identitas
                                Penulis, spasi 1,5, font Calibri 12pt, Judul (Bold 14pt)</li>
                            <li>Tingkat similarity maksimal 30%</li>
                        </ul>
                        <div class="mt-5">
                            <p>Format File</p>
                            <ul class="list-disc pl-5 mt-5"></ul>
                            <li>
                                Hasil resensi dikirim dalam format Pdf melalui link s.id/Bookreview_submit</li>
                            <li>
                                Format nama file: Nama Peserta_Lomba Resensi 2023
                            </li>
                            <li>
                                Keputusan panitia dan dewan juri bersifat final
                            </li>
                            <li>
                                Narahubung
                            </li>
                        </div>

                        <div class="mt-5">
                            <p>Narahubung</p>

                            <ul class="pl-5 mt-5">
                                <li>
                                    Whatsapp : <a class="underline"
                                        href="https://api.whatsapp.com/send/?phone=6281280000110&text&type=phone_number&app_absent=0">+62812
                                        8000 0110 (Ask a Librarian)</a></li>
                                <li>
                                    Instagram :<a href="https://www.instagram.com/openlibrary.telu/?hl=id"
                                        class="underline"> @openlibrary.telu<</a>/li> <li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="w-3/12">
                    <div>
                        <div class="bg-[#F0AD4E] py-2 text-center font-medium rounded-t-lg">Timestampable</div>
                        <div class="bg-white py-3 font-medium rounded-b-lg">
                            <div class="flex">
                                <p class="text-center w-1/2 mb-3">Created</p>
                                <p class="text-center w-1/2">19 January 2023</p>
                            </div>
                            <div class="flex">
                                <p class="text-center w-1/2">Updated</p>
                                <p class="text-center w-1/2">24 June 2022</p>
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
                                <li class="mt-3 leading-tight">Telkom University Open Library Telkom University Open
                                    Library adalah brand...</li>
                                <li class="mt-3 leading-tight">Dalam rangka melaksanakan ketentuan Pasal 46 Ayat (2)
                                    Undang-Undang...</li>
                                <li class="mt-3 leading-tight">Open Library Digital Reading AreaPada Digital Reading
                                    Area, Open...</li>
                                <li class="mt-3 leading-tight">Infografis Assistive Technology Service Layanan ini
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

