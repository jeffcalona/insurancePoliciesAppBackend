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
                    <form action="{{route("cobertura.send", $cobertura)}}" class="border bg-white shadow-md col-6 p-5" method="POST">
                        @csrf
                        @method('put')
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="relative z-0 mb-6 w-full group">
                                <input value="" type="text" name="asunto"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Asunto" required="">
                                <label  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Asunto</font></font></label>
                            
                                @error('asunto')
                                <br>
                                {{$message}}
                                <br>
                                @enderror
                            </div>

                            <div class="relative z-0 mb-6 w-full group">
                                <input value="" type="text" name="destinatario"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Destinatario" required="">
                                <label  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Destinatario</font></font></label>
                            
                                @error('destinatario')
                                <br>
                                {{$message}}
                                <br>
                                @enderror
                            </div>
                           
                            </div>
                            <div class="relative z-0 mb-6 w-full group">
                                <textarea name="content" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Contenido " cols="10" rows="5"></textarea>
                               <label  class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contenido</font></font></label>
                               @error('content')
                               <br>
                               {{$message}}
                               <br>
                               @enderror
                           
                           </div>
                        
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Enviar</font></font></button>
                    </form>
      
                </div>
            </div> 
           

        </div> 

    </div>

@endsection