@extends('layouts.app')

@section('content')
    <div class="flex">
        {{-- SIDEBAR --}}
        @include('layouts.sidebar')
        {{-- END SIDEBAR --}}

        {{-- BODY SECTION --}}
        <div class="w-4/5 bg-gray-50 dark:bg-gray-800 overflow-y-hidden">
            @include('layouts.navbar')
            <div class="px-10 py-8">
                {{-- HEADING --}}
                <h1 class="text-3xl text-gray-600 dark:text-gray-200 font-semibold">Dashboard</h1>

                {{-- CARDS --}}
                <div class="lg:flex items-center justify-between py-4 space-y-2 sm:space-y-4 md:space-y-2 lg:space-y-0">

                    <x-card type="one">
                        <div class="flex-1 text-left">
                            <div class="text-sm font-semibold uppercase text-indigo-600 dark:text-indigo-500 tracking-tight mb-2">earnings (monthly)</div>
                            <div class="text-2xl font-semibold text-gray-700 dark:text-white leading-normal tracking-widest">$40,000</div>
                        </div>
                        <div class="text-right">
                            <svg class="fill-current text-indigo-600 dark:text-indigo-500" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><title>money-wallet-open</title><g><path d="M20.5.305h-17a3.535 3.535 0 0 0-3.5 3.5v13a4.5 4.5 0 0 0 3.306 4.174L14.465 23.6a2.929 2.929 0 0 0 2.487-.489A2.863 2.863 0 0 0 18 20.805v-9.692a4.264 4.264 0 0 0-3.119-4.1L4.056 4.028a.75.75 0 1 1 .4-1.446l3.534.975H20.5a.75.75 0 1 1 0 1.5h-5.235a.25.25 0 0 0-.067.491l.086.024a5.719 5.719 0 0 1 2.9 1.894.254.254 0 0 0 .194.091H20.5a.75.75 0 0 1 0 1.5h-1.038a.249.249 0 0 0-.238.327 5.609 5.609 0 0 1 .281 1.731v6.942a.25.25 0 0 0 .25.25h.745a3.5 3.5 0 0 0 3.5-3.5v-11A3.5 3.5 0 0 0 20.5.305zm-5 15a2 2 0 1 1-2-2 2 2 0 0 1 2 2z"></path></g></svg>
                        </div>
                    </x-card>

                </div>
               

             
                
                <div class="flex flex-col">
                  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                      <div class="shadow overflow-hidden border-b border-gray-200 dark:border-gray-800 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-800">
                          <thead>
                            <tr>
                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Nombre
                              </th>
                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Identificación
                              </th>
                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Status
                              </th>
                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Role
                              </th>
                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black">
                                <span class="sr-only">Edit</span>
                              </th>
                            </tr>
                          </thead>
                        <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-800">
                            @foreach($users as $user)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-800">
                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                  <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                                  </div>
                                  <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-600 dark:text-gray-200">
                                      {{$user->name}}
                                    </div>
                                    <div class="text-sm text-gray-400 dark:text-gray-100">
                                      {{$user->email}}
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600 dark:text-gray-200">{{$user->identification}}</div>
                                <div class="text-sm text-gray-400 dark:text-gray-100">Optimization</div>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-600 text-green-800 dark:text-green-200">
                                  Active
                                </span>
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                Admin
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" class="text-indigo-600 dark:text-indigo-500 hover:text-indigo-900 dark:hover:text-indigo-700">Edit</a>
                              </td>
                            </tr>
                            @endforeach

                            <!-- More rows... -->
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

            </div>

           
            <!-- END FOOTER -->
        </div>
        {{-- END BODY SECTION --}}

    </div>

@endsection