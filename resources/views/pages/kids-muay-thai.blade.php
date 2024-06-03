@extends('layouts.main')

@section('title', 'Kids Muay Thai - MMA Fight Club Bad Hersfeld')
@section('meta-description', 'Learn about Kids Muay Thai at our MMA Fight Club. Explore our classes, benefits, and detailed curriculum.')

@section('content')

<x-hero-header>
  <h1 class="text-4xl font-bold md:-mr-12 lg:text-5xl">Muay Thai For Kids</h1>
  <x-divider />
  <p class="text-xl dynamicText md:text-2xl"><span class="text-ci-red">Kids Muay Thai</span> focuses on the traditional striking techniques of Muay Thai, also known as "The Art of Eight Limbs."</p>
  <p class="text-xl dynamicText md:text-2xl">This discipline teaches punches, kicks, elbows, and knee strikes. Through fun and engaging classes, children learn the fundamentals of Muay Thai in a safe and supportive environment.</p>
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
        <h3 class="mb-4 text-2xl font-bold lg:text-3xl">Benefits of Kids Muay Thai</h3>
        <p class="md:text-xl">Training in Kids Muay Thai offers numerous benefits, including improved physical fitness, coordination, and agility.</p>
        <p class="md:text-xl">It also helps children develop self-discipline, respect, and confidence. Muay Thai teaches valuable self-defense skills while promoting a healthy and active lifestyle.</p>
        <p class="md:text-xl">The structured training environment fosters a sense of achievement and personal growth.</p>
      </div>
      <a 
        href="{{route('time-table')}}" 
        title="View our Kids Muay Thai classes timetable"
        class="text-xl font-bold text-ci-red hover:text-ci-red"
      >
        View Timetable
      </a>
    </div>

    <div class="flex flex-col gap-4">
      <div class="space-y-1">
        <h4 class="mb-4 text-2xl font-bold lg:text-3xl">Classes and Curriculum</h4>
        <p class="md:text-xl">Our Kids Muay Thai classes are designed to cater to different age groups and skill levels. The curriculum includes basic striking techniques, defensive maneuvers, and conditioning exercises.</p>
        <p class="md:text-xl">Classes emphasize fun and interactive drills, ensuring children remain engaged and motivated.</p>
        <p class="md:text-xl">Whether your child is new to martial arts or looking to advance their skills, our program provides a well-rounded Muay Thai education.</p>
      </div>
      <a 
        href="{{route('contact')}}" 
        title="Book your first Kids Muay Thai class with us"
        class="text-xl font-bold text-ci-red hover:text-ci-red"
      >
        Book your first class
      </a>
    </div>
 
  </div>
  

</section>

@endsection