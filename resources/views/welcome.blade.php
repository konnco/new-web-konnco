<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/konnco-logo.png') }}">
    <title>Konnco Studio - Execute Better</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="js/swiper.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs-scroll-to@latest/dist/scroll-to.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.5/cdn.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script defer src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script defer src="js/swiper.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>
</head>

<body x-data="{ atTop: false }">
<header class="fixed w-full inset-x-0 top-0 z-50 align-items-start xl:translate-x-0" x-scroll-to-header
    class="main-header fixed left-0 right-0 z-[111]"
    :class="{
        'shadow-lg': atTop,
        'bg-orange-200 lg:bg-transparent text-white max-lg:bg-transparent': !atTop,
        'bg-orange-200 lg:bg-white text-orange-500 max-lg:bg-white': atTop,

    }"
    @scroll.window="atTop = (window.pageYOffset < 50) ? false: true">
    <nav x-data="{navbarOpen: false}" class="relative flex items-center justify-between w-full p-2 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <img class="w-auto h-9 max-lg:h-10" src="{{ asset('assets/img/logokonnco.png') }}" alt="">
            </a>
        </div>
        <div class="items-center lg:flex lg:flex-grow lg:justify-end lg:gap-x-10 scroll-smooth max-lg:hidden">
            <a href="#home"
                class="text-base font-black leading-6  transition duration-300 ease-in-out delay-150 scroll-smooth hover:-translate-y-1 hover:scale-110 hover:text-black":class="{'lg:hover:text-black':atTop}">Home</a>
            <a href="#about"
                class="text-base font-black leading-6  transition duration-300 ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:text-black" :class="{'lg:hover:text-black':atTop}">About</a>
            <a href="#"
                class="text-base font-black leading-6  transition duration-300 ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:text-black":class="{'lg:hover:text-black':atTop}">Contact</a>
            <a href="#"
                class="rounded-full bg-orange-500 px-8 py-1.5 text-sm font-bold shadow-sm ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 hover:bg-orange-600 hover:text-black":class="{'lg:bg-orange-500 lg:text-white lg:hover:bg-orange-600 lg:hover:text-black':atTop}">Make
                Project</a>
        </div>
    <!-- Mobile menu, show/hide based on menu open state. -->
   <div class="lg:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 z-50" x-on:click="navbarOpen = !navbarOpen">
        <span class="sr-only">Open Menu</span>
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 72 72">
            <path d="M56 48c2.209 0 4 1.791 4 4 0 2.209-1.791 4-4 4-1.202 0-38.798 0-40 0-2.209 0-4-1.791-4-4 0-2.209 1.791-4 4-4C17.202 48 54.798 48 56 48zM56 32c2.209 0 4 1.791 4 4 0 2.209-1.791 4-4 4-1.202 0-38.798 0-40 0-2.209 0-4-1.791-4-4 0-2.209 1.791-4 4-4C17.202 32 54.798 32 56 32zM56 16c2.209 0 4 1.791 4 4 0 2.209-1.791 4-4 4-1.202 0-38.798 0-40 0-2.209 0-4-1.791-4-4 0-2.209 1.791-4 4-4C17.202 16 54.798 16 56 16z"></path>
            </svg>
    </button>
    <div class="fixed"></div>
    <div class="fixed inset-y-0 right-0 z-50 w-full px-6 py-6 overflow-y-auto bg-white sm:max-w-full sm:ring-1 sm:ring-gray-900/10 transition duration-200" :class="{'translate-x-full': !navbarOpen, 'translate-x-0': navbarOpen}">
        <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
                <img class="w-auto h-10" src="{{ asset('assets/img/logokonnco.png') }}"
                    alt="">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" x-on:click="navbarOpen = !navbarOpen">
                <span class="sr-only">Close menu</span>
                <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="flow-root mt-6">
            <div class="-my-6 divide-y divide-gray-500/10" >
                <div class="py-6 space-y-2">
                    <a href="#home" x-on:click="navbarOpen = false" class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-orange-300">Home</a>
                    <a href="#about" x-on:click="navbarOpen = false" class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-orange-300">About</a>
                    <a href="#"
                        class="block px-3 py-2 -mx-3 text-base font-semibold leading-7 text-gray-900 rounded-lg hover:bg-orange-300">Contact</a>
                </div>
                <div class="py-6">
                    <a href="#"
                        class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-orange-300">Make Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
    
    <section id="home" class="max-lg:bg-orange-200">
            <div class="pt-14">
                <img class="absolute right-0 -z-50 -inset-y-20 max-w-full max-lg:hidden" src="{{ asset('assets/img/designer_1.svg') }}"
                    alt="desginer">
                <div class="max-w-2xl py-32 mx-24 sm:py-48 lg:py-56">
                    <div class="text-balance">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Introduce Your Product
                            Quickly & Effectively</h1>
                        <p class="mt-6 text-lg leading-8 text-gray-600 max-lg:text-2xl">Tech doesn't have to feel like a different
                            language.
                            We built Schematiq to make sure innovation works for you, your business, and your people.
                        </p>
                        <div class="flex items-center mt-10 -mx-1 justify-left gap-x-8">
                            <a
                                href="#"class="rounded-full bg-orange-500 px-3.5 py-2 text-sm font-semibold text-white shadow-sm transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:bg-black duration-300">Purchase
                                Service</a>
                            <a
                                href="#"class="text-sm font-semibold leading-6 text-gray-900 transition duration-300 ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 hover:text-orange-600">Learn
                                More <span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="about" class="">
        <div class="bg-transparent">
            <div class="px-6 isolate lg:px-8 lg:grid grid-cols-2 max-lg:space-y-20">
                <img class="relative inset-y-16" src="{{ asset('assets/img/designer_2.svg') }}" alt="desginer">
                <div class="max-w-2xl lg:py-32">
                    <div class="">
                        <h1 class="text-4xl font-bold tracking-tight text-orange-500 max-lg:text-5x">Hanya membuat yang
                            berkualitas!</h1>
                        <p class="mt-6 text-base leading-8 text-gray-600 max-lg:text-2xl">Secara konsisten kami
                            mempelajari teknologi terbaik agar dapat terus berinovasi dan memberikan solusi terbaik untuk
                            partner bisnis kami. Kami juga membantu komunitas teknologi di sekitar kami bertumbuh dengan
                            berbagi ilmu dan pengalaman kami.
                        </p>
                    </div>
                </div>
            </div>
            <div class="bg-white">
                <div class="px-6 isolate lg:px-8 lg:grid grid-cols-2 max-lg:space-y-20">
                    <img class="w-96 h-96 right-32 max-lg:left-0 max-w-full" src="{{ asset('assets/img/designer_3.svg') }}"
                        alt="desginer">
                        <div class="max-w-2xl lg:py-32 lg:left-16 ">
                                <h1 class="text-4xl font-bold tracking-tight text-orange-500 max-lg:text-6xl">Layanan Kami</h1>
                                <p class="mt-6 text-base leading-8 text-gray-600 max-lg:text-1xl">Kami menawarkan
                                    layanan pengembangan perangkat lunak dengan kualitas tinggi. Dengan pengalaman dan pengetahuan
                                    dalam model bisnis yang umum hingga yang spesifik. Standar layanan kami meliputi </span><span
                                    class="text-base font-bold leading-relaxed text-black max-lg:text-lg">Great Design, Best User Experience,
                                    Clean Code, Fast Development, Smooth Deployment </span><span
                                    style="">dan</span><span
                                    class="text-base font-bold leading-relaxed text-black max-lg:text-lg"> Excellent
                                    Maintanance</span>
                                </p>
                        </div>
                    </div>
        <div class="">
            <div class="px-6 lg:px-20 lg:py-16 lg:grid grid-cols-2">
                <div id="design">
                    <img class="w-10 h-10 left-[-1px] top-[8px]" src="{{ asset('assets/img/design-logo.svg') }}" />
                    <h1 class="text-orange-500 font-bold"> Design</h1>
                    <p class="text-sm leading-relaxed font-normal w-64">Bekerja dengan desainer terbaik. Kami memberikan desain yang unik, minimalis, dan memiliki
                        fungsional yang baik, dengan pengguna sebagai titik awal pembuatan desain</p>
                </div>
                <div id="development">
                    <img class="w-10 h-10 left-[-1px] top-[8px]" src="{{ asset('assets/img/command-line.png') }}" />
                    <h1 class="text-orange-500 font-bold">Development</h1>
                    <p class="text-sm leading-relaxed font-normal w-64">Tidak ada tantangan yang tidak dapat dilewati oleh engineer kami. Kami berfokus pada bahasa
                        pemrograman dan framework yang mumpuni seperti React, Laravel, NodeJS, Go</p>
                </div>
            </div>
            {{-- <div class="w-96 h-14">
                <img class="w-12 h-12 left-[-0px] " src="{{ asset('assets/img/php.png') }}" />
                <img class="w-12 h-12 left-[245.90px] top-[8.02px]" src="{{ asset('assets/img/golang.png') }}" />
                <img class="w-12 h-12 left-[515.44px] top-[8.02px]" src="{{ asset('assets/img/js.png') }}" />
                <img class="w-12 h-12 left-[570.93px] top-[8.02px]" src="{{ asset('assets/img/nodejs.png') }}" />
                <img class="w-12 h-12 left-[61.49px] top-[8.02px]" src="{{ asset('assets/img/adobei.png') }}" />
                <img class="w-12 h-12 left-[307.47px] top-[8.02px]" src="{{ asset('assets/img/react.png') }}" />
                <img class="w-12 h-12 left-[368.96px] top-[8.02px]" src="{{ asset('assets/img/laravel.png') }}" />
                <img class="w-12 h-12 left-[122.99px] top-[8.02px]" src="{{ asset('assets/img/html5.png') }}" />
                <img class="w-20 h-12 left-[430.45px] top-[8.02px]" src="{{ asset('assets/img/figma.png') }}" />
                <img class="w-12 h-12 left-[184.48px] top-[8.02px]" src="{{ asset('assets/img/adobep.png') }}" />
                <img class="w-12 h-12 left-[620.42px] top-[8.02px]" src="{{ asset('assets/img/baloon.png') }}" />
            </div>
        </div>           --}}
                    {{-- 
                </div>
            </div>
            <div class="bg-white">
                <div class="px-6 isolate lg:px-8 max-lg:space-y-20 relative">
                        <div class="w-64 h-36 absolute left-[100px] max-lg:left-[30px] max-lg:-bottom-[170px]">
                            <img class="w-10 h-10 left-[-1px] top-[8px] absolute" src="{{ asset('assets/img/design-logo.svg') }}" />
                            <div class="Title w-64 left-0 top-[49px] absolute text-orange-500 text-xl font-bold leading-relaxed">
                                Design</div>
                            <div class="Body w-64 h-24 left-0 top-[77px] absolute text-black text-sm font-normal leading-relaxed">
                                Bekerja dengan desainer terbaik. Kami memberikan desain yang unik, minimalis, dan memiliki
                                fungsional yang baik, dengan pengguna sebagai titik awal pembuatan desain</div>
                        </div>
                        <div class="w-64 h-36 absolute left-[400px] max-lg:left-500 max-lg:-bottom-[170px]">
                            <img class="w-10 h-10 left-[-1px] top-[8px] absolute" src="{{ asset('assets/img/command-line.png') }}" />
                            <div class="Title w-64 left-0 top-[49px] absolute text-orange-500 text-xl font-bold leading-relaxed">
                                Development</div>
                            <div class="Body w-64 h-24 left-0 top-[77px] absolute text-black text-sm font-normal leading-relaxed">
                                Tidak ada tantangan yang tidak dapat dilewati oleh engineer kami. Kami berfokus pada bahasa
                                pemrograman dan framework yang mumpuni seperti React, Laravel, NodeJS, Go</div>
                            </div>
                        </div>
            </div> --}}
    </section>
    <section id="slider" class="">
        <div id="default-carousel" class="relative h-192 max-lg:h-192 overflow-hidden" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="rounded-lg">
                <!-- Item 1 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/ghraa-page.svg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/1cerdas-page.svg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/jogbike-page.svg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/parlent-page.svg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/artomoro-page.svg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="z-50 space-x-3 -translate-x-1/2 left-1/2 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
        </div>

        <div class="justify-center max-w-full max-h-72 px-4 py-10 mx-auto space-y-12 overflow-hidden">
            <!-- Card Slider -->
            <div class="slider-container">
                <div class="swiper-container card-slider">
                    <div class="items-center swiper-wrapper gap-x-0">
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="lg:h-32 px-0 card-image" src="{{ asset('assets/img_company/1cerdas.png') }}"
                                    alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
    
                         <!-- Slide -->
                         <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="{{ asset('assets/img_company/pusaka.png') }}"
                                    alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
    
                         <!-- Slide -->
                         <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="{{ asset('assets/img_company/raycare.png') }}"
                                    alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
    
                         <!-- Slide -->
                         <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="{{ asset('assets/img_company/wodo.png') }}"
                                    alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
    
                         <!-- Slide -->
                         <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="{{ asset('assets/img_company/v1plus.png') }}"
                                    alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
    
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="{{ asset('assets/img_company/logo10.png') }}"
                                    alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
    
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="{{ asset('assets/img_company/parlent.png') }}"
                                    alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
    
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="{{ asset('assets/img_company/efisiensi.png') }}"
                                    alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
    
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="{{ asset('assets/img_company/emon.png') }}"
                                    alt="alternative" />
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
    
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="{{ asset('assets/img_company/dirjen.png') }}"
                                    alt="alternative" />
                            </div>
                        </div>
                        <!-- Slide -->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="card-image" src="{{ asset('assets/img_company/lapas.png') }}"
                                    alt="alternative" />
                            </div>
                        </div>
                        <!--Slide-->
                        <div class="swiper-slide">
                            <div class="card">
                                <img class="lg:h-12 card-image" src="{{ asset('assets/img_company/mayin.png') }}"
                                    alt="alternative"/>
                            </div>
                        </div> <!-- end of swiper-slide -->
                        <!-- end of slide -->
    
                    </div> <!-- end of swiper-wrapper -->
    
                </div> <!-- end of swiper-container -->
            </div>
            <!-- end of card slider -->
    
        </div> <!-- end of container -->
        </div>
    </section>

    <footer class="relative left-0 right-0 z-30 bg-orange-200">
        <div class="max-w-screen-xl p-4 py-6 mx-auto md:p-8 lg:p-10">
            <div class="grid-cols-2 gap-8 space-y-8 lg:space-y-0 lg:grid md:grid-cols-3 lg:grid-cols-5">
                <div class="flex items-center col-span-3 gap-8">
                    <img class="object-fit max-lg:hidden" src="{{ asset('assets/img/logokonnco.png') }}" />
                    <div>
                        <h3 class="mb-4 text-xl font-semibold text-gray-900 uppercase lg:text-2xl">Konnco Studio</h3>
                        <p class="font-light text-gray-900 sm:text-md">
                            Jl. Cepakasari No. 695, RT.42/RW.11, Jogokaryan, Mantrijeron, Kec. Mantrijeron, Kota
                            Yogyakarta, Daerah Istimewa Yogyakarta
                        </p>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <h3 class="mb-2 text-lg font-semibold text-gray-900 uppercase">Menu</h3>
                    <ul class="text-gray-900 text-[15px]">
                        <li class="mb-2">
                            <a href="#home" class="hover:underline scroll-smooth">Home</a>
                        </li>
                        <li class="mb-2">
                            <a href="#about" class="hover:underline scroll-smooth">About</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="mb-6 text-lg font-semibold text-center text-gray-900 uppercase lg:text-left">Follow Us
                    </h3>
                    <ul class="flex justify-center mt-5 space-x-4 mr-28 max-lg:mr-0 max-lg:relative">
                        <li>
                            <a href="https://www.instagram.com/konnco.studio/" target="_blank"
                                class="text-gray-900 hover:text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/konnco/mycompany/" target="_blank"
                                class="text-gray-900 hover:text-gray-900">
                                <svg class="w-10 h-10" fill="currentColor" viewBox="0 10 45 35" aria-hidden="true">
                                    <path d="M20.9716667,33.5527338 L25.001,33.5527338 L25.001,27.1328007 C25.001,25.439485 25.3213333,23.7988354 27.4206667,23.7988354 C29.491,23.7988354 29.517,25.7351486 29.517,27.2404662 L29.517,33.5527338 L33.5506667,33.5527338 L33.5506667,26.4341413 C33.5506667,22.9381777 32.796,20.2505391 28.711,20.2505391 C26.7483333,20.2505391 25.432,21.3265278 24.8943333,22.3471839 L24.839,22.3471839 L24.839,20.5725357 L20.9716667,20.5725357 L20.9716667,33.5527338 Z M16.423,14.1202696 C15.1273333,14.1202696 14.0823333,15.1682587 14.0823333,16.4595785 C14.0823333,17.7508984 15.1273333,18.7992208 16.423,18.7992208 C17.7133333,18.7992208 18.761,17.7508984 18.761,16.4595785 C18.761,15.1682587 17.7133333,14.1202696 16.423,14.1202696 L16.423,14.1202696 Z M14.4026667,33.5527338 L18.4406667,33.5527338 L18.4406667,20.5725357 L14.4026667,20.5725357 L14.4026667,33.5527338 Z M9.76633333,40 C8.79033333,40 8,39.2090082 8,38.2336851 L8,9.76631493 C8,8.79065843 8.79033333,8 9.76633333,8 L38.234,8 C39.2093333,8 40,8.79065843 40,9.76631493 L40,38.2336851 C40,39.2090082 39.2093333,40 38.234,40 L9.76633333,40 Z" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/konnco" target="_blank"
                                class="text-gray-900 hover:text-gray-900">
                                <svg class="w-9 h-9" fill="currentColor" viewBox="0 1 24 24" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-900 lg:my-8">
            <div class="text-center">
                <span class="block text-sm text-center text-gray-900 dark:text-gray-900">&COPY; KONNCO Studio</span>
            </div>
        </div>
    </footer>

    <script>
        /* Card Slider - Swiper */
        window.onload = function() {
            var cardSlider = new Swiper('.card-slider', {
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false
                },
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                slidesPerView: 5,
                spaceBetween: 50,
                breakpoints: {
                    // when window is <= 767px
                    767: {
                        slidesPerView: 5
                    },
                    // when window is <= 1023px
                    1023: {
                        slidesPerView: 5,
                        spaceBetween: 50
                    }
                }
            });
        }
    </script>
</body>
</html>