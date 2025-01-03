<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <title>DevStagram | @yield('titulo')</title>
        @vite('resources/css/app.css')
        {{-- alpinejs --}}
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x/dist/cdn.min.js" defer></script> 
        
    </head>
    <body class=" bg-gray-100" x-data="{ isSidebarOpen: false }">

        
        
        {{-- header --}}
        <header class="hidden lg:block p-5 border-b bg-white shadow">

            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    <a href="/">DevStagram</a>
                </h1>

                @auth
                <nav class="">
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="font-bold text-gray-600 p-1" href="/logout">Logout</button>
                    </form>
                </nav>
                
                @endauth

                @guest
                <nav class="">
                    <a class="font-bold text-gray-600 p-1" href="/login">Login</a>
                    <a class="font-bold text-gray-600 p-1" href="/register">Sing up</a>
                </nav>
                @endguest
                
            </div>

           

        </header>
        <div class="flex">
        {{-- sidebar --}}
        @auth
        <aside :class="isSidebarOpen ? 'block' : 'hidden'" class="w-64 mt-1 lg:block bg-white h-screen shadow-md fixed">
            <div class="flex flex-col p-4">
                <!-- Logo -->
                <div class="text-2xl font-bold mb-8">DevsTagram</div>
                
                <!-- Menu -->
                <nav class="flex flex-col space-y-8 text-xl ">
                    <a href="#" class="flex items-center text-gray-600 hover:text-blue-500 ">
                        <i class="fas fa-home"></i>
                        <span class="ml-4">Home</span>
                    </a>
                    <a href="#" class="flex items-center text-gray-600 hover:text-blue-500 ">
                        <i class="fas fa-search"></i>
                        <span class="ml-4">Search</span>
                    </a>
                    <a href="#" class="flex items-center text-gray-600 hover:text-blue-500 ">
                        <i class="fas fa-compass"></i>
                        <span class="ml-4">Explore</span>
                    </a>
                    <a href="#" class="flex items-center text-gray-600 hover:text-blue-500 ">
                        <i class="fas fa-bell"></i>
                        <span class="ml-4">Notifications</span>
                    </a>

                    {{-- create --}}
                    <div class="relative" x-data="{ open: false }">
                        <a href="#" @click="open = !open" class="flex items-center text-gray-600 hover:text-blue-500">
                            <i class="fas fa-plus-square"></i>
                            <span class="ml-4">Create</span>
                        </a>
                        <div 
                        x-show="open" @click.away="open = false" 
                        x-transition:enter="transition ease-out duration-200" 
                        x-transition:enter-start="opacity-0 transform scale-95" 
                        x-transition:enter-end="opacity-100 transform scale-100" 
                        x-transition:leave="transition ease-in duration-75" 
                        x-transition:leave-start="opacity-100 transform scale-100" 
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="absolute bg-white text-gray-600 mt-2 py-2 w-full border rounded-lg shadow">
                            <a href="{{ route('posts.create') }}" class="flex justify-between items-center px-4 py-2 hover:bg-gray-100 w-full" >
                                <span>Create Post  </span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <a href="/{{ auth()->user()->username }}" class="flex items-center text-gray-600 hover:text-blue-500 ">
                        <i class="fas fa-user"></i>
                        <span class="ml-4">Profile</span>
                    </a>
                </nav>
            </div>
        </aside>


        <!-- Mobile Menu -->
        <div class="lg:hidden fixed top-4 left-4">
            <button @click="isSidebarOpen = !isSidebarOpen" class="p-2 bg-blue-500 text-white rounded-full shadow-md">
                <span><i class="fas fa-bars"></i></span>
            </button>
        </div>
        @endauth
        

        <main class=" lg:ml-96 flex items-center container mx-auto mt-3">
            
            @yield('contenido')
        </main>
        
    </div>
        {{-- footer --}}
        <footer class=" text-sm text-center p-5 font-semibold text-gray-400">
            © DevStagram - Todos los derechos reservados - {{ now()->year }}
        </footer>

    </body>
</html>