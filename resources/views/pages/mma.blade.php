@extends('layouts.main')

@section('title', 'Mixed Martial Arts - MMA Fight ClubBad Hersfeld')
@section('meta-description', 'Learn about Mixed Martial Arts (MMA) at our MMA Fight Club. Explore our classes, benefits, and detailed curriculum.')

@section('content')

<x-hero-header>
  <h1 class="text-4xl font-bold md:-mr-12 lg:text-6xl">MIXED MARTIAL ARTS <span class="text-ci-red">(MMA)</span></h1>
  <div class="w-full max-w-[150px] h-1 mx-auto bg-ci-red divider md:mx-0"></div>
  <p class="text-xl dynamicText md:text-2xl">Mixed Martial Arts <span class="text-ci-red">(MMA)</span> is a full-contact combat sport that allows the use of both striking and grappling techniques, both standing and on the ground.</p>
  <p class="text-xl dynamicText md:text-2xl">It combines elements from various martial arts disciplines, including boxing, wrestling, Brazilian Jiu-Jitsu, Muay Thai, and more.</p>
  <p class="text-xl dynamicText md:text-2xl">MMA is known for its dynamic and versatile approach to fighting.</p>
</x-hero-header>

<section class="container grid gap-4 px-4 mx-auto sm:grid-cols-2">
  <div class="w-full h-64 bg-center bg-no-repeat bg-cover sm:h-80" style="background-image: url('./images/jitsu_1.jpeg')"></div>
  <div class="w-full h-64 bg-center bg-no-repeat bg-cover sm:h-80" style="background-image: url('./images/jitsu_1.jpeg')"></div>
  <div class="w-full h-64 bg-center bg-no-repeat bg-cover sm:h-80" style="background-image: url('./images/jitsu_1.jpeg')"></div>
  <div class="w-full h-64 bg-center bg-no-repeat bg-cover sm:h-80" style="background-image: url('./images/jitsu_1.jpeg')"></div>
  <div class="w-full h-64 bg-center bg-no-repeat bg-cover sm:h-80" style="background-image: url('./images/jitsu_1.jpeg')"></div>
  <div class="w-full h-64 bg-center bg-no-repeat bg-cover sm:h-80" style="background-image: url('./images/jitsu_1.jpeg')"></div>
</section>



<section class="p-4 text-white bg-black bg-opacity-90 bg-cage">
  
  <div class="mx-auto max-w-[1600px] md:gap-16 md:grid-cols-2 grid w-full gap-8 ">
    <div class="flex flex-col gap-4">
      <div class="space-y-1">
        <h3 class="mb-4 text-2xl font-bold lg:text-3xl">Benefits of Training in MMA</h3>
        <p class="md:text-xl">Training in MMA provides a comprehensive workout that enhances overall fitness. It improves strength, endurance, agility, and coordination.</p>
        <p class="md:text-xl">Additionally, MMA training boosts mental toughness, resilience, and strategic thinking.</p>
        <p class="md:text-xl">Whether you're training for competition or personal development, MMA offers a challenging and rewarding experience.</p>
      </div>
      <a 
        href="{{route('time')}}" 
        title="View our MMA class timetable"
        class="text-xl font-bold text-ci-red hover:text-ci-red"
      >
        View Timetable
      </a>
    </div>

    <div class="flex flex-col gap-4">
      <div class="space-y-1">
        <h4 class="mb-4 text-2xl font-bold lg:text-3xl">Classes and Curriculum</h4>
        <p class="md:text-xl">Our MMA program includes a diverse range of classes designed to develop all aspects of mixed martial arts.</p>
        <p class="md:text-xl">From striking techniques and grappling skills to conditioning and sparring sessions, our curriculum is structured to ensure progressive learning and skill development.</p>
        <p class="md:text-xl">Join our MMA classes to become a well-rounded martial artist.</p>
      </div>
      <a 
        href="{{route('contact')}}" 
        title="Book your first mma class with us"
        class="text-xl font-bold text-ci-red hover:text-ci-red"
      >
        Book your first class
      </a>
    </div>
 
  </div>
  

</section>

{{-- <section class="min-h-[80vh] py-16 gap-8 px-4 md:px-8 bg-black bg-opacity-90">


</section> --}}

@endsection