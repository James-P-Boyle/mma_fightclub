@extends('layouts.main')

@section('title', 'Contact Us - MMA Fight Club Bad Hersfeld')
@section('meta-description', 'Contact Markus Leis and the MMA Fight Club team inBad Hersfeld. Get in touch via phone or email to schedule your first trial session. We\'re here to help you start your journey in mixed martial arts.')

@section('content')

<x-hero-header>
  <h1 class="text-4xl font-bold lg:text-6xl">CONTACT</h1>
  <div class="w-20 h-2 my-4 bg-ci-red divider"></div>
  <p class="mb-2 text-lg dynamicText md:text-xl">Ready to take the first step? Drop us a message on WhatsApp or use the form below to schedule your first trial session.</p>
  <p class="mb-2 text-lg dynamicText md:text-xl"> We're excited to help you start your journey with us!</p>
</x-hero-header>

<section class="grid px-2 py-16 md:grid-cols-[1fr_2fr] md:max-w-[1200px] md:mx-auto md:px-8">

  <div class="p-4 rounded-t-lg bg-gray-100/70">
    <h2 class="mb-2 text-xl font-bold">Markus Leis</h2>
    <p><span class="font-semibold">Phone:</span> 0151/46417517</p>
    <p><span class="font-semibold">E-Mail:</span> info@mma-fightclub.de</p>
    <p class="font-bold text-ci-red">MMA - FIGHTCLUB BAD HERSFELD<p>
    <p>Max-Becker-Strasse 1a</p>
    <p>36251 Bad Hersfeld</p>
  </div>

  <div class="w-full p-8 rounded-b-lg bg-gray-100/70">

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

    <form method="POST" action="{{ route('send-mail') }}">
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

<section class="md:max-w-[1200px] md:mx-auto px-2 md:px-8 pt-8 pb-16">
  <iframe class="rounded-lg" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d40293.90590249734!2d9.696078199999997!3d50.861365899999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a3547ca559b4ab%3A0x282152a4353c55e8!2sMMA%20%E2%80%93%20FIGHTCLUB!5e0!3m2!1sde!2sde!4v1686809902732!5m2!1sde!2sde" width="100%" height="400px" allowfullscreen="allowfullscreen"></iframe>
</section>

@endsection