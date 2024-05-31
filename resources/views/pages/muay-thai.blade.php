@extends('layouts.main')

@section('title', 'Muay Thai - MMA Fight Club Bad Hersfeld')
@section('meta-description', 'Learn about Muay Thai at our MMA Fight Club. Explore our classes, benefits, and detailed curriculum.')

@section('content')

<x-hero-header>
  <h1 class="text-4xl font-bold md:-mr-12 lg:text-6xl">Muay Thai</h1>
  <div class="w-full max-w-[150px] h-1 mx-auto bg-ci-red divider md:mx-0"></div>
  <p class="text-xl dynamicText md:text-2xl"><span class="text-ci-red">Muay Thai</span> is a combat sport from Thailand that uses stand-up striking along with various clinching techniques.</p>
  <p class="text-xl dynamicText md:text-2xl">Known as "the art of eight limbs," Muay Thai incorporates punches, kicks, elbows, and knee strikes.</p>
  <p class="text-xl dynamicText md:text-2xl">It is renowned for its effectiveness and is widely practiced for self-defense, fitness, and competition.</p>
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
        <h3 class="mb-4 text-2xl font-bold lg:text-3xl">Benefits of Muay Thai Training</h3>
        <p class="md:text-xl">Training in Muay Thai improves cardiovascular fitness, strength, and flexibility. It also enhances mental toughness, focus, and self-discipline.</p>
        <p class="md:text-xl">Muay Thai is a full-body workout that helps you build endurance and agility.</p>
        <p class="md:text-xl">The rigorous training and sparring sessions provide an excellent way to relieve stress and build self-confidence.</p>
      </div>
      <a 
        href="{{route('muay-thai')}}" 
        title="View our Muay Thai classes timetable"
        class="text-xl font-bold text-ci-red hover:text-ci-red"
      >
        View Timetable
      </a>
    </div>

    <div class="flex flex-col gap-4">
      <div class="space-y-1">
        <h4 class="mb-4 text-2xl font-bold lg:text-3xl">Classes and Curriculum</h4>
        <p class="md:text-xl">Our Muay Thai classes cater to all skill levels, from beginners to advanced practitioners. The curriculum includes fundamental techniques, pad work, heavy bag training, and sparring.</p>
        <p class="md:text-xl">We emphasize proper form, power, and technique to ensure effective and safe training.</p>
        <p class="md:text-xl">Join our Muay Thai program to enhance your striking skills and overall fitness.</p>
      </div>
      <a 
        href="{{route('contact')}}" 
        title="Book your first Muay Thai class with us"
        class="text-xl font-bold text-ci-red hover:text-ci-red"
      >
        Book your first class
      </a>
    </div>
 
  </div>
  

</section>

@endsection