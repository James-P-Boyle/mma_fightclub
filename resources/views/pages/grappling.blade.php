@extends('layouts.main')

@section('title', 'Grappling - MMA Fight Club Bad Hersfeld')
@section('meta-description', 'Learn about Grappling at our MMA Fight Club. Explore our classes, benefits, and detailed curriculum.')

@section('content')

<x-hero-header>
  <h1 class="text-4xl font-bold md:-mr-12 lg:text-5xl">Grappling</h1>
  <x-divider />
  <p class="text-xl dynamicText md:text-2xl"><span class="text-ci-red">Grappling</span> is a broad term that encompasses various techniques used to control and submit an opponent through clinch and ground fighting.</p>
  <p class="text-xl dynamicText md:text-2xl">It includes techniques from wrestling, Brazilian Jiu-Jitsu, judo, and sambo.</p>
  <p class="text-xl dynamicText md:text-2xl">Grappling focuses on throws, takedowns, joint locks, and pins to dominate and neutralize opponents</p>
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
        <h3 class="mb-4 text-2xl font-bold lg:text-3xl">Benefits of Grappling Training</h3>
        <p class="md:text-xl">Training in grappling improves core strength, balance, and flexibility. It also enhances situational awareness and tactical thinking.</p>
        <p class="md:text-xl">Grappling is an excellent way to develop functional strength and endurance while learning effective self-defense techniques.</p>
        <p class="md:text-xl">The physical and mental challenges of grappling foster personal growth and discipline.</p>
      </div>
      <a 
        href="{{route('grappling')}}" 
        title="View our Grappling classes timetable"
        class="text-xl font-bold text-ci-red hover:text-ci-red"
      >
        View Timetable
      </a>
    </div>

    <div class="flex flex-col gap-4">
      <div class="space-y-1">
        <h4 class="mb-4 text-2xl font-bold lg:text-3xl">Classes and Curriculum</h4>
        <p class="md:text-xl">Our grappling classes cover techniques from various disciplines to provide a comprehensive grappling education.</p>
        <p class="md:text-xl">We offer classes for all skill levels, focusing on drills, live sparring, and technique refinement. </p>
        <p class="md:text-xl">Whether you're a beginner or an experienced grappler, our program is designed to help you improve and achieve your goals.</p>
      </div>
      <a 
        href="{{route('contact')}}" 
        title="Book your first Grappling class with us"
        class="text-xl font-bold text-ci-red hover:text-ci-red"
      >
        Book your first class
      </a>
    </div>
 
  </div>
  

</section>

@endsection