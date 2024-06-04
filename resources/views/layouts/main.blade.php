<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'MMA FIGHTCLUB Bad Hersfeld')</title>
        <meta name="description" content="@yield('meta-description', 'Join our premier MMA gym inBad Hersfeld, Germany. We offer top-notch training in Brazilian Jiu-Jitsu, MMA, and grappling for all skill levels.')">
        <meta name="keywords" content="@yield('meta-keywords', 'Brazilian Jiu-Jitsu, BJJ, MMA, martial arts, grappling, self-defense, combat sports, fighting')">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="relative">
  
      <button id="openNav" class="octagon">
        <svg class="text-white " data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
        </svg>
      </button>

      @include('partials.navigation')

      <main class="">
        @yield('content')
      </main>
 
      @include('partials.footer')

    </body>
</html>
