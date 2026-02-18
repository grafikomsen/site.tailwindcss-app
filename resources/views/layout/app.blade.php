<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ config('app.name', 'eshop') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('frontend-assets/fontawesome/css/all.min.css') }}" />
    </head>
    <body>
        <header class="text-white font-poppins">
            <div class="topBar bg-[#0F1111] flex items-center justify-between px-10 py-4">
                <a href="" class="outline-0 hover:outline-1 p-2 outline-orange-50">
                    <img class="w-25" src="{{ asset('frontend-assets/images/amazon_logo.png') }}" alt="Logo">
                </a>
                <div class="outline-0 hover:outline-1 p-2 outline-orange-50">
                    <h6 class="text-sm">
                        Votre adresse de livraison :
                        <br><span class="font-bold">Sénégal</span>
                    </h6>
                </div>
                <form class="flex">
                    <select name="" id="" class="bg-gray-500 rounded-l-sm text-white p-2">
                        <option>Catégories</option>
                    </select>
                    <input type="text" class="text-gray-500 w-[420px] bg-white py-1 px-3 border-none" placeholder="Recherchez ici...">
                    <button type="button" class="bg-orange-500 p-2 rounded-r-sm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
                <div class="outline-0 hover:outline-1 p-2 outline-orange-50">
                    <select name="" id="" class="p-2 text-sm border-none">
                        <option >FR</option>
                        <option value="">EN</option>
                    </select>
                </div>
                <a class="outline-0 hover:outline-1 p-2 outline-orange-50">
                    <h6 class="text-sm">Bonjour, Identifiez-vous</h6>
                    <span class="text-sm font-bold">Compte et liste</span>
                </a>
                <div class="flex outline-0 hover:outline-1 p-2 outline-orange-50">
                    <h6 class="text-sm">Panier</h6>
                    <i class="fa-solid text-xl ps-2 fa-bag-shopping"></i>
                </div>
            </div>
            <nav class="bg-[#222F3D] px-16 flex items-center py-2">
                <div class="flex items-center pe-4 outline-0 hover:outline-1 p-2 outline-orange-50">
                    <i class="fa fa-bars font-bold"></i>
                    <h6 class="px-2 font-bold">Tous les catégories</h6>
                </div>
                <ul class="flex">
                    <li class="px-3 outline-0 hover:outline-1 p-2 outline-orange-50">Offres du jour</li>
                    <li class="px-3 outline-0 hover:outline-1 p-2 outline-orange-50">Service client</li>
                    <li class="px-3 outline-0 hover:outline-1 p-2 outline-orange-50">Enregistrement</li>
                    <li class="px-3 outline-0 hover:outline-1 p-2 outline-orange-50">Cartes-cadeaux</li>
                    <li class="px-3 outline-0 hover:outline-1 p-2 outline-orange-50">Vendre</li>
                </ul>
            </nav>
        </header>
        @yield('main')
    </body>
</html>
