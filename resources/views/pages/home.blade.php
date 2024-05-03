@extends('layouts.main')

@section('content')
    <header class="relative min-h-screen w-full flex items-center">
      <div class="background-slider">
        <img id="image1" src="./images/hero-1.jpg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover">
        <img id="image2" src="./images/hero-2.jpg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover">
        <img id="image3" src="./images/hero-3.jpg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover">
      </div>
      <div class="absolute inset-0 bg-black bg-opacity-70"></div>
      <div class="w-full relative max-w-[600px] text-white px-4 md:px-8">
        <h1 class="text-4xl lg:text-6xl font-bold">Find your <span class="text-red-700">redy</span> stuff for your room</h1>
        <div class="w-20 h-2 bg-red-700 my-4 divider"></div>
        <p id="dynamicText" class="text-xl mb-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus maiores obcaecati, expedita ab cumque repellendus nesciunt laboriosam mollitia maxime. Beatae, quam. Ad maiores laborum eum at possimus repellat magni minus.</p>
        <div class="space-x-2">
          <button class="hover:scale-105 bg-white text-red-500 text-2xl font-medium px-4 py-2 rounded shadow">Learn More</button>
          <button class="hover:scale-105 bg-red-500 text-white text-2xl font-medium px-4 py-2 rounded shadow">Contact</button>
        </div>
      </div>
    </header>

    @include('sections.highlights')

    @include('sections.about')

    @include('sections.gallery-preview')

    @include('sections.faq')

@endsection