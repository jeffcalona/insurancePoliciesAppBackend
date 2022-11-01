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
                            <form  >
                            @forelse ($doctors as $doctor)
                           
                                
    
                                    {{$doctor->name}} <input class="px-2 " name="name" type="radio" value="{{$doctor->id}}"  id="flexRadioDefault1" >
                                   
    
                                    
    
                                
                           
                            
            
                                
                            @empty
                            <p>No existe ninguna usuario con este nombre</p>
                                
                            @endforelse
                            <input   type="submit">
                        </form>
                            
            
                        </div>
            
                    </div>
        </div>
        
    
    
        </div>
   
</div>
