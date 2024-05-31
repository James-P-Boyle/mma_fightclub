@extends('layouts.main')

@section('title', 'Öffnungszeiten - MMA Fight Club Bad Hersfeld')
@section('meta-description', 'View our MMA Fight Club Time table.')

@section('content')

<x-hero-header>
  <h1 class="text-4xl font-bold md:-mr-12 lg:text-6xl">Time Table</h1>
  <div class="w-full max-w-[150px] h-1 mx-auto bg-ci-red divider md:mx-0"></div>
  <p class="text-xl dynamicText md:text-2xl"><span class="text-ci-red">Grappling</span> is a broad term that encompasses various techniques used to control and submit an opponent through clinch and ground fighting.</p>
  <p class="text-xl dynamicText md:text-2xl">It includes techniques from wrestling, Brazilian Jiu-Jitsu, judo, and sambo.</p>
  <p class="text-xl dynamicText md:text-2xl">Grappling focuses on throws, takedowns, joint locks, and pins to dominate and neutralize opponents</p>
</x-hero-header>


  <div class="px-2 pb-16 mx-auto">

      <div class="hidden bg-white md:block">
        <table class="min-w-full">
          <thead class="text-white bg-black/90">
            <tr>
              <th class="px-4 py-2 text-left w-1/7">Monday</th>
              <th class="px-4 py-2 text-left w-1/7">Tuesday</th>
              <th class="px-4 py-2 text-left w-1/7">Wednesday</th>
              <th class="px-4 py-2 text-left w-1/7">Thursday</th>
              <th class="px-4 py-2 text-left w-1/7">Friday</th>
              <th class="px-4 py-2 text-left w-1/7">Saturday</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="px-4 py-2 border">
                <div class="p-2 mb-2 bg-gray-100 rounded-lg">
                  <p class="font-semibold">17:30 - 19.00</p>
                  <a class="hover:text-ci-red" href="{{route('jitsu')}}">
                    BJJ Basic
                  </a>
                </div>
                <div class="p-2 bg-gray-100 rounded-lg">
                  <p class="font-semibold">19.00 - 20.30</p>
                  <a class="hover:text-ci-red" href="{{route('jitsu')}}">
                    BJJ Basic
                  </a>
                </div>
              </td>
              <td class="px-4 py-2 border">
                <div class="p-2 mb-2 bg-gray-100 rounded-lg">
                  <p class="font-semibold">17.30 - 18.30</p>
                  <a class="hover:text-ci-red" href="{{route('kids-jitsu')}}">
                    KIDS BJJ
                  </a>
                </div>
                <div class="p-2 bg-gray-100 rounded-lg">
                  <p class="font-semibold">18.30 - 20.00</p>
                  <a class="hover:text-ci-red" href="{{route('jitsu')}}">
                    BJJ Technik
                  </a>
                </div>
              </td>
              <td class="px-4 py-2 border">
                <div class="p-2 mb-2 bg-gray-100 rounded-lg">
                  <p class="font-semibold">17.30 - 19.00</p>
                  <a class="hover:text-ci-red" href="{{route('grappling')}}">
                    Submission Wrestling
                  </a>
                </div>
                <div class="p-2 bg-gray-100 rounded-lg">
                  <p class="font-semibold">19.00 - 20.30 </p>
                  <a class="hover:text-ci-red" href="{{route('muay-thai')}}">
                    Muay Thai
                  </a>
                </div>
              </td>
              <td class="px-4 py-2 border">
                <div class="p-2 mb-2 bg-gray-100 rounded-lg">
                  <p class="font-semibold">17.30 - 18.30</p>
                  <a class="hover:text-ci-red" href="{{route('kids-muay-thai')}}">
                    Kids Muay Thai
                  </a>
                </div>
                <div class="p-2 bg-gray-100 rounded-lg">
                  <p class="font-semibold">18.30 - 20.00</p>
                  <p>Class Name???</p>
                </div>
              </td>
              <td class="px-4 py-2 border">
                <div class="p-2 mb-2 bg-gray-100 rounded-lg">
                  <p class="font-semibold">17.30 - 19.00</p>
                  <a class="hover:text-ci-red" href="{{route('grappling')}}">
                    Submission Wrestling
                  </a>
                </div>
                <div class="p-2 bg-gray-100 rounded-lg">
                  <p class="font-semibold">19.00 - 21.00</p>
                  <a class="hover:text-ci-red" href="{{route('mma')}}">
                    MMA
                  </a>
                </div>
              </td>
              <td class="px-4 py-2 border">
                <div class="p-2 mb-2 bg-gray-100 rounded-lg">
                  <p class="font-semibold">10.00 - 12.00</p>
                  <p>Matt nach Absprache</p>
                </div>
                <div class="p-2 bg-gray-100 rounded-lg">
                  <p class="font-semibold">Time</p>
                  <p>Class Name</p>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="md:hidden">
        <div class="grid grid-cols-1 gap-4">
          <div>
            <h3 class="text-lg font-bold">Monday</h3>
            <div class="p-2 mb-2 bg-gray-100 rounded-lg">
              <p class="font-semibold">17:30 - 19.00</p>
              <a class="hover:text-ci-red" href="{{route('jitsu')}}">
                BJJ Basic
              </a>
            </div>
            <div class="p-2 bg-gray-100 rounded-lg">
              <p class="font-semibold">19.00 - 20.30</p>
                <a class="hover:text-ci-red" href="{{route('jitsu')}}">
                  BJJ Basic
                </a>
            </div>
          </div>
          <div>
            <h3 class="text-lg font-bold">Tuesday</h3>
            <div class="p-2 mb-2 bg-gray-100 rounded-lg">
              <p class="font-semibold">17.30 - 18.30</p>
              <a class="hover:text-ci-red" href="{{route('kids-jitsu')}}">
                KIDS BJJ
              </a>
            </div>
            <div class="p-2 bg-gray-100 rounded-lg">
              <p class="font-semibold">18.30 - 20.00</p>
              <a class="hover:text-ci-red" href="{{route('jitsu')}}">
                BJJ Technik
              </a>
            </div>
          </div>
          <div>
            <h3 class="text-lg font-bold">Wednesday</h3>
            <div class="p-2 mb-2 bg-gray-100 rounded-lg">
              <p class="font-semibold">17.30 - 19.00</p>
              <a class="hover:text-ci-red" href="{{route('grappling')}}">
                Submission Wrestling
              </a>
            </div>
            <div class="p-2 bg-gray-100 rounded-lg">
              <p class="font-semibold">19.00 - 20.30 </p>
              <a class="hover:text-ci-red" href="{{route('muay-thai')}}">
                Muay Thai
              </a>
            </div>
          </div>
          <div>
            <h3 class="text-lg font-bold">Thursday</h3>
            <div class="p-2 mb-2 bg-gray-100 rounded-lg">
              <p class="font-semibold">Time</p>
              <p>Class Name???</p>
            </div>
            <div class="p-2 bg-gray-100 rounded-lg">
              <p class="font-semibold">17.30 - 19.00</p>
              <a class="hover:text-ci-red" href="{{route('grappling')}}">
                Submission Wrestling
              </a>
            </div>
          </div>

          <div>
            <h3 class="text-lg font-bold">Friday</h3>
            <div class="p-2 mb-2 bg-gray-100 rounded-lg">
              <p class="font-semibold">17.30 - 19.00</p>
              <a class="hover:text-ci-red" href="{{route('grappling')}}">
                Submission Wrestling
              </a>
            </div>
            <div class="p-2 bg-gray-100 rounded-lg">
              <p class="font-semibold">19.00 - 21.00</p>
              <a class="hover:text-ci-red" href="{{route('mma')}}">
                MMA
              </a>
            </div>
          </div>
          <div>
            <h3 class="text-lg font-bold">Saturday</h3>
            <div class="p-2 mb-2 bg-gray-100 rounded-lg">
              <p class="font-semibold">10.00 - 12.00</p>
              <p>Matt nach Absprache</p>
            </div>
          </div>
        </div>
      </div>

  </div>
  


@endsection