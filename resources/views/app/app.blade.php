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
        <header class="fixed top-0 left-0 w-full z-50 bg-primaryColor">
            <nav class="px-6 md:px-20 flex items-center justify-between h-14 relative">
                <div>
                    <a href="{{ route('home') }}" class="text-2xl uppercase font-oswald font-bold">bur<span class="text-secondaryColor">ger</span></a>
                </div>
                <div class="hidden absolute top-0 left-0 w-full py-14 bg-primaryColor border-b border-secondaryColor md:block md:static md:py-0 md:border-none md:w-auto md:ml-auto" id="nav-menu">
                    <ul class="flex flex-col md:flex-row text-center gap-4">
                        <li><a href="#Hero" class="nav-link hover:text-secondaryColor ease-in duration-200">Home</a></li>
                        <li><a href="#about" class="nav-link hover:text-secondaryColor ease-in duration-200">About Us</a></li>
                        <li><a href="#menu" class="nav-link hover:text-secondaryColor ease-in duration-200">Menu</a></li>
                        <li><a href="#reviews" class="nav-link hover:text-secondaryColor ease-in duration-200">Reviews</a></li>
                        <li><a href="#contact" class="nav-link hover:text-secondaryColor ease-in duration-200">Contact</a></li>
                    </ul>
                    <div class="absolute top-[0.7rem] right-4 text-2xl cursor-pointer md:hidden" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <i class="ri-moon-line text-xl ml-4 cursor-pointer"></i>
                    <div id="hamburger" class="md:hidden">
                        <i class="ri-menu-2-line text-xl cursor-pointer"></i>
                    </div>
                </div>
            </nav>
        </header>
        @yield('main')
        <footer class="text-white">

        </footer>

        <!--~~~~~~~~~~~~~~~ Scroll Up ~~~~~~~~~~~~~~~-->

        <!--~~~~~~~~~~~~~~~ Swiper JS ~~~~~~~~~~~~~~~-->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <!--~~~~~~~~~~~~~~~ Scroll Reveal ~~~~~~~~~~~~~~~-->
        <script src="https://unpkg.com/scrollreveal"></script>
        <!--~~~~~~~~~~~~~~~ Main.js ~~~~~~~~~~~~~~~-->
        <script src="{{ asset('frontend-assets/mainjs/main.js') }}"></script>
    </body>
</html>
