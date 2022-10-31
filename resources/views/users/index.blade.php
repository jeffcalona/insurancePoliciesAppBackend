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
                              
                              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{route('user.edit', $user)}}" class="text-indigo-600 dark:text-indigo-500 hover:text-indigo-900 dark:hover:text-indigo-700">Edit</a>
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