<div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <x-table>
  
          
  
        
              <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                      <tr>
                          <th scope="col"
                              class="w-24 cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                              >
                              ID
                            
                          </th>
                          <th scope="col"
                              class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                              >
                              Nombre
                              {{-- Sort --}}
                             
                          </th>
  
                            <th scope="col"
                          class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                          >Descripción
                            </th>
                          <th scope="col"
                              class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                              >
                             price
                              
                          </th>
  
                          
                      </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
  
                      @foreach ($sures as $sure)
  
                          <tr>
  
                              <td class="px-6 py-4 ">
                                  <div class="text-sm text-gray-900">
                                      {{ $sure->id }}
                                  </div>
                              </td>
                              <td class="px-6 py-4 ">
                                  <div class="text-sm text-gray-900">
                                      {{ $sure->nameU }}
                                  </div>
                              </td>
                              <td class="px-6 py-4  text-sm text-gray-500">
                                  <div class="text-sm text-gray-900">
                                    {{$sure->description}}
                                  </div>
                              </td>
  
                              
  
                              <td class="px-6 py-4  text-sm text-gray-500">
                                <div class="text-sm text-gray-900">
                                  {{$sure->price}}
                                </div>
                              </td>
  
                              
  
                              <td class="px-6 py-4  ext-sm font-medium flex">
  
                                  <a href="{{route('sure.edit', $sure->id)}}" class="btn bg-green-400" >
                                      <i class="fas fa-edit"></i>
                                  </a>
  
                                  <a class="btn btn-red ml-2 cursor-pointer" wire:click="$emit('deleteSure', {{ $sure->id }})">
                                      <i class="fas fa-trash"></i>
                                  </a>
                                 
  
                              </td>
                          </tr>
                      @endforeach
                      <!-- More people... -->
                  </tbody>
              </table>
  
             
  
      </x-table>
  
  </div>
  
  
  
  
  @push('js')
      <script src="sweetalert2.all.min.js"></script>
  
      <script>
          Livewire.on('deleteSure', sureId => {
              Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      Livewire.emitTo('tracking.search', 'delete', sureId);
                      Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                      )
                  }
              })
          });
      </script>
  @endpush
  </div>
