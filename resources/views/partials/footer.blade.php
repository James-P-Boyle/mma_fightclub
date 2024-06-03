<footer class="px-2 bg-gray-100">
  <div class="flex flex-row flex-wrap items-center justify-center gap-4 py-4 border-t md:gap-8">
    <a href="{{ route('home') }}" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('home') ? 'underline text-ci-red' : '' }}">
      Home
    </a>
    <a href="{{ route('about') }}" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('about') ? 'underline text-ci-red' : '' }}">
      About
    </a>
    <a href="{{ route('time-table') }}" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('time-table') ? 'underline text-ci-red' : '' }}">
      Öffnungszeiten
    </a>
    <a href="{{ route('contact') }}" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('contact') ? 'underline text-ci-red' : '' }}">
      Contact
    </a>
  </div>
  <div class="flex flex-row flex-wrap items-center justify-center gap-4 py-4 border-t md:gap-10">
    <a href="{{ route('jitsu') }}" title="Learn More About Our BJJ Classes and Training at MMA Fight Club Bad Hersfeld" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('jitsu') ? 'underline text-ci-red' : '' }}">
      BJJ
    </a>
    <a href="{{ route('mma') }}" title="Learn More About Our MMA Classes and Training at MMA Fight Club Bad Hersfeld" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('mma') ? 'underline text-ci-red' : '' }}">
      MMA
    </a>
    <a href="{{ route('muay-thai') }}" title="Learn More About Our Muay-Thai Classes and Training at MMA Fight Club Bad Hersfeld" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('muay-thai') ? 'underline text-ci-red' : '' }}">
      Muay Thai
    </a>
    <a href="{{ route('grappling') }}" title="Learn More About Our Grappling Classes and Training at MMA Fight Club Bad Hersfeld" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('grappling') ? 'underline text-ci-red' : '' }}">
      Grappling
    </a>

  </div>
  <div class="flex flex-row flex-wrap items-center justify-center gap-4 md:gap-10">
    <a href="{{ route('kids-jitsu') }}" title="Learn More About Our Kids BJJ Classes and Training at MMA Fight Club Bad Hersfeld" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('kids-jitsu') ? 'underline text-ci-red' : '' }}">
      Kids BJJ
    </a>
    <a href="{{ route('kids-muay-thai') }}" title="Learn More About Our Kids Muay Thai Classes and Training at MMA Fight Club Bad Hersfeld" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('kids-muay-thai') ? 'underline text-ci-red' : '' }}">
      Kids Muay Thai
    </a>
  </div>

  <div class="max-w-md py-4 mx-auto text-sm text-center border-t text-ci-black">
    <span>© 2024 - MMA FIGHTCLUB. All rights reserved.</span>
  </div>
</footer>