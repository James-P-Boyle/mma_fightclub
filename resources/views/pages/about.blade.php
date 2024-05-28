@extends('layouts.main')

@section('content')

<header class="relative min-h-[50vh] py-8 w-full flex items-center">
  <div class="background-slider">
    <img id="image1" src="./images/hero_1.jpeg" alt="Hero Image" class="absolute inset-0 object-cover w-full h-full">
    <img id="image2" src="./images/hero_2.jpeg" alt="Hero Image" class="absolute inset-0 object-cover w-full h-full">
    <img id="image3" src="./images/hero_3.jpeg" alt="Hero Image" class="absolute inset-0 object-cover w-full h-full">
  </div>
  <div class="absolute inset-0 bg-black bg-opacity-70"></div>
  <div class="w-full relative max-w-[600px] text-white px-4 md:px-8">
    <h1 class="text-4xl font-bold lg:text-6xl">Contact</h1>
    <div class="w-20 h-2 my-4 bg-ci-red divider"></div>
    <p id="dynamicText" class="mb-10 text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus maiores obcaecati, expedita ab cumque repellendus nesciunt laboriosam mollitia maxime.</p>
  </div>
 
</header>

<section class="text-white bg-black bg-opacity-90">
        
  <div class="grid md:grid-cols-[2fr_1fr]">

      <div class="w-full h-[600px] md:order-2 bg-center bg-cover" style="background-image: url('./images/about_1.jpeg');">
          <!-- Background image is set here -->
      </div>
      
      <div class="flex flex-col items-center justify-center gap-6 px-4 py-16 md:px-8">
          <div class="w-full">
              <h4 class="text-2xl font-bold">
                  About us
                  </h4>
                  <div class="w-20 h-2 my-4 bg-ci-red divider"></div>
          </div>
      
          <p class="text-xl">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Earum maxime voluptas ipsam aliquam itaque cupiditate
              provident architecto expedita harum culpa odit, inventore rem
              molestias laborum repudiandae corporis pariatur quo eius iste!
      
          </p>
          <p class="text-xl">
              Commodi ut nisi assumenda alias maxime necessitatibus ad rem
              repellat explicabo, reiciendis illum suscipit iusto? Provident
              dignissimos similique, reiciendis inventore accusantium unde
              mollitia, deleniti quae atque error id perspiciatis illum.
              Laboriosam aperiam ab illo dignissimos obcaecati corporis
          </p>

          <button class="px-4 py-2 mr-auto text-2xl font-medium text-white bg-ci-red rounded shadow hover:scale-105">Contact</button>
  
  
  </div>
  
</section>

@endsection