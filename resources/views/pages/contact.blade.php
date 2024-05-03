@extends('layouts.main')

@section('content')

<header class="relative min-h-[50vh] py-8 w-full flex items-center">
  <div class="background-slider">
    <img id="image1" src="./images/hero-1.jpg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover">
    <img id="image2" src="./images/hero-2.jpg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover">
    <img id="image3" src="./images/hero-3.jpg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover">
  </div>
  <div class="absolute inset-0 bg-black bg-opacity-70"></div>
  <div class="w-full relative max-w-[600px] text-white px-4 md:px-8">
    <h1 class="text-4xl lg:text-6xl font-bold">Contact</h1>
    <div class="w-20 h-2 bg-red-700 my-4 divider"></div>
    <p id="dynamicText" class="text-xl mb-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus maiores obcaecati, expedita ab cumque repellendus nesciunt laboriosam mollitia maxime.</p>
  </div>
 
</header>

<div class="w-full py-16 md:py-32 px-4 md:px-8 gap-16 md:gap-8 grid md:grid-cols-3">
  
  <div class="flex items-center justify-center gap-4">
    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-solid border-purple-blue-500 bg-transparent text-purple-blue-500">
      <span class="text-base font-bold leading-7">1</span>
    </div>
    <div class="flex flex-col gap-2">
      <h3 class="text-base font-bold leading-tight">
        Create your Account
      </h3>
      <p class="text-base font-medium leading-7">
        Condimentum vit pellemsque habitant morbi at molestie.
      </p>
    </div>
  </div>

  <div class="flex items-center justify-center gap-4">
    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-solid border-purple-blue-500 bg-transparent text-purple-blue-500">
      <span class="text-base font-bold leading-7">2</span>
    </div>
    <div class="flex flex-col gap-2">
      <h3 class="text-base font-bold leading-tight">
        Create your Account
      </h3>
      <p class="text-base font-medium leading-7">
        Condimentum vit pellemsque habitant morbi at molestie.
      </p>
    </div>
  </div>

  <div class="flex items-center justify-center gap-4">
    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border-2 border-solid border-purple-blue-500 bg-transparent text-purple-blue-500">
      <span class="text-base font-bold leading-7">3</span>
    </div>
    <div class="flex flex-col gap-2">
      <h3 class="text-base font-bold leading-tight">
        Create your Account
      </h3>
      <p class="text-base font-medium leading-7">
        Condimentum vit pellemsque habitant morbi at molestie.
      </p>
    </div>
  </div>

</div>

<section class="min-h-[80vh] py-16 gap-8 px-4 md:px-8 bg-black bg-opacity-90">

  <div class="p-8 w-full max-w-[800px]">

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
            <label class="text-white/70" for="name" class="block text-white/70 text-sm font-bold mb-2">Name:</label>
            <input type="name" name="name" id="name" required class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label class="text-white/70" for="email" class="block text-white/70 text-sm font-bold mb-2">Email:</label>
            <input type="email" name="email" id="email" required class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label class="text-white/70" for="location" class="block text-white/70 text-sm font-bold mb-2">Location:</label>
            <input type="text" name="location" id="location" required class="shadow appearance-none border rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label class="block text-white/70 text-sm font-bold mb-2">Tires Needed:</label>          
            <div class="mb-2">
                <input disabled type="radio" name="tires_needed" value="0-100" id="0-100">
                <label for="0-100" class="line-through text-red-500">0-100</label>
            </div>
            <div class="mb-2">
                <input type="radio" name="tires_needed" value="100-500" id="100-500">
                <label class="text-white/70" for="100-500">100-500</label>
            </div>
            <div class="mb-2">
                <input type="radio" name="tires_needed" value="500-1000" id="500-1000">
                <label class="text-white/70" for="500-1000">500-1000</label>
            </div>
            <div>
                <input type="radio" name="tires_needed" value="1000+" id="1000+">
                <label class="text-white/70" for="1000+">1000+</label>
            </div>
        </div>
        <div class="mb-4">
            <label class="text-white/70" for="message" class="block text-white/70 text-sm font-bold mb-2">Message (Optional):</label>
            <textarea name="message" id="message" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>
        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
    </form>
  </div>

</section>

@endsection