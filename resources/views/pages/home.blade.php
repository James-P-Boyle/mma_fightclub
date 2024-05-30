@extends('layouts.main')

@section('content')

  <x-hero-header>
    <h1 class="text-4xl font-bold lg:text-6xl">MMA FIGHTCLUB BAD HERSFELD</h1>
    <div class="w-20 h-1 my-4 bg-ci-red divider"></div>
    <h2 class="text-2xl font-bold lg:text-4xl">Your health is not just an asset, it's your greatest investment.</h2>
    <h3 class="text-2xl lg:text-4xl">Fight for it</h3>
    <div class="w-12 h-1 my-4 bg-ci-red divider"></div>
    {{-- {{-- <div class="w-16 h-2 my-4 bg-ci-red divider"></div> --}}
    <p class="text-lg md:text-xl">Step into the cage and embrace the warrior within.</p>
    <p class="text-lg md:text-xl"><a class="underline text-ci-red" title="Contact us and find out more about our gym" href="{{route('contact')}}">Join our MMA fight club</a> and defend your well-being</p>
  </x-hero-header>

  @include('sections.highlights')

  @include('sections.about')

  @include('sections.faq')

@endsection