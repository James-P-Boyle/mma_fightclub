<nav id="nav" class="nav-closed fixed p-4 right-0 w-[300px] top-0 bottom-0 bg-black bg-opacity-90 md:shadow-xl z-[100] flex flex-col gap-8">

  <div class="grid items-center w-10 h-10 text-ci-red">
    <span id="closeNav" class="text-xl font-bold hover:cursor-pointer">X</span>
  </div>

  <div class="justify-end flex-1 block gap-2 space-y-2">
    <a href="{{route('home')}}" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('home') ? 'bg-ci-red' : '' }}">
      HOME
    </a>
    <a href="{{route('about')}}" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('about') ? 'bg-ci-red' : '' }}">
      ABOUT
    </a>
    <a href="{{route('mma')}}" title="Learn More About Our MMA Classes and Training at MMA Fight Club Bad Hersfeld" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('mma') ? 'bg-ci-red' : '' }}">
      MMA
    </a>
    <a href="{{route('jitsu')}}" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('jitsu') ? 'bg-ci-red' : '' }}">
      JIU-JITSU
    </a>
    <a href="{{route('contact')}}" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('contact') ? 'bg-ci-red' : '' }}">
      Contact
    </a>
  </div>
  <span class="block text-white">© 2024 - MMA FIGHTCLUBBad Hersfeld</span>


</nav>