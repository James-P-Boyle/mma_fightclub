<footer class="bg-gray-100">
  <div class="flex flex-row items-center justify-center gap-4 py-4 border-t">
    <a href="{{ route('home') }}" class="transition duration-100 text-lg md:text-xl {{ Route::is('home') ? 'underline text-ci-red' : '' }}">
      Home
    </a>
    <a href="{{ route('about') }}" class="transition duration-100 text-lg md:text-xl {{ Route::is('about') ? 'underline text-ci-red' : '' }}">
      About
    </a>
    <a href="{{ route('contact') }}" class="transition duration-100 text-lg md:text-xl {{ Route::is('contact') ? 'underline text-ci-red' : '' }}">
      Contact
    </a>
  </div>
  <div class="flex flex-row items-center justify-center gap-4 py-4 border-t">
    <a href="{{ route('jitsu') }}" class="transition duration-100 text-lg md:text-xl {{ Route::is('jitsu') ? 'underline text-ci-red' : '' }}">
      JIU-JITSU
    </a>
    <a href="{{ route('mma') }}" class="transition duration-100 text-lg md:text-xl {{ Route::is('mma') ? 'underline text-ci-red' : '' }}">
      MMA
    </a>
  </div>

  <div class="max-w-md py-4 mx-auto text-sm text-center border-t text-ci-black">
    <span>© 2024 - MMA FIGHTCLUB. All rights reserved.</span>
  </div>
</footer>