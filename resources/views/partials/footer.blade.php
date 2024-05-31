<footer class="bg-gray-100">
  <div class="flex flex-row items-center justify-center gap-4 py-4 border-t md:gap-8">
    <a href="{{ route('home') }}" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('home') ? 'underline text-ci-red' : '' }}">
      HOME
    </a>
    <a href="{{ route('about') }}" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('about') ? 'underline text-ci-red' : '' }}">
      ABOUT
    </a>
    <a href="{{ route('time-table') }}" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('time-table') ? 'underline text-ci-red' : '' }}">
      ÖFFNUNGSZEITEN
    </a>
    <a href="{{ route('contact') }}" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('contact') ? 'underline text-ci-red' : '' }}">
      CONTACT
    </a>
  </div>
  <div class="flex flex-row items-center justify-center gap-4 py-4 border-t md:gap-10">
    <a href="{{ route('jitsu') }}" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('jitsu') ? 'underline text-ci-red' : '' }}">
      BJJ
    </a>
    <a href="{{ route('mma') }}" title="Learn More About Our MMA Classes and Training at MMA Fight Club Bad Hersfeld" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('mma') ? 'underline text-ci-red' : '' }}">
      MMA
    </a>
    <a href="{{ route('muay-thai') }}" title="Learn More About Our MMA Classes and Training at MMA Fight Club Bad Hersfeld" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('muay-thai') ? 'underline text-ci-red' : '' }}">
      MUAY-THAI
    </a>
    <a href="{{ route('grappling') }}" title="Learn More About Our MMA Classes and Training at MMA Fight Club Bad Hersfeld" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('grappling') ? 'underline text-ci-red' : '' }}">
      GRAPPLING
    </a>
    <a href="{{ route('kids-jitsu') }}" title="Learn More About Our MMA Classes and Training at MMA Fight Club Bad Hersfeld" class="transition duration-100 hover:text-ci-red text-lg md:text-xl {{ Route::is('kids-jitsu') ? 'underline text-ci-red' : '' }}">
      KIDS-BJJ
    </a>
  </div>

  <div class="max-w-md py-4 mx-auto text-sm text-center border-t text-ci-black">
    <span>© 2024 - MMA FIGHTCLUB. All rights reserved.</span>
  </div>
</footer>