<header class="bg-blue-500 sticky top-0" style="z-index: 900" x-data="{open_nav :false}">
    <div class="container flex items-center h-16 justify-between md:justify-start">
        <a  
            x-on:click="open_nav = !open_nav"
            class="flex flex-col items-center justify-center order-last md:order-first px-6 md:px-4 bg-white bg-opacity-25 text-white cursor-pointer font-semibold h-full">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <span class="text-sm hidden md:block">Menu</span>
        </a>

        <div class="mx-6 relative hidden md:block">
            
                
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                {{ Auth::user()->name }}
                            </button>
                        
                        </x-slot>
    
                        <x-slot name="content">
                          
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
    </div>

    <nav id="navigation-menu" 
        x-show="open_nav"
        class="bg-trueGray-700 bg-opacity-25 w-full absolute  ">

    dfdfs
    </nav>
</header>
