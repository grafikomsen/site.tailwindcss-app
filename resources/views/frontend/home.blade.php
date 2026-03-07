@extends('app.app')
@section('main')

    <!-- HERO SECTION -->
    <section id="Hero">
        <div class="container flex flex-col items-center gap-10 md:flex-row">
            <div class="mx-auto md:basis-1/2 lg:basis-2/5 animate-movingY">
                <img class="w-60 md:w-full" src="{{ asset('frontend-assets/images/home-image.png') }}" alt="hero-image">
            </div>
            <div class="text-center md:basis-1/2 md:text-start lg:basis-3/5">
                <h1 class="home-title">HAPPY TUMMY WITH TASTY BURGERS</h1>
                <div class="mx-auto separator md:mx-0"></div>
                <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Odio aperiam placeat nesciunt necessitatibus esse, veritatis
                    obcaecati, ipsum odit perferendis laboriosam voluptate dolorem
                    expedita quis repellendus recusandae! Dolorem ducimus quis voluptate?
                </p>
                <div class="flex items-center justify-center gap-4 py-10 text-base md:justify-start md:gap-10">
                    <div class="text-center">
                        <i class="text-4xl fa-solid text-secondaryColor fa-utensils"></i><br>
                        Delicious
                    </div>
                    <div class="text-center">
                        <i class="text-4xl fa-solid text-secondaryColor fa-droplet"></i><br>
                        Fresh
                    </div>
                    <div class="text-center">
                        <i class="text-4xl fa-brands text-secondaryColor fa-envira"></i><br>
                        Organic
                    </div>
                </div>
                <a class="btn btn-primary" href="">Learn More</a>
            </div>
        </div>
    </section>

    <!-- CATEGORIES SECTION -->
    <section id="Category">
        <div class="container flex flex-col gap-5 md:flex-row">
            <!-- CARD 1 -->
            <div class="flex py-3 overflow-hidden rounded-lg bg-secondaryColor">
                <div class="relative basis-1/3">
                    <img class="absolute w-34 -bottom-4 -left-4" src="{{ asset('frontend-assets/images/burger-1.png') }}" alt="">
                </div>
                <div class="basis-2/3">
                    <div class="mb-3">
                        <h4 class="card-title">Food</h4>
                        <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <a class="text-black" href="">Buy online</a>
                </div>
            </div>
            <!-- CARD 2 -->
            <div class="flex py-3 overflow-hidden rounded-lg bg-redColor">
                <div class="relative basis-1/3">
                    <img class="absolute w-34 -bottom-4 -left-4" src="{{ asset('frontend-assets/images/snack-1.png') }}" alt="">
                </div>
                <div class="basis-2/3">
                    <div class="mb-3">
                        <h4 class="card-title">Snack</h4>
                        <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <a class="text-secondaryColor" href="">Buy online</a>
                </div>
            </div>
            <!-- CARD 3 -->
            <div class="flex py-3 overflow-hidden rounded-lg bg-greenColor">
                <div class="relative basis-1/3">
                    <img class="absolute w-34 -bottom-4 -left-4" src="{{ asset('frontend-assets/images/beverage-2.png') }}" alt="">
                </div>
                <div class="basis-2/3">
                    <div class="mb-3">
                        <h4 class="card-title">Beverage</h4>
                        <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                    <a class="text-secondaryColor" href="">Buy online</a>
                </div>
            </div>
        </div>
    </section>

    <!-- PROMOS SECTION -->
    <section id="Promo">
        <div class="container flex flex-col gap-4 md:flex-row">
            <!-- CARD 1 -->
            <div class="flex flex-col p-5 rounded-lg bg-primaryColorLight">

                <img class="w-40 mx-auto hover:animate-movingY" src="{{ asset('frontend-assets/images/promo-1.png') }}" alt="Promo image">

                <div class="mt-4 space-y-2 ">
                    <p class="text-sm text-secondaryColor">Payday promo</p>
                    <h3 class="card-title">Get 10% discount on payday week</h3>
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a class="text-xs text-secondaryColor" href="">Buy online</a>
                </div>
            </div>
            <!-- CARD 2 -->
            <div class="flex flex-col p-5 rounded-lg bg-primaryColorLight">

                <img class="w-40 mx-auto hover:animate-movingY" src="{{ asset('frontend-assets/images/promo-2.png') }}" alt="Promo image">

                <div class="mt-4 space-y-2 ">
                    <p class="text-sm text-secondaryColor">Payday promo</p>
                    <h3 class="card-title">Get 10% discount on payday week</h3>
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a class="text-xs text-secondaryColor" href="">Buy online</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="About">
        <div class="container flex flex-col gap-10 md:flex-row">
            <div class="flex-1">
                <img class="rounded-lg" src="{{ asset('frontend-assets/images/about.jpg') }}" alt="">
            </div>
            <div class="flex-1">
                <h2 class="section-title">FIND FOOD AND DRINKS, ALL-IN-ONE PLACE FOR YOUR BEST TASTE.</h2>
                <div class="separator"></div>
                <p class="para">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo ligula eget dolor. Aenean massa.
                    Cum sociis natoque penatibus et magnis dis parturient montes.
                </p>
                <ul class="grid grid-cols-2 py-5 space-y-1">
                    <li class="text-paragraphColor">
                        <i class="fa-solid fa-check text-secondaryColor"></i>
                        Best Price
                    </li>
                     <li class="text-paragraphColor">
                        <i class="fa-solid fa-check text-secondaryColor"></i>
                        Fresh Ingredient
                    </li>
                     <li class="text-paragraphColor">
                        <i class="fa-solid fa-check text-secondaryColor"></i>
                        Best Service
                    </li>
                     <li class=" text-paragraphColor">
                        <i class="fa-solid fa-check text-secondaryColor"></i>
                        Health Protocol
                    </li>
                </ul>
                <a class="btn btn-primary" href="">About Us</a>
            </div>
        </div>
    </section>
@endsection
