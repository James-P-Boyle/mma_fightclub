@extends('layouts.main')

@section('title', 'Contact Us - MMA Fight Club Bad Hersfeld')
@section('meta-description', 'Contact Markus Leis and the MMA Fight Club team inBad Hersfeld. Get in touch via phone or email to schedule your first trial session. We\'re here to help you start your journey in mixed martial arts.')

@section('content')

<x-hero-header>
  <h1 class="text-4xl font-bold lg:text-5xl">CONTACT</h1>
  <x-divider />
  <p class="text-xl dynamicText md:text-2xl">Ready to take the first step? Drop us a message on WhatsApp or use the form below to schedule your first trial session.</p>
  <p class="text-xl dynamicText md:text-2xl"> We're excited to help you start your journey with us!</p>
</x-hero-header>

<section class="grid px-2 md:grid-cols-[1fr_2fr] md:max-w-[1200px] md:mx-auto md:px-8 py-12">

  <div class="p-4 rounded-t-lg md:text-lg bg-gray-100/70">
    <h2 class="mb-2 text-xl font-bold">Markus Leis</h2>
    <p><span class="font-semibold">Phone:</span> 0151/46417517</p>
    <p><span class="font-semibold">E-Mail:</span> info@mma-fightclub.de</p>
    <p class="font-bold text-ci-red">MMA - FIGHTCLUB BAD HERSFELD<p>
    <p>Badestube 3</p>
    <p>36251 Bad Hersfeld</p>
  </div>

  <div class="w-full p-4 rounded-b-lg bg-gray-100/70">

    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    @if (session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif

    <form method="POST" action="{{ route('send-mail') }}" class="flex flex-col justify-end">
      @csrf
      <div class="mb-4">
        <label class="" for="name" class="block mb-2 text-sm font-bold ">Name:</label>
        <input type="name" name="name" id="name" required class="w-full px-3 py-2 leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
      </div>
      <div class="mb-4">
        <label class="" for="email" class="block mb-2 text-sm font-bold ">Email:</label>
        <input type="email" name="email" id="email" required class="w-full px-3 py-2 leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
      </div>

      <div class="mb-4">
        <label class="" for="message" class="block mb-2 text-sm font-bold ">Message (Optional):</label>
        <textarea name="message" id="message" rows="3" class="w-full px-3 py-2 leading-tight border rounded shadow appearance-none focus:outline-none focus:shadow-outline"></textarea>
      </div>
      <button type="submit" class="px-4 py-2 font-bold text-white rounded bg-ci-red hover:bg-ci-red focus:outline-none focus:shadow-outline">Submit</button>
    </form>
  </div>

</section>

<section class="md:max-w-[1200px] md:mx-auto px-2 md:px-8 pb-12">
  <iframe width="100%" height="400px" src="https://maps.google.de/maps?hl=de&q=MMA+FIGHTCLUB%20%20Badestube+3%20+Bad+Hersfeld&t=ROADMAP&z=10&ie=utf8&iwloc=b&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</section>

@endsection