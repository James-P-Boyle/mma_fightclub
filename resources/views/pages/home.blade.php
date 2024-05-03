@extends('layouts.main')

@section('content')
    <header class="relative min-h-screen w-full flex items-center">
      <div class="background-slider">
        <img id="image1" src="./images/hero-1.jpg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover">
        <img id="image2" src="./images/hero-2.jpg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover">
        <img id="image3" src="./images/hero-3.jpg" alt="Hero Image" class="absolute inset-0 w-full h-full object-cover">
      </div>
      <div class="absolute inset-0 bg-black bg-opacity-70"></div>
      <div class="w-full relative max-w-[600px] text-white px-4 md:px-8">
        <h1 class="text-4xl lg:text-6xl font-bold">Find your <span class="text-red-700">redy</span> stuff for your room</h1>
        <div class="w-20 h-2 bg-red-700 my-4 divider"></div>
        <p id="dynamicText" class="text-xl mb-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus maiores obcaecati, expedita ab cumque repellendus nesciunt laboriosam mollitia maxime. Beatae, quam. Ad maiores laborum eum at possimus repellat magni minus.</p>
        <div class="space-x-2">
          <button class="hover:scale-105 bg-white text-red-500 text-2xl font-medium px-4 py-2 rounded shadow">Learn More</button>
          <button class="hover:scale-105 bg-red-500 text-white text-2xl font-medium px-4 py-2 rounded shadow">Contact</button>
        </div>
      </div>
    </header>

    @include('sections.highlights')

    @include('sections.about')

    {{-- <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
        <h4 class="text-2xl font-bold">
            Contact Us
        </h4>
        <div class="w-20 h-2 bg-red-700 my-4 divider"></div>
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
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                <input type="name" name="name" id="name" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="location" class="block text-gray-700 text-sm font-bold mb-2">Location:</label>
                <input type="text" name="location" id="location" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Tires Needed:</label>          
                <div class="mb-2">
                    <input disabled type="radio" name="tires_needed" value="0-100" id="0-100">
                    <label for="0-100" class="line-through text-red-500">0-100</label>
                </div>
                <div class="mb-2">
                    <input type="radio" name="tires_needed" value="100-500" id="100-500">
                    <label for="100-500">100-500</label>
                </div>
                <div class="mb-2">
                    <input type="radio" name="tires_needed" value="500-1000" id="500-1000">
                    <label for="500-1000">500-1000</label>
                </div>
                <div>
                    <input type="radio" name="tires_needed" value="1000+" id="1000+">
                    <label for="1000+">1000+</label>
                </div>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message (Optional):</label>
                <textarea name="message" id="message" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div> --}}

    @include('sections.gallery-preview')

    @include('sections.faq')

@endsection