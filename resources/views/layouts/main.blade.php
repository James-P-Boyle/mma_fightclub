<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'MMA FIGHTCLUB Bad Hersfeld')</title>
        <meta name="description" content="@yield('meta-description', 'Join our premier MMA gym inBad Hersfeld, Germany. We offer top-notch training in Brazilian Jiu-Jitsu, MMA, and grappling for all skill levels.')">
        <meta name="keywords" content="@yield('meta-keywords', 'Brazilian Jiu-Jitsu, BJJ, MMA, martial arts, grappling, self-defense, combat sports, fighting')">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    </head>
    <body class="relative">
  
      <button id="openNav" class="text-white absolute top-4 right-4 z-[100]">O</button>

      @include('partials.navigation')

      <main>
        @yield('content')
      </main>
 
      @include('partials.footer')

    </body>
</html>
