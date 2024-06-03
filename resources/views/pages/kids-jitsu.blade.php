@extends('layouts.main')

@section('title', 'Kids Jiu-Jitsu - MMA Fight Club Bad Hersfeld')
@section('meta-description', 'Learn about Kids Jiu-Jitsu at our MMA Fight Club. Explore our classes, benefits, and detailed curriculum.')

@section('content')

<x-hero-header>
  <h1 class="text-4xl font-bold md:-mr-12 lg:text-6xl">BJJ For Kids</h1>
  <x-divider />
  <p class="text-xl dynamicText md:text-2xl"><span class="text-ci-red">BJJ for kids</span> focuses on ground fighting and submission techniques.</p>
  <p class="text-xl dynamicText md:text-2xl">It teaches children how to control and submit opponents through the use of leverage and technique.</p>
  <p class="text-xl dynamicText md:text-2xl">Kids Jiu-Jitsu helps build confidence, discipline, and respect while providing a fun and engaging way to stay active.</p>
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
        <h3 class="mb-4 text-2xl font-bold lg:text-3xl">Benefits of Kids Jiu-Jitsu</h3>
        <p class="md:text-xl">Training in Kids Jiu-Jitsu offers numerous benefits, including improved physical fitness, coordination, and flexibility.</p>
        <p class="md:text-xl">It also enhances problem-solving skills and boosts self-esteem. Kids learn valuable life skills such as discipline, perseverance, and respect for others.</p>
        <p class="md:text-xl">The supportive environment fosters camaraderie and friendship among young practitioners.</p>
      </div>
      <a 
        href="{{route('kids-jitsu')}}" 
        title="View our Kids Jiu Jitsu classes timetable"
        class="text-xl font-bold text-ci-red hover:text-ci-red"
      >
        View Timetable
      </a>
    </div>

    <div class="flex flex-col gap-4">
      <div class="space-y-1">
        <h4 class="mb-4 text-2xl font-bold lg:text-3xl">Classes and Curriculum</h4>
        <p class="md:text-xl">Our Kids Jiu-Jitsu classes are tailored to different age groups and skill levels. The curriculum includes fundamental techniques, drills, and live practice sessions.</p>
        <p class="md:text-xl">We emphasize safety, proper technique, and fun to ensure a positive experience for all participants.</p>
        <p class="md:text-xl">Join our Kids Jiu-Jitsu program to help your child develop into a confident and well-rounded individual.</p>
      </div>
      <a 
        href="{{route('contact')}}" 
        title="Book your first Kids Jiu Jitsu class with us"
        class="text-xl font-bold text-ci-red hover:text-ci-red"
      >
        Book your first class
      </a>
    </div>
 
  </div>
  

</section>

@endsection