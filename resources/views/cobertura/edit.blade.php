@extends('layouts.app')

@section('content')
    <div class="flex">
        {{-- SIDEBAR --}}
        @include('layouts.sidebar')
        {{-- END SIDEBAR --}}

        {{-- BODY SECTION --}}
        <div class="w-4/5 bg-gray-50 dark:bg-gray-800 overflow-y-hidden">
            @include('layouts.navbar')
          <div>
            <div class=" m-10">
                {{-- form edit --}}
                <form action="{{route('cobertura.update', $cobertura)}}" class="border bg-white shadow-md col-6 p-5" method="POST">
                    @csrf
                    @method('put')
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input value="{{$cobertura->fullNameP}}" type="text" name="email"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Nombre " required="">
                            <label  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre</font></font></label>
                        
                            @error('fullNameP')
                            <br>
                            {{$message}}
                            <br>
                            @enderror
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="number" name="identification" value="{{$cobertura->identificationP}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Identificación " required="">
                            <label  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Identificación</font></font></label>
                            @error('IdentificationP')
                            <br>
                            {{$message}}
                            <br>
                            @enderror
                        
                        </div>
                        </div>
                    
                 
                    <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input value="{{$cobertura->price}}" type="text" name="price"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Precio" required="">
                        <label  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Precio</font></font></label>
                    
                        @error('price')
                        <br>
                        {{$message}}
                        <br>
                        @enderror
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="plan" value="{{$cobertura->plan}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Identificación " required="">
                        <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Plan</font></font></label>
                        @error('plan')
                        <br>
                        {{$message}}
                        <br>
                        @enderror
                    
                    </div>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <input value="{{$cobertura->directionP}}" type="text" name="directionP"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Dirección" required="">
                            <label  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Direccción</font></font></label>
                        
                            @error('directionP')
                            <br>
                            {{$message}}
                            <br>
                            @enderror
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="number" name="phoneP" value="{{$cobertura->phoneP}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Telefono " required="">
                            <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Telefono</font></font></label>
                            @error('phoneP')
                            <br>
                            {{$message}}
                            <br>
                            @enderror
                        
                        </div>
                        </div>


                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 mb-6 w-full group">
                                <input value="{{$cobertura->nitC}}" type="text" name="nitC"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Nit" required="">
                                <label  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nit</font></font></label>
                            
                                @error('nitC')
                                <br>
                                {{$message}}
                                <br>
                                @enderror
                            </div>
                            <div class="relative z-0 mb-6 w-full group">
                                <input type="text" name="directionC" value="{{$cobertura->directionC}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Direcció con" required="">
                                <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dirección con</font></font></label>
                                @error('directionC')
                                <br>
                                {{$message}}
                                <br>
                                @enderror
                            
                            </div>
                            </div>


                            <div class="grid md:grid-cols-3 md:gap-6">
                                <div class="relative z-0 mb-6 w-full group">
                                    <input value="{{$cobertura->cityC}}" type="text" name="cityC"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="ciudad" required="">
                                    <label  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ciudad</font></font></label>
                                
                                    @error('cityC')
                                    <br>
                                    {{$message}}
                                    <br>
                                    @enderror
                                </div>
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="text" name="datePro" value="{{$cobertura->datePro}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Dia" required="">
                                    <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Dia</font></font></label>
                                    @error('datePro')
                                    <br>
                                    {{$message}}
                                    <br>
                                    @enderror
                                
                                </div>

                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="text" name="timePro" value="{{$cobertura->timePro}}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Hora" required="">
                                    <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hora</font></font></label>
                                    @error('timePro')
                                    <br>
                                    {{$message}}
                                    <br>
                                    @enderror
                                
                                </div>
                                </div>


                   
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enviar</font></font></button>
                </form>
  
            </div>
        </div> 

    </div>

@endsection