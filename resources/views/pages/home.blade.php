@extends('layouts.main')

@section('content')
    <header class="relative min-h-[30vh] py-12 w-full flex flex-col-reverse items-center md:flex-row gap-8">
      <div class="background-slider">
        <img id="image1" src="./images/hero_1.jpeg" alt="Hero Image" class="absolute inset-0 object-cover w-full h-full">
        <img id="image2" src="./images/hero_2.jpeg" alt="Hero Image" class="absolute inset-0 object-cover w-full h-full">
        <img id="image3" src="./images/hero_3.jpeg" alt="Hero Image" class="absolute inset-0 object-cover w-full h-full">
      </div>
      <div class="absolute inset-0 bg-black bg-opacity-90"></div>
      {{-- <div class="relative w-full px-4 text-white md:px-8">
        <div class="flex flex-col flex-wrap gap-2 mb-10 leading-tight">
          <span class="text-5xl sm:text-6xl md:text-8xl">MMA FIGHTCLUB</span>
          <span class="text-4xl sm:text-5xl md:text-7xl">BAD HERSFELD</span>
        </div>
        <div class="w-32 h-2 my-4 bg-ci-red divider"></div>
        <div class="max-w-[600px]">
          <h1 class="text-4xl font-bold lg:text-6xl">Your <span class="text-ci-red">health</span> is your capital</h1>
          <div class="w-20 h-2 my-4 bg-ci-red divider"></div>
          <p id="dynamicText" class="mb-10 text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus maiores obcaecati, expedita ab cumque repellendus nesciunt laboriosam mollitia maxime. Beatae, quam. Ad maiores laborum eum at possimus repellat magni minus.</p>
        </div>
      </div> --}}
      <div class="relative w-full px-4 text-white md:px-8">
        <h1 class="text-4xl font-bold lg:text-6xl">MMA FIGHTCLUB BAD HERSFELD</h1>
        <div class="w-20 h-1 my-4 bg-ci-red divider"></div>
        <h2 class="text-2xl font-bold lg:text-4xl">Your health is not just an asset, it's your greatest investment.</h2>
        <h3 class="text-2xl lg:text-4xl">Fight for it</h3>
        <div class="w-12 h-1 my-4 bg-ci-red divider"></div>
        {{-- {{-- <div class="w-16 h-2 my-4 bg-ci-red divider"></div> --}}
        <p class="text-lg md:text-xl">Step into the cage and embrace the warrior within.</p>
        <p class="text-lg md:text-xl"><a class="underline text-ci-red" title="Contact us and find out more about our gym" href="{{route('contact')}}">Join our MMA fight club</a> and defend your well-being</p>
      </div>
      <div class="z-10 w-full bg-center bg-no-repeat bg-contain min-h-64 sm:h-80" style="background-image: url('./images/logo.jpeg')"></div>
    </header>

    @include('sections.highlights')

    @include('sections.about')

    @include('sections.faq')

@endsection