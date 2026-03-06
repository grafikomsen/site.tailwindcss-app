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
@endsection
