<style>
    .pie {
  display: inline-block;
  width: 40px;
  height: 40px;
  background: #808080;
  line-height: 10px;
  border-radius: 20px;
  overflow: hidden;
}
.pie-4 > div {
  display: inline-block;
  width: 20px;
  height: 20px;
}
.pie-4 > div:nth-child(1) {
    background:#016503; 
}
.pie-4 > div:nth-child(2) {
    background: #f00;
}
.pie-4 > div:nth-child(3) {
    background: #ff0;
}
.pie-4 > div:nth-child(4){
    background: #00f;

}

</style>
<nav x-data="{ open: false }" class="">
    <!-- Primary Navigation Menu -->
    <div class="w-full mx-auto py-2 px-3">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center font-semibold gap-4">
            <div class="flex items-center">
                <div>
                    <a href="/">
                        <img src="/assets/logo.png" alt="">
                    </a>
                </div>
                <div>
                    <a href="/">
                        <img src="/assets/logotitle.png" alt="">
                    </a>
                </div>
            </div>
                <div>
                    <ul class="flex gap-4">
                        @auth
                        <li>
                            <button id="dropdownDefaultButtons" data-dropdown-toggle="dropdowns"
                                class="flex items-center text-[#B22222] font-bold" type="button">BERANDA
                                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                        </li>
                        <div id="dropdowns"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                             <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButtons">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#FF4500] dark:hover:text-white">Beranda</a>
                                </li>
                                <li>
                                    <a href="{{route('katalog.fullsite')}}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#FF4500] dark:hover:text-white">Full
                                        Site</a>
                                </li>
                            </ul>
                        </div>
                        @else
                        <li class="cursor-pointer text-[#B22222] font-bold"><a href="/">Beranda</a></li>
                        @endif
                        <li class="cursor-pointer"><a href="{{route('katalog.index')}}">Katalog</a></li>
                        <li class="cursor-pointer">E-Publication</li>
                        <li class="cursor-pointer"><a href="{{route('gallery.index')}}">Gallery</a></li>
                        <li class="cursor-pointer"><a href="{{route('infografis.index')}}">Infografis</a></li>

                        <li><button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center"
                                type="button">Lainnya
                                <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button></li>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#FF4500] dark:hover:text-white">Tel-u
                                        Press</a>
                                </li>
                                <li>
                                    <a href="{{route('opencourseware.index')}}"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-[#FF4500] dark:hover:text-white">Tel-u
                                        Open Courseware</a>
                                </li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
                @auth
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="inline-flex items-center px-3 py-2 border border-transparent leading-4 font-bold rounded-md hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div class="flex items-center gap-2">
                                        <img class="w-3/12" src="/assets/profile.png" alt="Photo of Profile">
                                        {{ Auth::user()->name }}</div>
    
                                    <div class="ml-1">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            
                                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="#B22222" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                                </svg>
                                            </x-dropdown-link>
                                        </form>
    
                                    </div>
                                </button>
                            </x-slot>
    
                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>
    
                                <!-- Authentication -->
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                <div class="flex gap-2 items-center">
                    <div class="mt-1">
                    <div class="pie pie-4 cursor-pointer" data-modal-target="small-modal" data-modal-toggle="small-modal"><div></div><div></div><div></div><div></div></div>
                    </div>
                    <a href="/login"><button
                            class="bg-white px-3 py-1 font-bold border-2 rounded-lg border-[#FF4500] shadow-lg">LOGIN</button>
                    </a>
                    <a href="/register">
                        <button
                            class="bg-[#FF4500] text-white px-3 py-1 font-bold border-2 rounded-lg border-[#FF4500] shadow-lg">SIGN
                            UP</button></a>
                </div>
                @endif
                <div id="small-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-5 border-b rounded-t">
                            <h3 class="text-xl font-medium">
                                Ubah Tema DISC
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="small-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 flex items-center gap-2">
                            <a href="https://openlibrary-telkomuniversity.netlify.app/"><div class="w-8 h-8 rounded-full text-white grid place-items-center bg-[#016503]" style="background-color: #016503;">D</div></a>
                            <a href="https://ta-openlibrary.000webhostapp.com/"><div class="w-8 h-8 rounded-full text-white grid place-items-center bg-[#f00]" style="background-color: #f00;">I</div></a>
                            <a href="https://oplib-telkomuniv-steadiness.netlify.app/logout/beranda"><div class="w-8 h-8 rounded-full text-white grid place-items-center bg-[#00f]" style="background-color: #00f;">S</div></a>
                            <a href="https://effervescent-salamander-0412e4.netlify.app/index.html"><div class="w-8 h-8 rounded-full grid place-items-center bg-[#ff0]" style="background-color: #ff0;">C</div></a>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex justify-end p-6 space-x-2 border-t border-gray-200 rounded-b">
                            <button data-modal-hide="small-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 focus:z-10 dark:bg-[#6d747c] dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    @auth
    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
    @endif
</nav>
