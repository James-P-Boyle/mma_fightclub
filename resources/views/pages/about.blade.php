@extends('layouts.main')

@section('content')

<x-hero-header>
  <h1 class="text-4xl font-bold lg:text-5xl">About Me</h1>
  <x-divider />
</x-hero-header>

<section>
  OUR GYM (PHOTOS)
</section>
<section>
  OUR TEAM (PHOTOS)
</section>
<section class="text-white bg-black bg-opacity-90 bg-cage">
        
  <div class="grid md:grid-cols-[1fr_2fr] md:gap-6 max-w-[1600px] mx-auto">
    <div class="w-full h-[500px] md:h-[600px] bg-center bg-contain bg-no-repeat" style="background-image: url('./images/about_1.jpeg');">
      <!-- Background image is set here -->
    </div>
   
    <div class="flex flex-col justify-center gap-4 px-4 py-8 md:px-8">
 
      <h4 class="text-2xl font-bold">
        Hello, I'm Markus Jamaal Leis. 
      </h4>
      <x-divider />

      <p class="text-xl md:text-xl">
        Born on April 18, 1977, I've dedicated my life to mastering and teaching martial arts. With extensive experience in Wing Tsung, Tai Chi, Brazilian Jiu-Jitsu, Kickboxing, K1, Muay Thai, and MMA, I've trained with some of the best minds in the field, continuously honing my skills and expanding my expertise.
      </p>
      <p class="text-xl md:text-xl">
        My lifelong dedication to martial arts drives me to help each student reach their full potential. Whether you're a beginner or an advanced practitioner, I'm here to guide you on your journey.
      </p>
      <p class="text-xl text-left md:text-xl">
        I look forward to welcoming you to our martial arts community.
      </p>

      <a 
        href="{{route('contact')}}" 
        title="Book your first jiu jitsu class with us"
        class="text-2xl font-bold text-ci-red hover:text-ci-red"
      >
        Contact
      </a>
    </div>
 
  </div>
  
</section>

@endsection