@extends('layouts.main')

@section('content')

  <x-hero-header>
    <h1 class="text-4xl font-bold lg:text-6xl">MMA FIGHTCLUB</h1>
    <h2 class="-mt-4 text-2xl font-bold lg:text-5xl">BAD HERSFELD</h2>
    <x-divider />
    <h3 class="text-2xl font-bold lg:text-4xl">Your health is not just an asset, it's your greatest investment</h3>
    <p class="text-2xl lg:text-4xl">FIGHT FOR IT</p>
    <div>
      <p class="text-xl md:text-2xl">Step into the cage and embrace the warrior within</p>
      <a class="text-xl underline md:text-2xl text-ci-red" title="Contact us and find out more about our gym" href="{{route('contact')}}">Join our MMA fight club</a>
    </div>
  </x-hero-header>

  @include('sections.highlights')

  {{-- @include('sections.about') --}}

  @include('sections.faq')

@endsection