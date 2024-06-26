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

    <div class="py-6 space-y-2">
      <a href="{{route('mma')}}" title="Learn More About Our MMA Classes and Training at MMA Fight Club Bad Hersfeld" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('mma') ? 'bg-ci-red' : '' }}">
        MMA
      </a>
      <a href="{{route('jitsu')}}" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('jitsu') ? 'bg-ci-red' : '' }}">
        JIU-JITSU
      </a>
      <a href="{{route('muay-thai')}}" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('muay-thai') ? 'bg-ci-red' : '' }}">
        MUAY-THAI
      </a>
      <a href="{{route('grappling')}}" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('grappling') ? 'bg-ci-red' : '' }}">
        GRAPPLING
      </a>
      <a href="{{route('kids-jitsu')}}" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('kids-jitsu') ? 'bg-ci-red' : '' }}">
        KIDS BJJ
      </a>
      <a href="{{ route('kids-muay-thai') }}" class="text-white p-1 md:p-2 block text-xl border border-transparent hover:border-white hover:scale-105 transition-all rounded-sm {{ Route::is('kids-muay-thai') ? 'bg-ci-red' : '' }}">
        KIDS-MUAY-THAI
      </a>
    </div>


    <a href="{{ route('time-table') }}" class="text-white p-1 md:p-2 block text-xl hover:scale-105 transition-all rounded-sm {{ Route::is('time-table') ? 'bg-ci-red' : '' }}">
      ÖFFNUNGSZEITEN
    </a>

    <a href="{{route('contact')}}" class="text-white p-1 md:p-2 block text-xl hover:scale-105 transition-all rounded-sm {{ Route::is('contact') ? 'bg-ci-red' : '' }}">
      CONTACT
    </a>




  </div>

  <span class="block text-white">© 2024 - MMA FIGHTCLUB Bad Hersfeld</span>

</nav>
