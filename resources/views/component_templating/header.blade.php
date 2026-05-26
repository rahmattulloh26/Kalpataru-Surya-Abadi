<header class="w-full fixed top-0 z-10 cursor-pointer font-inter font-bold bg-white">
    <div class="py-3 md:py-2 lg:py-4 xl:py-0 px-10 md:px-25 lg:px-10 md:pl-15 xl:pl-50">
        <div class="container mx-auto flex items-center justify-between">
            {{-- ==== Kiri: Logo ==== --}}
            <div class="flex items-center gap-3">
                <a href="/" class="flex items-center gap-2">
                    {{-- Logo --}}
                    <img src="{{ asset('src/img/logo-ksa.png') }}" alt="Kalpataru Surya Abadi"
                        class="w-16 md:w-20 lg:w-24 object-contain">
                    {{-- Name Text --}}
                    <div class="flex flex-col leading-none">
                        <h1 class="text-[11px] md:text-sm  text-hijau uppercase whitespace-nowrap">
                            PT Kalpataru Surya Abadi
                        </h1>
                        <P class="text-[8px] md:text-[10px] text-gray-600 whitespace-nowrap">
                            Konsultasi Lingkungan dan Perizinan Usaha
                        </p>
                    </div>
                </a>
            </div>
            <nav id="nav-menu"
                class="hidden absolute  bg-white text-hijau whitespace-nowrap max-w-[200px] w-full  right-0 top-full xl:block xl:static xl:bg-transparent py-3 xl:py-6 xl:max-w-full rounded-bl-2xl xl:rounded-none z-50">
                <ul class="block lg:flex lg:ml-20 xl:w-full xl:justify-center xl:items-center ">
                    <li>
                        <a href="" class="block py-2.5 md:px-4 px-6 lg:px-0 xl:px-8 ">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="" class="block py-2.5 md:px-4 px-6 lg:px-0 xl:px-8 ">
                            About Us
                        </a>
                    </li>
                    <li class="group relative block xl:flex items-center">
                        <a href="" id="produk-dropdown-btn"
                            class="py-2.5 px-6 md:px-4 lg:px-0 xl:px-8 flex items-center   cursor-pointer">
                            Service <svg class="w-4 h-4 ml-1 transition-transform duration-200" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>

                        <div id="produk-dropdown-menu"
                            class="hidden xl:absolute right-0 xl:top-full lg:mt-2  w-full xl:w-40 rounded-md py-1 xl:z-20">
                            <a href="#" class="block px-8 py-2.5 lg:px-3">
                                1:
                            </a>
                            <a href="#" class="block px-8 py-2.5 lg:px-3">
                                2:
                            </a>
                            <a href="#" class="block px-8 py-2.5 lg:px-3">
                                3:
                            </a>
                            <a href="#" class="block px-8 py-2.5 lg:px-3">
                                4:
                            </a>
                        </div>
                    </li>
                    {{-- <li >
                        <a href="" class="block py-2.5 px-6 md:px-4 lg:px-0 xl:px-8 ">
                            Service
                        </a>
                    </li> --}}
                    <li>
                        <a href="" class=" block py-2.5 px-6 md:px-4 lg:px-0 xl:px-8 xl:pr-20 ">
                            Portofolio
                        </a>
                    </li>
                </ul>
            </nav>
            {{-- ==== Kanan: Tombol Aksi + Hamburger ==== --}}
            <div class="flex items-center space-x-3">
                <div class="hidden  xl:flex  md:pr-16  xl:pr-50   items-center space-x-3">
                    <a href="https://wa.me/{{ config('app.contact_phone') }}?text={{ urlencode('Halo PT. Kalpataru Surya Abadi, saya ingin menanyakan perihal produk Anda.') }}"
                        class=" button px-10 py-2  text-sm  rounded-[1px] border-2 border-hijau text-hijau hover:text-yellow-400 transition-colors whitespace-nowrap">
                        Contact Us
                    </a>
                </div>

                {{-- Hamburger hanya tampil di mobile --}}
                <button id="hamburger" name="hamburger" type="button" class="block p-3 xl:hidden">
                    <span
                        class="hamburger-line block w-[25px] h-[2px] my-1 bg-black transition duration-300 ease-in-out origin-bottom-left"></span>
                    <span
                        class="hamburger-line block w-[25px] h-[2px] my-1 bg-black transition duration-300 ease-in-out"></span>
                    <span
                        class="hamburger-line block w-[25px] h-[2px] my-1 bg-black transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>
            </div>

        </div>
    </div>
</header>
