@extends('layouts.main')

@section('title', 'Brazilian Jiu-Jitsu - MMA Fight Club Bad Hersfeld')
@section('meta-description', 'Learn about Brazilian Jiu-Jitsu (BJJ) at our MMA Fight Club. Explore our classes, benefits, and detailed curriculum.')

@section('content')

<x-hero-header>
  <h1 class="text-4xl font-bold lg:text-5xl md:-mr-20">BRAZILLIAN JIU-JITSU <span class="text-ci-red">(BJJ)</span></h1>
  <x-divider />
  <p class="text-xl dynamicText md:text-2xl">Brazilian Jiu-Jitsu <span class="text-ci-red">(BJJ)</span> is a martial art and combat sport that focuses on ground fighting and submission holds.</p>
  <p class="text-xl dynamicText md:text-2xl">It emphasizes the use of technique and leverage to control and submit opponents, making it possible for a smaller individual to defeat a larger, stronger opponent.</p>
  <p class="text-xl dynamicText md:text-2xl"> BJJ practitioners use joint locks and chokeholds to submit their adversaries.</p>
</x-hero-header>

<section class="container grid gap-4 px-4 py-12 mx-auto sm:grid-cols-2">
  <div class="w-full h-64 bg-center bg-no-repeat bg-cover sm:h-80" style="background-image: url('./images/jitsu_1.jpeg')"></div>
  <div class="w-full h-64 bg-center bg-no-repeat bg-cover sm:h-80" style="background-image: url('./images/jitsu_1.jpeg')"></div>
  <div class="w-full h-64 bg-center bg-no-repeat bg-cover sm:h-80" style="background-image: url('./images/jitsu_1.jpeg')"></div>
  <div class="w-full h-64 bg-center bg-no-repeat bg-cover sm:h-80" style="background-image: url('./images/jitsu_1.jpeg')"></div>
  <div class="w-full h-64 bg-center bg-no-repeat bg-cover sm:h-80" style="background-image: url('./images/jitsu_1.jpeg')"></div>
  <div class="w-full h-64 bg-center bg-no-repeat bg-cover sm:h-80" style="background-image: url('./images/jitsu_1.jpeg')"></div>
</section>


<section class="p-4 py-12 text-white bg-black bg-opacity-90 bg-cage">
  
  <div class="mx-auto max-w-[1600px] md:gap-16 md:grid-cols-2 grid w-full gap-8 ">
    <div class="flex flex-col gap-4">
      <div class="space-y-1">
        <h3 class="mb-4 text-2xl font-bold lg:text-3xl">Benefits of Training in BJJ</h3>
        <p class="text-lg md:text-xl">Training in Brazilian Jiu-Jitsu offers numerous physical and mental benefits. Physically, it improves strength, flexibility, and cardiovascular health.</p>
        <p class="text-lg md:text-xl">Mentally, it enhances problem-solving skills, boosts confidence, and fosters discipline.</p>
        <p class="text-lg md:text-xl">BJJ also promotes camaraderie and respect among practitioners, creating a supportive community.</p>
      </div>
      <a 
        href="{{route('time-table')}}" 
        title="View our Jiu-Jitsu class timetable"
        class="text-xl font-bold text-ci-red hover:text-ci-red"
      >
        View Timetable
      </a>
    </div>

    <div class="flex flex-col gap-4">
      <div class="space-y-1">
        <h4 class="mb-4 text-2xl font-bold lg:text-3xl">Classes and Curriculum</h4>
        <p class="text-lg md:text-xl">Our BJJ classes cater to all skill levels, from beginners to advanced practitioners. The curriculum includes fundamental techniques, advanced submissions, and positional strategies.</p>
        <p class="text-lg md:text-xl">We also offer specialized classes such as no-gi training and competition preparation. Join us to start your journey in mastering the art of Brazilian Jiu-Jitsu.</p>
      </div>
      <a 
        href="{{route('contact')}}" 
        title="Book your first Jiu Jitsu class with us"
        class="text-xl font-bold text-ci-red hover:text-ci-red"
      >
        Book your first class
      </a>
    </div>
 
  </div>
  

</section>

@endsection