@extends('layouts.app')

@section('content')
    <div class="flex">
        {{-- SIDEBAR --}}
        @include('layouts.sidebar')
        {{-- END SIDEBAR --}}

        {{-- BODY SECTION --}}
        <div class="w-4/5 bg-gray-50 dark:bg-gray-800 overflow-y-hidden">
            @include('layouts.navbar')
           
            <div class="bg-white m-10">
              {{-- form edit --}}
              Usuario
                 
                  <br>
                  <br>
               
                  <div class="grid md:grid-cols-3 md:gap-6">
                  <div class="relative z-0 mb-6 w-full group">
                    Nombre <br>
                   {{$user->name}}
                  
                  </div>
                  <div class="relative z-0 mb-6 w-full group">
                    Identificación <br>
                     {{$user->identification}}
                  
                  </div>
                  <div class="relative z-0 mb-6 w-full group">
                    Email <br>
                    {{$user->email}}
                   </div>
                  </div>
                 
                  @livewire('user.cobertura', ['coberturas' => $user->coberturas])
                  @livewire('user.tracking', ['sures' => $user->trackingServices])
                </div>
          </div>
        </div>
        {{-- END BODY SECTION --}}

    </div>

@endsection