@extends('layouts.main')

@section('title', 'Öffnungszeiten - MMA Fight Club Bad Hersfeld')
@section('meta-description', 'View our MMA Fight Club Time table.')

@section('content')

<x-hero-header>
  <h1 class="text-4xl font-bold md:-mr-12 lg:text-6xl">Time Table</h1>
  <x-divider />
</x-hero-header>

<div class="grid gap-4 px-2 pb-16 mx-auto md:grid-cols-6">
  <div class="p-2 border rounded-lg">
    <h3 class="text-xl font-bold">Monday</h3>
    <div class="p-2 mb-2 bg-gray-100 rounded-lg">
      <p class="font-semibold md:text-base">17:30 - 19.00</p>
      <a class="hover:text-ci-red" href="{{route('jitsu')}}">
        BJJ Basic
      </a>
    </div>
    <div class="p-2 bg-gray-100 rounded-lg">
      <p class="font-semibold md:text-base">19.00 - 20.30</p>
        <a class="hover:text-ci-red" href="{{route('jitsu')}}">
          BJJ Basic
        </a>
    </div>
  </div>
  <div class="p-2 border rounded-lg">
    <h3 class="text-xl font-bold">Tuesday</h3>
    <div class="p-2 mb-2 bg-gray-100 rounded-lg">
      <p class="font-semibold md:text-base">17.30 - 18.30</p>
      <a class="hover:text-ci-red" href="{{route('kids-jitsu')}}">
        Kids BJJ
      </a>
    </div>
    <div class="p-2 bg-gray-100 rounded-lg">
      <p class="font-semibold md:text-base">18.30 - 20.00</p>
      <a class="hover:text-ci-red" href="{{route('jitsu')}}">
        BJJ Technik
      </a>
    </div>
  </div>
  <div class="p-2 border rounded-lg">
    <h3 class="text-xl font-bold">Wednesday</h3>
    <div class="p-2 mb-2 bg-gray-100 rounded-lg">
      <p class="font-semibold md:text-base">17.30 - 19.00</p>
      <a class="hover:text-ci-red" href="{{route('grappling')}}">
        Submission Wrestling
      </a>
    </div>
    <div class="p-2 bg-gray-100 rounded-lg">
      <p class="font-semibold md:text-base">19.00 - 20.30 </p>
      <a class="hover:text-ci-red" href="{{route('muay-thai')}}">
        Muay Thai
      </a>
    </div>
  </div>
  <div class="p-2 border rounded-lg">
    <h3 class="text-xl font-bold">Thursday</h3>
    <div class="p-2 mb-2 bg-gray-100 rounded-lg">
      <p class="font-semibold md:text-base">17.30 - 18.30</p>
      <a class="hover:text-ci-red" href="{{route('kids-muay-thai')}}">
        Kids Muay Thai
      </a>
    </div>
    <div class="p-2 bg-gray-100 rounded-lg">
      <p class="font-semibold md:text-base">18.30 - 20.00</p>
      <a class="hover:text-ci-red" href="{{route('muay-thai')}}">
        Muay Thai
      </a>
    </div>
  </div>

  <div class="p-2 border rounded-lg">
    <h3 class="text-xl font-bold">Friday</h3>
    <div class="p-2 mb-2 bg-gray-100 rounded-lg">
      <p class="font-semibold md:text-base">17.30 - 19.00</p>
      <a class="hover:text-ci-red" href="{{route('grappling')}}">
        Submission Wrestling
      </a>
    </div>
    <div class="p-2 bg-gray-100 rounded-lg">
      <p class="font-semibold md:text-base">19.00 - 21.00</p>
      <a class="hover:text-ci-red" href="{{route('mma')}}">
        MMA
      </a>
    </div>
  </div>
  <div class="p-2 border rounded-lg">
    <h3 class="text-xl font-bold">Saturday</h3>
    <div class="p-2 mb-2 bg-gray-100 rounded-lg">
      <p class="font-semibold md:text-base">10.00 - 12.00</p>
      <p>Matt nach Absprache</p>
    </div>
  </div>
</div>

@endsection