<div class="justify-center">
    

        <div  x-data>
            <label class="p-2" > Buscar doctores </label>
            <input
            type="text"
            class="bg-gray-100  text-sm rounded-md border-gray-900 w-64  px-4 pl-8 py-2 my-5 focus:outline-none focus:ring  focus:ring-green-400 focu:ring-opacity-75 focus:ring-offset-2" placeholder="Search for..."
            wire:model="search">           
        
                    <div class="absolute px-4 pl-8 w-full hidden "  :class="{'hidden' : !$wire.open}" @click.away="$wire.open=false">
                        <div class="bg-white shadow-sm pt-2 mt-1 rounded scrollspy-example " data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="" tabindex="0" >
                            <div class=" px-4 py-3 ">
                                <form method="GET" action="{{route('cobertura.create')}}" >
                                @forelse ($users as $user)
                               
                                    
        
                                {{$user->name}}<input class="flex " name="user" type="radio" value="{{$user->id}}"  >
                                       
        
                                        
        
                                    
                               
                                
                
                                    
                                @empty
                                <p>No existe ninguna usuario con este nombre</p>
                                    
                                @endforelse
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enviar</font></font></button>

                            </form>
                                
                
                            </div>
                
                        </div>
            </div>
            
        
        
            </div>
       
</div>
