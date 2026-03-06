@extends('app.app')
@section('main')
    <!-- HERO SECTION -->
    <section id="Hero">
        <div class="container flex flex-col items-center md:flex-row gap-10">
            <div class="mx-auto md:basis-1/2 lg:basis-2/5 animate-movingY">
                <img class="w-60 md:w-full" src="{{ asset('frontend-assets/images/home-image.png') }}" alt="hero-image">
            </div>
            <div class="text-center md:basis-1/2 md:text-start lg:basis-3/5">
                <h1 class="home-title">HAPPY TUMMY WITH TASTY BURGERS</h1>
                <div class="separator mx-auto md:mx-0"></div>
                <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Odio aperiam placeat nesciunt necessitatibus esse, veritatis
                    obcaecati, ipsum odit perferendis laboriosam voluptate dolorem
                    expedita quis repellendus recusandae! Dolorem ducimus quis voluptate?
                </p>
                <div class="flex justify-center items-center md:justify-start md:gap-10 gap-4 py-10 text-base">
                    <div class="text-center">
                        <i class="fa-solid text-secondaryColor text-4xl fa-utensils"></i><br>
                        Delicious
                    </div>
                    <div class="text-center">
                        <i class="fa-solid text-secondaryColor text-4xl fa-droplet"></i><br>
                        Fresh
                    </div>
                    <div class="text-center">
                        <i class="fa-brands text-secondaryColor text-4xl fa-envira"></i><br>
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
            <div class="bg-secondaryColor flex py-3 rounded-lg overflow-hidden">
                <div class="relative basis-1/3">
                    <img class="w-34 absolute -bottom-4 -left-4" src="{{ asset('frontend-assets/images/burger-1.png') }}" alt="">
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
            <div class=" bg-redColor flex py-3 rounded-lg overflow-hidden">
                <div class="relative basis-1/3">
                    <img class="w-34 absolute -bottom-4 -left-4" src="{{ asset('frontend-assets/images/snack-1.png') }}" alt="">
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
            <div class=" bg-greenColor flex py-3 rounded-lg overflow-hidden">
                <div class="relative basis-1/3">
                    <img class="w-34 absolute -bottom-4 -left-4" src="{{ asset('frontend-assets/images/beverage-2.png') }}" alt="">
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
            <div class="flex flex-col p-5 bg-primaryColorLight rounded-lg">

                <img class="w-40 mx-auto hover:animate-movingY" src="{{ asset('frontend-assets/images/promo-1.png') }}" alt="Promo image">

                <div class=" mt-4 space-y-2">
                    <p class="text-secondaryColor text-sm">Payday promo</p>
                    <h3 class="card-title">Get 10% discount on payday week</h3>
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a class="text-xs text-secondaryColor" href="">Buy online</a>
                </div>
            </div>
            <!-- CARD 2 -->
            <div class="flex flex-col p-5 bg-primaryColorLight rounded-lg">

                <img class="w-40 mx-auto hover:animate-movingY" src="{{ asset('frontend-assets/images/promo-2.png') }}" alt="Promo image">

                <div class=" mt-4 space-y-2">
                    <p class="text-secondaryColor text-sm">Payday promo</p>
                    <h3 class="card-title">Get 10% discount on payday week</h3>
                    <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a class="text-xs text-secondaryColor" href="">Buy online</a>
                </div>
            </div>
        </div>
    </section>
@endsection
