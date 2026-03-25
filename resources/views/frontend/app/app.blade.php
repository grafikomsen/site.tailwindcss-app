<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--~~~~~~~~~~~~~~~ Favicon ~~~~~~~~~~~~~~~-->
        <link rel="shortcut icon" href="{{ asset('frontend-assets/images/favicon.png') }}" type="image/x-icon" />

        <!--~~~~~~~~~~~~~~~ Favicon ~~~~~~~~~~~~~~~-->
        <title>{{ config('app.name', 'Tailwindcss') }}</title>

        <!--~~~~~~~~~~~~~~~ CSS ~~~~~~~~~~~~~~~-->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!--~~~~~~~~~~~~~~~ Font Awesome ~~~~~~~~~~~~~~~-->
        <link rel="stylesheet" href="{{ asset('frontend-assets/fontawesome/css/all.min.css') }}" />

        <!--~~~~~~~~~~~~~~~ Remix Icon ~~~~~~~~~~~~~~~-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"/>

        <!--  Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    </head>
    <body>
        <header class="fixed top-0 left-0 z-50 w-full bg-primaryColor dark:bg-darkColor" id="header">
            <nav class="relative flex items-center justify-between h-16 px-6 md:px-20">
                <div>
                    <a href="{{ route('home') }}" class="text-2xl font-bold uppercase font-oswald">bur<span class="text-secondaryColor">ger</span></a>
                </div>
                <div class="absolute top-0 left-0 hidden w-full border-b py-14 bg-primaryColor dark:bg-darkColor border-secondaryColor md:block md:static md:py-0 md:border-none md:w-auto md:ml-auto" id="nav-menu">
                    <ul class="flex flex-col gap-4 text-center md:flex-row">
                        <li><a href="#Hero" class="duration-200 ease-in nav-link hover:text-secondaryColor">Home</a></li>
                        <li><a href="#About" class="duration-200 ease-in nav-link hover:text-secondaryColor">About Us</a></li>
                        <li><a href="#Menu" class="duration-200 ease-in nav-link hover:text-secondaryColor">Menu</a></li>
                        <li><a href="#Reviews" class="duration-200 ease-in nav-link hover:text-secondaryColor">Reviews</a></li>
                        <li><a href="#Contact" class="duration-200 ease-in nav-link hover:text-secondaryColor">Contact</a></li>
                    </ul>
                    <div class="absolute top-[0.7rem] right-4 text-2xl cursor-pointer md:hidden" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <i class="ml-4 text-xl cursor-pointer ri-moon-line" id="theme-toggle"></i>
                    <div id="hamburger" class="md:hidden">
                        <i class="text-xl cursor-pointer ri-menu-2-line"></i>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            @yield('main')
        </main>

        <footer class="py-16">
            <div class="container">
                <div class="grid grid-cols-1 gap-5 pb-5 md:grid-cols-2 lg:grid-cols-4 lg:gap-8">
                    <div class="flex flex-col gap-3">
                        <a href="{{ route('home') }}" class="text-2xl font-bold uppercase font-oswald">
                            Bur<span class="text-secondaryColor">ger</span>
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                        </p>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="card-title">SUPPORT</h3>
                        <ul>
                            <li><a href="" class="duration-200 ease-linear hover:text-secondaryColor">FAQ</a></li>
                            <li><a href="" class="duration-200 ease-linear hover:text-secondaryColor">Privacy Policy</a></li>
                            <li><a href="" class="duration-200 ease-linear hover:text-secondaryColor">Term & Condition</a></li>
                            <li><a href="" class="duration-200 ease-linear hover:text-secondaryColor">Contact</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div>
                            <h3 class="text-base font-bold">EMAIL</h3>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-envelope"></i>
                                <h3>burger.info@email.com</h3>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-base font-bold">PHONE</h3>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-phone"></i>
                                <h3>+1 000 000 0000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        <div>
                            <h3 class="text-base font-bold">ADDRESS</h3>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-location-dot"></i>
                                <h3>Address goes here</h3>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-base font-bold">FOLLOW US</h3>
                            <div class="flex items-center gap-2">
                                <a href="" class="p-2 duration-200 ease-linear rounded bg-secondaryColor hover:opacity-80"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="" class="p-2 duration-200 ease-linear rounded bg-secondaryColor hover:opacity-80"><i class="fa-brands fa-twitter"></i></a>
                                <a href="" class="p-2 duration-200 ease-linear rounded bg-secondaryColor hover:opacity-80"><i class="fa-brands fa-square-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center py-2 border-t border-secondaryColor md:flex-row md:items-center md:justify-between">
                    <p>Burger template kit by Light Code.</p>
                    <p>Copyright 2026. All rights reserved</p>
                </div>
            </div>
        </footer>

        <!--~~~~~~~~~~~~~~~ Scroll Up ~~~~~~~~~~~~~~~-->
        <a href="#" id="scroll-up" class="fixed z-50 px-3 py-2 duration-200 ease-in
         rounded-full shadow-sm -bottom-1/2 text-lg text-neutral-900 hover:-translate-y-1
         right-4 bg-secondaryColor">
            <i class="fa-solid fa-arrow-up"></i>
        </a>

        <!--~~~~~~~~~~~~~~~ Swiper JS ~~~~~~~~~~~~~~~-->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <!--~~~~~~~~~~~~~~~ Scroll Reveal ~~~~~~~~~~~~~~~-->
        <script src="https://unpkg.com/scrollreveal"></script>
        <!--~~~~~~~~~~~~~~~ Main.js ~~~~~~~~~~~~~~~-->
        <script src="{{ asset('frontend-assets/mainjs/main.js') }}"></script>
    </body>
</html>
