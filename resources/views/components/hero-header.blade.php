@props(['imagePaths'])

<header class="relative min-h-[30vh] py-12 w-full flex flex-col-reverse items-center md:flex-row gap-8">

    <div class="background-slider">   
        <img src="./images/hero_1.jpeg" alt="Hero Image" class="absolute inset-0 object-cover w-full h-full">
    </div>
    
    <div class="absolute inset-0 bg-black bg-opacity-90"></div>

    <div class="relative w-full px-4 text-white md:px-8">

        {{$slot}}

    </div>

    <div class="z-10 w-full bg-center bg-no-repeat bg-contain min-h-64 sm:h-80" style="background-image: url('./images/logo.jpeg')"></div>

</header>