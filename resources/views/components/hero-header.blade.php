@props(['imagePaths'])

<header class="relative min-h-[30vh] w-full bg-cage">
  
    {{-- <div class="background-slider">   
        <img src="./images/hero_1.jpeg" alt="Hero Image" class="absolute inset-0 object-cover w-full h-full opacity-10">
    </div> --}}

    <div class="absolute inset-0 bg-black bg-opacity-90"></div>

    <div class="flex flex-col-reverse items-center gap-8 py-12 md:flex-row max-w-[1600px] mx-auto">

        <div class="relative w-full px-4 text-white md:px-8">
            {{$slot}}
        </div>

        <div class="z-10 w-full bg-center bg-no-repeat bg-contain min-h-64 sm:h-80" style="background-image: url('./images/logo.jpeg')"></div>
    </div>
</header>