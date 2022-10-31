<nav x-data="{ open: true }" class="shadow-lg bg-white dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
           
          
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
           
           
           
            <div @click.away="open = false" class="ml-3 relative z-10" x-data="{ open: false }">
                <div>
                    <button @click="open = !open" class="flex text-sm border-transparent rounded-full focus:outline-none focus:border-white transition duration-150 ease-in-out">
                        <div class="px-3 py-2 text-gray-600 dark:text-gray-100 font-semibold">{{ Auth::user()->name }}</div>
                        <img class="h-8 w-8 rounded-full" src="/images/rix.jpg" alt="" />
                    </button>
                </div>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                    <div class="py-1 rounded-md bg-white ring-1 ring-black ring-opacity-5">
                    <a href="{{url('profile')}}" class="block px-4 py-2 text-sm leading-5 text-gray-600 font-semibold hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm leading-5 text-gray-600 font-semibold hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Settings</a>
                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm leading-5 text-gray-600 font-semibold hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
            {{--            @endguest--}}
        </div>
      </div>
    </div>
    
</nav>