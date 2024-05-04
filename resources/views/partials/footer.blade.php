<footer class="bg-gray-100">
  <div class="flex flex-row items-center justify-center gap-4 py-8 border-t">
   
    <a href="{{ route('home') }}" class="transition duration-100 text-lg {{ Route::is('home') ? 'underline text-red-500' : '' }}">
      Home
    </a>
    <a href="{{ route('contact') }}" class="transition duration-100 text-lg {{ Route::is('contact') ? 'underline text-red-500' : '' }}">
      Contact
    </a>

  </div>

  <div class="max-w-md py-8 mx-auto text-sm text-center border-t text-ci-black">
    <span>© 2024 - Sander Gebrauchte Reifen. All rights reserved.</span>
  </div>
</footer>