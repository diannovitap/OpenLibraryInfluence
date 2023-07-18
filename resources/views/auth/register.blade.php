<x-guest-layout>
    <div class="flex bg-[#585654] w-10/12 rounded-lg p-9">
        <div class="w-1/2 flex flex-col items-center justify-center">
            <img class="w-1/2" src="/assets/login.png" alt="">
            <p class="text-2xl font-bold text-white">Open Library <br>Telkom University</p>
        </div>
        <div class="w-1/2">
            <div class="flex w-full bg-white rounded-t-lg">
                <a href="/register" class="w-1/2">
                    <button class="w-full text-center font-bold py-3">
                        Sign Up
                    </button>
                </a>
                <a href="/login" class="w-1/2">
                    <button class="w-full text-center bg-[#EDEDED] border-2 font-bold py-3 rounded-tr-lg">
                        Login
                    </button>
                </a>
            </div>
            <form class="w-full text-sm  bg-white py-5 px-10 rounded-b-lg" method="POST"
                action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <!-- <x-input-label for="name" :value="__('Name')" /> -->
                    <x-text-input id="name" class="block text-sm mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" placeholder="Username" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>


                <!-- Password -->
                <div class="mt-3">
                    <!-- <x-input-label for="password" :value="__('Password')" /> -->

                    <x-text-input id="password" class="block text-sm mt-1 w-full" type="password" name="password"
                        required autocomplete="new-password" placeholder="Password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Nomor Telepon -->
                <div class="mt-3">
                    <x-text-input id="notelepon" class="block text-sm mt-1 w-full" type="text" name="notelepon"
                        :value="old('notelepon')" required autocomplete="notelepon" placeholder="Nomor Telepon" />
                    <x-input-error :messages="$errors->get('notelepon')" class="mt-2" />
                </div>

                <!-- Alamat -->
                <div class="mt-3">
                    <x-text-input id="alamat" class="block text-sm mt-1 w-full" type="text" name="alamat"
                        :value="old('alamat')" required autocomplete="alamat" placeholder="Alamat" />
                    <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                </div>

                <!-- Tipe Akun -->
                <div class="mt-3">
                    <select onchange="tipeakun(this);" class="w-full text-sm border-gray-300 rounded-md" name="tipemember" id="tipemember">
                        <option>Pilih Tipe Member</option>
                        <option value="Umum">Umum</option>
                        <option class="hover:bg-[#FF4500]" value="Alumni Telkom University">Alumni Telkom University</option>
                        <option value="Lemdikti YPT">Lemdikti YPT</option>
                        <option value="Perguruan Tinggi Asuh">Perguruan Tinggi Asuh</option>
                    </select>
                </div>

                <div class="mt-3 hidden" id="institutlemdikti">
                    <select class="w-full text-sm border-gray-300 rounded-md" name="institutlemdikti" id="institutlemdikti">
                        <option>Pilih Institut</option>
                        <option value="Institut Teknologi Telkom Surabaya">Institut Teknologi Telkom Surabaya</option>
                        <option value="Institut Teknologi Telkom Jakarta">Institut Teknologi Telkom Jakarta</option>
                        <option value="Institut Teknologi Telkom Purwokerto">Institut Teknologi Telkom Purwokerto</option>
                    </select>
                </div>

                <div class="mt-3 hidden" id="perguruantinggi">
                    <select class="w-full text-sm border-gray-300 rounded-md" name="perguruantinggi" id="perguruantinggi">
                        <option>Pilih Perguruan Tinggi</option>
                        <option value="STKIP Setia Budhi Rangkasbitung">STKIP Setia Budhi Rangkasbitung</option>
                        <option value="STT Wastukancana Purwakarta">STT Wastukancana Purwakarta</option>
                        <option value="Unisma Bekasi">Unisma Bekasi</option>
                        <option value="Universitas Informastika dan Bisnis Indonesia">Universitas Informastika dan Bisnis Indonesia</option>
                        <option value="Universitas Insan Cendekia Mandiri">Universitas Insan Cendekia Mandiri</option>
                        <option value="Universitas Muhammadiyah Cirebon">Universitas Muhammadiyah Cirebon</option>
                        <option value="Universitas Nadhlatul Ulama Cirebon">Universitas Nadhlatul Ulama Cirebon</option>
                        <option value="Universitas Universitas Subang">Universitas Universitas Subang</option>
                    </select>
                </div>

                <div class="mt-3 hidden" id="institusi">
                    <x-text-input id="institusi" class="block text-sm mt-1 w-full" type="text" name="institusi"
                        :value="old('institusi')" required autocomplete="institusi" placeholder="Nama Institusi" />
                    <x-input-error :messages="$errors->get('institusi')" class="mt-2" />
                </div>

                <div class="mt-3 hidden" id="email">
                    <x-text-input id="email" class="block text-sm mt-1 w-full" type="email" name="email" required
                        autocomplete="email" placeholder="@gmail.com" />

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>


                <div class="mt-3 hidden" id="ktp">
                    <x-input-label for="ktp" :value="__('KTP')" />
                    <div class="border-gray-300 border text-sm shadow-sm p-2 rounded-md mt-1">
                        <input class="active:border-0" name="ktp" type="file">
                    </div>
                    <x-input-label for="ktp" :value="__('Format : jpg, jpeg, png, pdf;  Maksimal size : 2 MB')" />
                </div>

                <div class="mt-3 hidden" id="ijasah">
                    <x-input-label for="ijasah" :value="__('Ijasah')" />
                    <div class="border-gray-300 border text-sm shadow-sm p-2 rounded-md mt-1">
                        <input class="active:border-0" name="ijasah" type="file">
                    </div>
                    <x-input-label for="ijasah" :value="__('Format : jpg, jpeg, png, pdf;  Maksimal size : 2 MB')" />
                </div>

                <div class="mt-3 hidden" id="ktm">
                    <x-input-label for="karpeg" :value="__('Karpeg / KTM')" />
                    <div class="border-gray-300 border text-sm shadow-sm p-2 rounded-md mt-1">
                        <input class="active:border-0" name="karpeg" type="file">
                    </div>
                    <x-input-label for="karpeg" :value="__('Format : jpg, jpeg, png, pdf;  Maksimal size : 2 MB')" />
                </div>

                <div
                    class="flex items-center justify-between mt-3 bg-[#F5F5F5] w-7/12 px-4 py-4 border rounded-lg border-[#938C8C]">
                    <div class="flex items-center gap-2">
                        <input name="imnotrobot" type="checkbox">
                        <label for="imnotrobot"> I'm, not robot</label>
                    </div>
                    <img src="/assets/recaptcha.png" alt="reCAPTCHA image">
                </div>

                <x-primary-button class="mt-3 w-full">
                    {{ __('Sign Up') }}
                </x-primary-button>

                <div class="flex items-center justify-center font-medium mt-2">
                    <a class="text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Sudah Mempunyai Akun? Login') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
    <script>
        function tipeakun(that) {
            if (that.value == "Umum") {
                document.getElementById("institusi").style.display = "block";
                document.getElementById("ktp").style.display = "block";
                document.getElementById("ktm").style.display = "block";
                document.getElementById("perguruantinggi").style.display = "none";
                document.getElementById("institutlemdikti").style.display = "none";
                document.getElementById("ijasah").style.display = "none";
                document.getElementById("email").style.display = "block";
            } else if (that.value == "Alumni Telkom University") {
                document.getElementById("ktp").style.display = "block";
                document.getElementById("ijasah").style.display = "block";
                document.getElementById("email").style.display = "block";
                document.getElementById("institusi").style.display = "none";
                document.getElementById("ktm").style.display = "none";
                document.getElementById("institutlemdikti").style.display = "none";
                document.getElementById("perguruantinggi").style.display = "none";
            } else if (that.value == "Perguruan Tinggi Asuh") {
                document.getElementById("perguruantinggi").style.display = "block";
                document.getElementById("institutlemdikti").style.display = "none";
                document.getElementById("institusi").style.display = "none";
                document.getElementById("ijasah").style.display = "none";
                document.getElementById("ktp").style.display = "block";
                document.getElementById("ktm").style.display = "block";
                document.getElementById("email").style.display = "block";
            } else if (that.value == "Lemdikti YPT") {
                document.getElementById("perguruantinggi").style.display = "none";
                document.getElementById("ijasah").style.display = "none";
                document.getElementById("institusi").style.display = "none";
                document.getElementById("institutlemdikti").style.display = "block";
                document.getElementById("ktp").style.display = "block";
                document.getElementById("ktm").style.display = "block";
                document.getElementById("email").style.display = "block";
            }
        }

    </script>
</x-guest-layout>
