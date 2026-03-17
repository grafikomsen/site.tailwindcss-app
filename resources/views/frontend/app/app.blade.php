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
            <nav class="px-6 md:px-20 flex items-center justify-between h-16 relative">
                <div>
                    <a href="{{ route('home') }}" class="text-2xl uppercase font-oswald font-bold">bur<span class="text-secondaryColor">ger</span></a>
                </div>
                <div class="hidden absolute top-0 left-0 w-full py-14 bg-primaryColor border-b border-secondaryColor md:block md:static md:py-0 md:border-none md:w-auto md:ml-auto" id="nav-menu">
                    <ul class="flex flex-col md:flex-row text-center gap-4">
                        <li><a href="#Hero" class="nav-link hover:text-secondaryColor ease-in duration-200">Home</a></li>
                        <li><a href="#About" class="nav-link hover:text-secondaryColor ease-in duration-200">About Us</a></li>
                        <li><a href="#Menu" class="nav-link hover:text-secondaryColor ease-in duration-200">Menu</a></li>
                        <li><a href="#Reviews" class="nav-link hover:text-secondaryColor ease-in duration-200">Reviews</a></li>
                        <li><a href="#Contact" class="nav-link hover:text-secondaryColor ease-in duration-200">Contact</a></li>
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
        <main>
            @yield('main')
        </main>
        <footer class="py-16">
            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 pb-5">
                    <div class="flex flex-col gap-3">
                        <a href="{{ route('home') }}" class="text-2xl uppercase font-oswald font-bold">
                            Bur<span class="text-secondaryColor">ger</span>
                        </a>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                        </p>
                        <div>
                            <h3 class="text-base font-bold">FOLLOW US</h3>
                            <div class="flex items-center gap-2">
                                <a href="" class="bg-secondaryColor hover:opacity-80 duration-200 ease-linear p-2 rounded"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="" class="bg-secondaryColor hover:opacity-80 duration-200 ease-linear p-2 rounded"><i class="fa-brands fa-twitter"></i></a>
                                <a href="" class="bg-secondaryColor hover:opacity-80 duration-200 ease-linear p-2 rounded"><i class="fa-brands fa-square-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="card-title">SUPPORT</h3>
                        <ul>
                            <li><a href="" class="hover:text-secondaryColor duration-200 ease-linear">FAQ</a></li>
                            <li><a href="" class="hover:text-secondaryColor duration-200 ease-linear">Privacy Policy</a></li>
                            <li><a href="" class="hover:text-secondaryColor duration-200 ease-linear">Term & Condition</a></li>
                            <li><a href="" class="hover:text-secondaryColor duration-200 ease-linear">Contact</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-3">
                        <h3 class="card-title">INFORMATIONS CONTACTS</h3>
                        <div>
                            <h3 class="text-base font-bold">ADDRESS</h3>
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-location-dot"></i>
                                <h3>Address goes here</h3>
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
                </div>
            </div>
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
