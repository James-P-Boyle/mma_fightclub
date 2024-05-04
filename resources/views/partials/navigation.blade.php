<nav id="nav" class="nav-closed fixed p-4 right-0 w-[300px] top-0 bottom-0 bg-black bg-opacity-90 md:shadow-xl z-[100] flex flex-col gap-8">

  <div class="grid items-center w-10 h-10 text-red-500">
    <span id="closeNav" class="text-xl font-bold">X</span>
  </div>

  <div class="justify-end flex-1 block gap-2 space-y-2">
    <a href="{{route('home')}}" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('home') ? 'bg-red-500' : '' }}">
      Home
    </a>
    <a href="{{route('contact')}}" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('contact') ? 'bg-red-500' : '' }}">
      About
    </a>
    <a href="{{route('contact')}}" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('contact') ? 'bg-red-500' : '' }}">
      Our Tires
    </a>
    <a href="{{route('contact')}}" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('contact') ? 'bg-red-500' : '' }}">
      Gallery
    </a>
    <a href="{{route('contact')}}" class="text-white p-1 md:p-2 block text-xl border border-red-500 hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('contact') ? 'bg-red-500' : '' }}">
      Contact
    </a>
  </div>
  <span class="block text-white">© 2024 - Sander Gebrauchte Reifen</span>


</nav>