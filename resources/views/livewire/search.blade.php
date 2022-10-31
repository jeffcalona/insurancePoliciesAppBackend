<div>
    <input
    type="text"
    class="m-10 bg-gray-100 text-sm rounded-md border-transparent w-64 px-4 pl-8 py-2 focus:outline-none focus:ring  focus:ring-green-400 focu:ring-opacity-75 focus:ring-offset-2" placeholder="Search for..."
    wire:model="search">
    
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
                  @foreach($coberturas as $cobertura)
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
                      <a href="{{route('cobertura.edit',$cobertura)}}" class="text-indigo-600 dark:text-indigo-500 hover:text-indigo-900 dark:hover:text-indigo-700">Edit</a>
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
