<div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <x-table>

        <div class="px-6 py-4 flex items-center">

            <div class="flex items-center">
                <span>Mostrar</span>

                <select wire:model="cant" class="mx-2 form-control">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>

                <span>entradas</span>
            </div>

            <x-input class="flex-1 mx-4" placeholder="Escriba que quiere buscar" type="text"
                wire:model="search" />
           
        </div>

        @if (count($coberturas))
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="w-24 cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            wire:click="order('id')">
                            ID
                            {{-- Sort --}}
                            @if ($sort == 'id')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif

                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col"
                            class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            wire:click="order('fullNameP')">
                            Nombre
                            {{-- Sort --}}
                            @if ($sort == 'fullNameP')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif

                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>

                        <th scope="col"
                        class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                        wire:click="order('identificationP')">
                        identificación
                        {{-- Sort --}}
                        @if ($sort == 'identificationP')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                            @endif

                        @else
                            <i class="fas fa-sort float-right mt-1"></i>
                        @endif
                    </th>
                        <th scope="col"
                            class=" cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                            wire:click="order('plan')">
                            Plan
                            {{-- Sort --}}
                            @if ($sort == 'plan')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif

                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>

                        <th scope="col" class="relative px-6 py-3">
                          <span class="sr-only"></span>Precio
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                          <span class="sr-only"></span>Dirección
                        </th>
                      <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only"></span>Telefono
                      </th>
                      <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only"></span>Nit con...
                      </th>
                      <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only"></span>Dirección con...
                      </th>
                      <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only"></span>Ciudad con...
                      </th>
                      <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only"></span>Dia
                      </th>
                      <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only"></span>Hora
                      </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only"></span>Acción
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                    @foreach ($coberturas as $cobertura)

                        <tr>

                            <td class="px-6 py-4 ">
                                <div class="text-sm text-gray-900">
                                    {{ $cobertura->id }}
                                </div>
                            </td>
                            <td class="px-6 py-4 ">
                                <div class="text-sm text-gray-900">
                                    {{ $cobertura->fullNameP }}
                                </div>
                            </td>
                            <td class="px-6 py-4  text-sm text-gray-500">
                                <div class="text-sm text-gray-900">
                                  {{$cobertura->identificationP}}
                                </div>
                            </td>

                            <td class="px-6 py-4  text-sm text-gray-500">
                              <div class="text-sm text-gray-900">
                                {{Str::limit($cobertura->plan, 10)}}
                              </div>
                            </td>

                            <td class="px-6 py-4  text-sm text-gray-500">
                              <div class="text-sm text-gray-900">
                                {{$cobertura->directionP}}
                              </div>
                            </td>

                            <td class="px-6 py-4  text-sm text-gray-500">
                              <div class="text-sm text-gray-900">
                                {{$cobertura->phoneP}}
                              </div>
                            </td>

                            <td class="px-6 py-4  text-sm text-gray-500">
                              <div class="text-sm text-gray-900">
                                {{$cobertura->nitC}}
                              </div>
                            </td>

                            <td class="px-6 py-4  text-sm text-gray-500">
                              <div class="text-sm text-gray-900">
                                {{$cobertura->phoneP}}
                              </div>
                            </td>

                            <td class="px-6 py-4  text-sm text-gray-500">
                              <div class="text-sm text-gray-900">
                                {{$cobertura->directionC}}
                              </div>
                            </td>
                            <td class="px-6 py-4  text-sm text-gray-500">
                              <div class="text-sm text-gray-900">
                                {{$cobertura->cityC}}
                              </div>
                            </td>
                            <td class="px-6 py-4  text-sm text-gray-500">
                              <div class="text-sm text-gray-900">
                                {{$cobertura->datePro}}
                              </div>
                            </td>
                            <td class="px-6 py-4  text-sm text-gray-500">
                              <div class="text-sm text-gray-900">
                                {{$cobertura->timePro}}
                              </div>
                            </td>

                            <td class="px-6 py-4  ext-sm font-medium flex">

                                <a href="{{route('cobertura.edit', $cobertura->id)}}" class="btn bg-green-400" >
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a class="btn btn-red ml-2 cursor-pointer" wire:click="$emit('deleteCobertura', {{ $cobertura->id }})">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="{{route('cobertura.pdf', $cobertura)}}" class="btn btn-red ml-2 cursor-pointer" >
                                  PDF</i>
                              </a>
                                <a href="{{route('cobertura.email', $cobertura)}}" class="btn btn-red ml-2 cursor-pointer" >
                                  Email</i>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                    <!-- More people... -->
                </tbody>
            </table>

            @if ($coberturas->hasPages())

                <div class="px-6 py-3">
                    {{ $coberturas->links() }}
                </div>

            @endif

        @else
            <div class="px-6 py-4">
                No existe ningún registro coincidente
            </div>
        @endif

    </x-table>

</div>




@push('js')
    <script src="sweetalert2.all.min.js"></script>

    <script>
        Livewire.on('deleteCobertura', coberturaId => {
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
                    Livewire.emitTo('cobertura.search', 'delete', coberturaId);
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






