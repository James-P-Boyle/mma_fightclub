<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    </head>
    <body class="bg-black bg-opacity-90 relative">
  
      <button id="openNav" class="text-white absolute top-4 right-4 z-[100]">O</button>

      @include('partials.navigation')

      <main class="bg-gray-100">
        @yield('content')
      </main>
 

      @include('partials.footer')

    </body>
</html>
