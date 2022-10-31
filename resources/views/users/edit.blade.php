@extends('layouts.app')

@section('content')
    <div class="flex">
        {{-- SIDEBAR --}}
        @include('layouts.sidebar')
        {{-- END SIDEBAR --}}

        {{-- BODY SECTION --}}
        <div class="w-4/5 bg-gray-50 dark:bg-gray-800 overflow-y-hidden">
            @include('layouts.navbar')
           
            <div class=" m-10">
                {{-- form edit --}}
                <form action="{{route('user.update', $user)}}" class="border bg-white shadow-md col-6 p-5" method="POST">
                    @csrf
                    @method('put')
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="name" value="{{$user->name}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Nombre " required="">
                        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</font></font></label>
                        @error('name')
                        <br>
                        {{$message}}
                        <br>
                        @enderror
                    
                    </div>
                    
                 
                    <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input value="{{$user->email}}" type="text" name="email"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Correo electrónico " required="">
                        <label  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Correo electrónico</font></font></label>
                    
                        @error('email')
                        <br>
                        {{$message}}
                        <br>
                        @enderror
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="number" name="identification" value="{{$user->identification}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Identificación " required="">
                        <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Identificación</font></font></label>
                        @error('identification')
                        <br>
                        {{$message}}
                        <br>
                        @enderror
                    
                    </div>
                    </div>
                   
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enviar</font></font></button>
                </form>
  
            </div>


            {{-- polizas --}}

            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                  <div class="py-2 align-middle inline-block  sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 dark:border-gray-800 sm:rounded-lg">
                      <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-800">
                        <thead>
                          <tr>
                            <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                              Nombre y Identificación
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                              Plan
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                              precio
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                              Dirección
                            </th>

                            <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                telefono
                              </th>

                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Nit Con...
                              </th>

                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Dirección Con...
                              </th>
                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Ciudad Con...
                              </th>
                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Dia
                              </th>
                              <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                                Hora
                              </th>
                            <th scope="col" class="px-6 py-3 bg-gray-100 dark:bg-black">
                              <span class="sr-only">Edit</span>
                            </th>
                          </tr>
                        </thead>
                      <tbody class="bg-white dark:bg-gray-900 divide-y divide-gray-200 dark:divide-gray-800">
                          @foreach($user->coberturas as $cobertura)
                          <tr class="hover:bg-gray-50 dark:hover:bg-gray-800">
                            <td class="whitespace-nowrap">
                              <div class="flex ">
                                <div class="flex-shrink-0 h-10 w-10">
                                </div>
                                <div class="ml-4">
                                  <div class="text-sm font-medium text-gray-600 dark:text-gray-200">
                                    {{$cobertura->fullNameP}}
                                  </div>
                                  <div class="text-sm text-gray-400 dark:text-gray-100">
                                    {{$cobertura->identificationP}}
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                              <div class="text-sm text-gray-600 dark:text-gray-200">{{Str::limit($cobertura->plan, 10)}}</div>
                            
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600 dark:text-gray-200">{{$cobertura->price}}</div>
                              
                              </td>

                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600 dark:text-gray-200">{{$cobertura->directionP}}</div>
                              
                              </td>

                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600 dark:text-gray-200">{{$cobertura->phoneP}}</div>
                              
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600 dark:text-gray-200">{{$cobertura->nitC}}</div>
                              
                              </td>
                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600 dark:text-gray-200">{{$cobertura->directionC}}</div>
                              
                              </td>

                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600 dark:text-gray-200">{{$cobertura->cityC}}</div>
                              
                              </td>

                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600 dark:text-gray-200">{{$cobertura->datePro}}</div>
                              
                              </td>

                              <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-600 dark:text-gray-200">{{$cobertura->timePro}}</div>
                              
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
        {{-- END BODY SECTION --}}

    </div>

@endsection